<?php
namespace App\Modules\Attendance\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;
use Config;

class Subject extends Model
{
    protected $fillable = ['name','courseid','semesterid','description'];
    protected $table = 'subject';
    protected $connection;

    public function __construct() {
        $this -> connection = \Session::get('mysql_attendance_database_conn');
    }
}
