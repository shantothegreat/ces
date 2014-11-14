<?php 

class Instructor extends Eloquent {

    protected $table = 'instructors';

    public $timestamps = false;

    public function department()
    {
        return $this->belongs_to('Department');
    }

}