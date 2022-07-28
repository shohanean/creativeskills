<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    private $course_id = "";
    function __construct($course){
        $this->course_id = $course;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'course_id' => $this->course_id,
            'date' => $row[0],
            'student_name' => $row[1],
            'course_fee' => $row[2],
            'vat' => $row[3],
            'net_amount' => $row[4]
        ]);
    }
}
