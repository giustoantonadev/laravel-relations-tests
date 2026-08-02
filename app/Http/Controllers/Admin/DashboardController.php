<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $coursesCount = Course::count();
        $categoriesCount = Category::count();
        $usersCount = User::count();

        $recentCourses = Course::with('categories')->latest()->take(5)->get();
        $recentCategories = Category::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'coursesCount',
            'categoriesCount',
            'usersCount',
            'recentCourses',
            'recentCategories'
        ));
    }
}
