<?php

class AdminDepartmentController extends \BaseController {

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
		return View::make('admin/create/department');
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
            'dept_code'   => 'required|unique:departments,code|alpha_num',
            'dept_name' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes())
        {
        	$user = Auth::user();
            
            // Create a new department
            $dept = new Department;

            // Update department data
            $dept->code = Input::get('dept_code');
            $dept->name = Input::get('dept_name');

	        // Was the blog post created?
	        if($dept->save())
	        {
	            // Redirect to the new blog post page
	            return Redirect::to('/');
	        }
	        // Redirect to the blog post create page
	        return Redirect::to('admin/create/department')->with('error', 'Error to create department');
        }
        // Form validation failed
        return Redirect::to('admin/create/department')->withInput()->withErrors($validator);
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
