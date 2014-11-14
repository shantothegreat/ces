


<form action="{{ action('AdminCourseController@store') }}" method="POST" autocomplete="off">
	<input name="course_code" type="text" placeholder="Course Code" value="{{{ Input::old('course_code') }}}"/>
	{{{ $errors->first('course_code', '<span class="help-block">:message</span>') }}}

	<input name="course_title" type="text" placeholder="Course Title" value="{{{ Input::old('course_title') }}}"/>
	{{{ $errors->first('course_title', '<span class="help-block">:message</span>') }}}

	<input name="course_year" type="text" placeholder="Year" value="{{{ Input::old('course_year') }}}"/>
	{{{ $errors->first('course_year', '<span class="help-block">:message</span>') }}}

	<input name="course_semester" type="text" placeholder="Semester" value="{{{ Input::old('course_semester') }}}"/>
	{{{ $errors->first('course_semester', '<span class="help-block">:message</span>') }}}

	<input name="course_offer_to" type="text" placeholder="Offered to" value="{{{ Input::old('course_offer_to') }}}"/>
	{{{ $errors->first('course_offer_to', '<span class="help-block">:message</span>') }}}

	<input name="course_offer_from" type="text" placeholder="Offered from" value="{{{ Input::old('course_offer_from') }}}"/>
	{{{ $errors->first('course_offer_from', '<span class="help-block">:message</span>') }}}

	<input name="instructor_name" type="text" placeholder="instructor_name" value="{{{ Input::old('instructor_name') }}}"/>
	{{{ $errors->first('instructor_name', '<span class="help-block">:message</span>') }}}

	<input type="submit" value="Create Course"/>
</form>