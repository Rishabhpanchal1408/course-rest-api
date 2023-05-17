<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::get();
        return [
            "status" => 1,
            "data" => $course
        ];
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_price' => 'required',
        ]);

        $course = Course::create($request->all());
        return [
            "status" => 1,
            "data" => $course
        ];
    }

    public function show(Course $course)
    {
        return [
            "status" => 1,
            "data" => $course
        ];
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required',
            'course_price' => 'required',
        ]);

        $course->update($request->all());
        return [
            "status" => 1,
            "data" => $course
        ];
    }

    public function destroy(Course $course)
    {
        return [
            "status" => 1,
            "data" => $course
        ];
    }
}