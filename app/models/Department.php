<?php 

class Department extends Eloquent {

    protected $table = 'departments';

    public $timestamps = false;

    public function instructor()
    {
        return $this->has_many('instructor');
    }
}