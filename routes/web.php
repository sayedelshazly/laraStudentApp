<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student_Old;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get(
    '/students',
    function(){
        $arr = [
            'students' => Student_Old::all()
        ];
        return view('students', $arr);
    }
);

Route::get(
    '/students/{id}',
    function($id){
            $student = Student_Old::find($id);
            return view('student', $student);

    }
);

