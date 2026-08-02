<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Category;


class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('categories')->latest()->paginate(12);
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('categories')->findOrFail($id);
        return view('courses.show', compact('course'));
    }
}


