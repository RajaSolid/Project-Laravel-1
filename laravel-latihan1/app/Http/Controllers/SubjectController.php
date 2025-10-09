<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        $headers = ['ID', 'Name', 'Description'];
        $fields = ['id', 'name', 'description'];

        return view('subject', [
            'title' => 'Subjects',
            'subjects' => $subjects,
            'headers' => $headers,
            'fields' => $fields,
        ]);
    }
}
