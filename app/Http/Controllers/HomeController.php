<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\CourseTitle;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Graph;
use App\Models\Trusted;
use App\Models\Develop;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'header' => Header::all(),
            'coursetitle' => CourseTitle::all(),
            'course' => Course::all(),
            'mentor' => Mentor::all(),
            'graph' => Graph::all(),
            'trusted' => Trusted::all(),
            'develop' => Develop::all(),
        ]);
    }
}
