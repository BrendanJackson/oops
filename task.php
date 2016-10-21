<?php

class Task 	
{
	public $title;
	public $description;
	public $completed = false;
	// construct methods are called on instantiation of class
	public function __construct($title, $description)
	{
		$this->title = $title;	
		$this->description = $description;	
	}
	// if run completed = true /else false
	public function complete() 
	{
		$this->completed = true;
	}
}

$task = new Task("Through me", "how to take your life from 'For me' to 'Through me' "); 
// $task2 = new Task("Go to Fusion Corps");
$task->complete();
var_dump("Completed Status: " . $task->completed);
var_dump("Title: " . $task->title);
var_dump("Description: " . $task->description);


// give Task a title 