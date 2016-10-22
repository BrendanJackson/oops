<?php

class Task 	
{
	public $time;
	public $item;
	// public $title;
	// public $description;
	// public $completed = false;
	// construct methods are called on instantiation of class
	// public function __construct($title, $description)
	// {
	// 	$this->title = $title;	
	// 	$this->description = $description;	
	// }
	// // if run completed = true /else false
	// public function complete() 
	// {
	// 	$this->completed = true;
	// }
	public function set_time() 
	{
		$time_zone = 'America/New_York';
		$timestamp = time();
		$DateTime = new DateTime("now", new DateTimeZone($time_zone)); //first argument "must" be a string
		$DateTime->setTimestamp($timestamp); //adjust the object to correct timestamp
		$this->time = $DateTime->format('d.m.Y, H:i:s');

	}

	public function get_time() 
	{
		if ($removed_time <= $checked_time+7days)
		{
			echo "This item is expired";
		} else {
			echo "This item will expire in" . $time;
		}
	}

	public function __construct($item) 
	{
		$this->item = $item;
	}
	

}
$task = new Task("produce");
var_dump($task->item);
// $task->what_time();
$task->set_time();
var_dump($task->time);


// $task->set_time_out($what_time);
// $task = new Task("Through me", "how to take your life from 'For me' to 'Through me' "); 
// $task2 = new Task("Go to Fusion Corps");
// $task->complete();
// var_dump("Completed Status: " . $task->completed);
// var_dump("Title: " . $task->title);
// var_dump("Description: " . $task->description);


// give Task a title 

