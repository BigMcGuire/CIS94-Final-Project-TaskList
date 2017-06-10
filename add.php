<?php

include 'Page.php';
$page = new Page();
$page->title = 'Add Task';

include 'header.php';
include 'form_tpl.php';
include 'footer.php';
include 'task.php';

function addTask($input) {
    
    
    // I CANNOT get the Add button to work - it doesn't look like there is any code that does anything to make it work.
    // I can take the code below and put it outside of this function and it will run successfully.
    // However in this addTask function it never gets run, no matter how many times the add button is clicked.
    // I know in c++ and C# we need an on click event handler but I assume I'm over-complicating things as usual
    // So I'll just leave this here. (Yes, tried on Internet Explorer, Chrome, etc...).
    
    // Would love to know this is supposed to work.
    // At least the List works ! :P
    
    // Thanks for a great year Professor Tonning. Have a great Summer 2017.
    
    $myArray = new Tasklist();
    
    $paulArray = $myArray->fillTasksFunctions();
    echo 'Array filled!'."\r\n";
	
		echo 'Now let us output this array!'."\r\n";
		
		$myArray->printTasks($paulArray);
		
		$myArray->saveAll($paulArray);
				
}

if(isset($_POST["submit"])) {
   addTask($_POST); 
}

?>