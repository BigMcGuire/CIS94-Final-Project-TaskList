<?php

include 'Page.php';
$page = new Page();
$page->title = 'Add Task';

include 'header.php';
include 'form_tpl.php';
include 'footer.php';
include 'tasklist.php';

function addTask($input) {
    
    // Thanks for a great year Professor Tonning. Have a great Summer 2017.
   		
		$myArray = new Tasklist();
		
		$myArray = $myArray->saveTaskHTML($input);
				
}

if(isset($_POST["submit"])) {
   addTask($_POST); 
}

?>