

<form action="{{ action('AdminInstructorController@store') }}" method="POST" autocomplete="off">
	<input name="name" type="text" value="{{{ Input::old('name') }}}" placeholder="Instructor name"/>
	{{{ $errors->first('name', '<span class="help-block">:message</span>') }}}
	
	<input name="dept_name" type="text" value="{{{ Input::old('dept_name') }}}" placeholder="Department code"/>
	{{{ $errors->first('dept_name', '<span class="help-block">:message</span>') }}}

	<input type="submit" value="Create Instructor"/>
</form>