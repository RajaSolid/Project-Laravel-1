<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $students = Student::all();

    $headers = ['ID', 'Name', 'Birthday', 'Gender', 'Classroom ID', 'Email', 'Address']; 
    $fields  = ['id', 'name', 'birthday', 'gender', 'classroom_id', 'email', 'address'];

    return view('student', [
        'title' => 'Students',
        'student' => $students,
        'headers' => $headers,
        'fields' => $fields,
        'headerCount' => count($headers),
        'studentCount' => count($students),
        'fieldCount' => count($fields),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
