<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Assignment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'assignments';
    protected $fillable = ['name','description','rubric','total_marks','start_date_time','end_date_time','allow_late_submision','more_info_link','added_by','subject_id','visibility','file_link'];

    public function assignment_get_subjects() {
        return $this->belongsTo('App\Models\Subject','subject_id');
    }

    public function assignment_get_teachers() {
        return $this->belongsTo('App\Models\User','added_by');
    }

    public function assignment_submission_get_assignments() {
        return $this->hasMany('App\Models\AssignmentSubmission','assignment_id');
    }

}
