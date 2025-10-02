<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        $headers = ['ID', 'Name', 'Grade'];
        $fields  = ['id', 'name', 'grade'];


        return view('classroom', [
            'title' => 'Classrooms',
            'classrooms' => $classrooms,
            'headers'   => $headers,
            'fields'    => $fields,
        ]);
    }
}
