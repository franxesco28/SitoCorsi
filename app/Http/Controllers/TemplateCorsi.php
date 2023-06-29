<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateCorsi extends Controller
{
    //

    private \Traversable $lectures;
    private \Traversable $courses;

    public function __construct($courses, $lectures = []) {

        $this->courses = $courses;
        $this->lectures = $lectures;
    }

    public function render(){

        return view('components.template-corsi');

    }

}
