<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#fillable(['name'])]
#[table('subjects')]
class subject extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsToMany(
            Student::class,
            'student_subject',
            'subject_id',
            'student_id'
        );
    }
}