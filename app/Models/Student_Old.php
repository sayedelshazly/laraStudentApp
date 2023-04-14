<?php

namespace App\Models;

    class Student_Old {
        public static function all(){

            $students = [
                [
                    'id' => 1,
                    'name' => 'Sayed',
                    'city' => 'Shibeen',
                    'phone' => '999999',
                    'email' => 'sel33@gmail.com'
                ],
                [
                    'id' => 3,
                    'name' => 'Mohamed',
                    'city' => 'Alex',
                    'phone' => '994446',
                    'email' => 'moha773@gmail.com'
                ],
                [
                    'id' => 2,
                    'name' => 'Gasser',
                    'city' => 'Cairo',
                    'phone' => '994446',
                    'email' => 'gas773@gmail.com'
                ],
                [
                    'id' => 4,
                    'name' => 'Ahmed',
                    'city' => 'Menofia',
                    'phone' => '994446',
                    'email' => 'ahm773@gmail.com'
                ],
                [
                    'id' => 3,
                    'name' => 'Mohamed',
                    'city' => 'Alex',
                    'phone' => '994446',
                    'email' => 'moha773@gmail.com'
                ],
                [
                    'id' => 2,
                    'name' => 'Gasser',
                    'city' => 'Cairo',
                    'phone' => '994446',
                    'email' => 'gas773@gmail.com'
                ],
                [
                    'id' => 4,
                    'name' => 'Ahmed',
                    'city' => 'Menofia',
                    'phone' => '994446',
                    'email' => 'ahm773@gmail.com'
                ]
                ];

        return $students;
    }

    public static function find($id){
        $students = self::all();

        foreach($students as $student){
            if($student['id'] == $id){
                return $student;
            }
        }
    }
    }
