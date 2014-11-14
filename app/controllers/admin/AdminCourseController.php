<?php

class AdminCourseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return "bla bla bal";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('admin/create/course');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Input::merge(array_map('trim', Input::all()));
		$rules = array(
            'course_code'          => 'required|alpha_num',
            'course_title'         => 'required',
            'course_year'          => 'required|integer',
            'course_semester'      => 'required|integer|between:1,2',
            'course_offer_to'    => 'required|exists:departments,code',
            'course_offer_from'  => 'required|exists:departments,code',
            'instructor_name'      => 'required|exists:instructors,name'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes())
        {   
            // Create a new instructor
            $course = new Course;

            // Update instructor data
            $course->code  			= Input::get('course_code');
            $course->title 			= Input::get('course_title');
            $course->year 			= Input::get('course_year');
            $course->semester 		= Input::get('course_semester');
            $course->offer_to 		= Department::where( 'code' , '=' , Input::get('course_offer_to') )->first()->id;
            $course->offer_from 	= Department::where( 'code' , '=' , Input::get('course_offer_from') )->first()->id;
            $course->instructors_id = Instructor::whereRaw( ' departments_id = ? and name = ? ' , array( $course->offer_from , Input::get('instructor_name') ) )->first()->id;

	        // Was the instructor created?
	        if($instructor->save())
	        {
	            // Redirect to the new blog post page
	            return Redirect::to('/');
	        }
	        // Redirect to the blog post create page
	        return Redirect::to('admin/create/course')->with('error', 'Error to create Instructor');
        }
        // Form validation failed
        return Redirect::to('admin/create/course')->withInput()->withErrors($validator);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
