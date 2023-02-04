<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\IOFactory;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function addStudents(Request $request)
    {
        $the_file = $request->file('studentsFile');

        $spreadsheet= IOFactory::load($the_file->getRealPath());
        $sheet        = $spreadsheet->getActiveSheet();
        $row_limit    = $sheet->getHighestDataRow();
        $column_limit = $sheet->getHighestDataColumn();
        $row_range    = range( 2, $row_limit );
        $column_range = range( 'G', $column_limit );
        $startcount = 2;
        $data = array();
        $students=[];
//        dd($sheet->getCell( 'A' . $row_range[0] )->getValue())

        $studentDB=new Students;
        $studentDB->where('group_id',$request->selectedGroup)->delete();
        foreach ($row_range as $row){
            array_push( $students,['student_name'=>$sheet->getCell( 'A' . $row )->getValue(),'military_number'=>rtrim($sheet->getCell( 'B' . $row )->getValue(),'.0'),'national_id'=>rtrim($sheet->getCell( 'C' . $row )->getValue(),'.0'),'phone_number'=>rtrim($sheet->getCell( 'D' . $row )->getValue(),'.0'),'major'=>$sheet->getCell( 'E' . $row )->getValue(),'entry_date'=>$sheet->getCell( 'F' . $row )->getValue(),'group_id'=>$request->selectedGroup]);
        }
        foreach ($students as $student){
            $studentDB->create($student);
        }
        return redirect()->back();
    }
    public function destroy(Students $students)
    {
        //
    }
}
