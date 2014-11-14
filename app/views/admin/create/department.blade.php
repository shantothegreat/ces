



<form action="{{ action('AdminDepartmentController@store') }}" method="POST" autocomplete="off">
	<input name="dept_code" type="text" value="{{{Input::old('dept_code')}}}" placeholder="IPE"/>
	{{{ $errors->first('dept_code', '<span class="help-block">:message</span>') }}}
	
	<input name="dept_name" type="text" value="{{{ Input::old('dept_name') }}}" placeholder="Computer Science and Engineering"/>
	{{{ $errors->first('dept_name', '<span class="help-block">:message</span>') }}}

	<input type="submit" value="Create Department"/>
</form>
