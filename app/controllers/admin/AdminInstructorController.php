<?php

class AdminInstructorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('admin/create/instructor');
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
            'name'   => 'required',
            'dept_name' => 'required|exists:departments,code'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes())
        {   
            // Create a new instructor
            $instructor = new Instructor;

            // Update instructor data
            $instructor->name = Input::get('name');
            $instructor->departments_id =  Department::where( 'code' , '=' , Input::get('dept_name') )->first()->id;


	        // Was the instructor created?
	        if($instructor->save())
	        {
	            // Redirect to the new blog post page
	            return Redirect::to('/');
	        }
	        // Redirect to the blog post create page
	        return Redirect::to('admin/create/instructor')->with('error', 'Error to create Instructor');
        }
        // Form validation failed
        return Redirect::to('admin/create/instructor')->withInput()->withErrors($validator);
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
