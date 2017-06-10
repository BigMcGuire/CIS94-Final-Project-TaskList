<?php

include 'task.php';

class Tasklist extends Task {
	public $taskArray;
	
	public function saveTaskHTML($myarray) {
		$myfile = fopen("test.csv", "a+") or die("Unable to open file!");
		$taskArray2 = new Task();
		
		
		foreach($myarray as $x => $x_value) {
	  	if ($x == "task")
	  	{
	  		$taskArray2->setDescription($x_value);	
	  	}
	  		
	    if ($x == "datecreated")
	    {
	    	$taskArray2->setDateCreated($x_value);
	    }
	    
	  	if ($x == "datecompleted")
	  	{
	  		$taskArray2->setDateCompleted($x_value);
	  	}
	  	
	  	if ($x == "iscompleted")
	  	{
	  		$taskArray2->setCompleted($x_value);
	  	}
	  }		
	  
  	$lineToSave = "".$taskArray2->getDescription().",".$taskArray2->getCompleted().",".$taskArray2->getDateCreated().",".$taskArray2->getDateCompleted()."\n";
		
		fwrite($myfile, $lineToSave);
	  
    fclose($myfile);
	}
	
	public function saveTask() {
		$myfile = fopen("test.csv", "w") or die("Unable to open file!");
	
		$taskArray2 = new Task();
		$desc2 = 'Second Task'; $taskArray2->setDescription($desc2);
		$comp2 = 'N'; $taskArray2->setCompleted($comp2);
		$date_created2 = '4/3/2017'; $taskArray2->setDateCreated($date_created2);
		$date_completed2 = ''; $taskArray2->setDateCompleted($date_completed2);
		
		fwrite($taskArray2->description, $taskArray2->completed);
		fwrite($taskArray2->date_created);
		fwrite($taskArray2->date_completed);
		fwrite("\n");
    
    fclose($myfile);
	}
	
	public function saveAll($saveArray) {
	
		$myfile = fopen("test.csv", "w") or die("Unable to open file!");
		
		if (is_array($saveArray) || is_object($saveArray))
    {
      foreach ($saveArray as $saveArray) {
  			
  			$lineToSave = "".$saveArray->getDescription().",".$saveArray->getCompleted().",".$saveArray->getDateCreated().",".$saveArray->getDateCompleted()."\n";
  			// $lineToSave = "".$saveArray->getDescription().",".$saveArray->getCompleted().",".$saveArray->getDateCreated().",".$saveArray->getDateCompleted()."\r\n";  			
  			fwrite($myfile, $lineToSave);
		  }  
    }
    
    fclose($myfile);
    
	}
	
	public function saveRecords() {	
		$myfile = fopen("test.csv", "w") or die("Unable to open file!");
		$txt = "id,description,completed,date\n";
		fwrite($myfile, $txt);
		$txt = "1,Go to the dentist,yes,5/7/2017\n";
		fwrite($myfile, $txt);
		$txt = "2,Finish PHP project,no,\n";
		fwrite($myfile, $txt);
		$txt = "3,Go to the store,yes,5/2/2017\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		$myfile = fopen("test.csv", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("test.csv"));
		fclose($myfile);
		$row = 1;
		$header = ["id","description","completed","date"];
		if (($handle = fopen("test.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
		        for ($c=0; $c < $num; $c++) {
		            // the $header array defined above is how we can identify what 
		            // the field index is describing
		            echo $header[$c].": ".$data[$c]."\t";
		        }
		        echo "\n";
		    }
		    fclose($handle);
		}	
		
	}
	
	public function loadRecords() {
		$loadArray = new Task();
		
		$myfile = fopen("test.csv", "r") or die("Unable to open file!");
		
		$header = ["description","completed","date_created","date_completed"];
		$row = 1;
		echo "<br><br>";
		if (($handle = fopen("test.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $num = count($data);
	        $row++;
	        for ($c=0; $c < $num; $c++) {
	            // the $header array defined above is how we can identify what 
	            // the field index is describing
	            echo $header[$c].": ".$data[$c]."\t";
	        }
	        echo "<br>";
	    }
	    fclose($handle);
		}
	}
	
	public function loadRecordsHTML() {
		$loadArray = new Task();
		
		$myfile = fopen("test.csv", "r") or die("Unable to open file!");
		
		$header = ["description","completed","date_created","date_completed"];
		$row = 1;
		echo "<br><br>";
		if (($handle = fopen("test.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $num = count($data);
	        $row++;
	        echo '<tr>';
	        for ($c=0; $c < $num; $c++) {
	            // the $header array defined above is how we can identify what 
	            // the field index is describing
	            echo '<td>'.$data[$c].'</td>';
	        }
	        echo '</tr>';
	    }
	    fclose($handle);
		}
	}
	
	public function fillTasksFunctions() {
		$taskArray1 = new Task();
		$desc1 = 'First Task'; $taskArray1->setDescription($desc1);
		$comp1 = 'Y'; $taskArray1->setCompleted($comp1);
		$date_created1 = '4/3/2017'; $taskArray1->setDateCreated($date_created1);
		$date_completed1 = '4/5/2017'; $taskArray1->setDateCompleted($date_completed1);
		
		$taskArray2 = new Task();
		$desc2 = 'Second Task'; $taskArray2->setDescription($desc2);
		$comp2 = 'N'; $taskArray2->setCompleted($comp2);
		$date_created2 = '4/3/2017'; $taskArray2->setDateCreated($date_created2);
		$date_completed2 = ''; $taskArray2->setDateCompleted($date_completed2);
		
		$taskArray3 = new Task();
		$description3 = 'Third Task'; $taskArray3->setDescription($description3);
		$completed3 = 'Y'; $taskArray3->setCompleted($completed3);
		$date_created3 = '2/7/2017'; $taskArray3->setDateCreated($date_created3);
		$date_completed3 = '4/1/2017'; $taskArray3->setDateCompleted($date_completed3);
		
		$taskArray4 = new Task();
		$description4 = 'Fourth Task'; $taskArray4->setDescription($description4);
		$completed4 = 'Y'; $taskArray4->setCompleted($completed4);
		$date_created4 = '1/1/2017'; $taskArray4->setDateCreated($date_created4);
		$date_completed4 = '1/10/2017'; $taskArray4->setDateCompleted($date_completed4);
		
		$taskArray5 = new Task();
		$description5 = 'Fifth Task'; $taskArray5->setDescription($description5);
		$completed5 = 'N'; $taskArray5->setCompleted($completed5);
		$date_created5 = '5/1/2017'; $taskArray5->setDateCreated($date_created5);
		$date_completed5 = ''; $taskArray5->setDateCompleted($date_completed5);
		
		$taskArray6 = new Task();
		$description6 = 'Sixth Task'; $taskArray6->setDescription($description6);
		$completed6 = 'Y'; $taskArray6->setCompleted($completed6);
		$date_created6 = '1/11/2017'; $taskArray6->setDateCreated($date_created6);
		$date_completed6 = '2/20/2017'; $taskArray6->setDateCompleted($date_completed6);
		
		$taskArray7 = new Task();
		$description7 = 'Seventh Task'; $taskArray7->setDescription($description7);
		$completed7 = 'N'; $taskArray7->setCompleted($completed7);
		$date_created7 = '3/1/2017'; $taskArray7->setDateCreated($date_created7);
		$date_completed7 = ''; $taskArray7->setDateCompleted($date_completed7);
		
		$taskArray8 = new Task();
		$description8 = 'Eighth Task'; $taskArray8->setDescription($description8);
		$completed8 = 'N'; $taskArray8->setCompleted($completed8);
		$date_created8 = '2/11/2017'; $taskArray8->setDateCreated($date_created8);
		$date_completed8 = ''; $taskArray8->setDateCompleted($date_completed8);
		
		$taskArray9 = new Task();
		$description9 = 'Ninth Task'; $taskArray9->setDescription($description9);
		$completed9 = 'Y'; $taskArray9->setCompleted($completed9);
		$date_created9 = '2/1/2017'; $taskArray9->setDateCreated($date_created9);
		$date_completed9 = '2/20/2017'; $taskArray9->setDateCompleted($date_completed9);
		
		$taskArray10 = new Task();
		$description10 = 'Tenth Task'; $taskArray10->setDescription($description10);
		$completed10 = 'Y'; $taskArray10->setCompleted($completed10);
		$date_created10 = '3/11/2017'; $taskArray10->setDateCreated($date_created10);
		$date_completed10 = '4/20/2017'; $taskArray10->setDateCompleted($date_completed10);
		
		$taskArray = array($taskArray1, $taskArray2, $taskArray3, $taskArray4, $taskArray5, $taskArray6, $taskArray7, $taskArray8, $taskArray9, $taskArray10);

    return $taskArray;
	}
	
	public function fillTasksManually() {
		$taskArray1 = new Task();
		$taskArray1->description = 'First Task';
		$taskArray1->completed = 'Y';
		$taskArray1->date_created = '4/3/2017';
		$taskArray1->date_completed = '4/5/2017';
		
		$taskArray2 = new Task();
		$taskArray2->description = 'Second Task';
		$taskArray2->completed = 'N';
		$taskArray2->date_created = '2/1/2017';
		$taskArray2->date_completed = '';
		
		$taskArray3 = new Task();
		$taskArray3->description = 'Third Task';
		$taskArray3->completed = 'Y';
		$taskArray3->date_created = '2/7/2017';
		$taskArray3->date_completed = '4/1/2017';
		
		$taskArray4 = new Task();
		$taskArray4->description = 'Fourth Task';
		$taskArray4->completed = 'Y';
		$taskArray4->date_created = '1/1/2017';
		$taskArray4->date_completed = '1/10/2017';
		
		$taskArray5 = new Task();
		$taskArray5->description = 'Fifth Task';
		$taskArray5->completed = 'N';
		$taskArray5->date_created = '5/1/2017';
		$taskArray5->date_completed = '';
		
		$taskArray6 = new Task();
		$taskArray6->description = 'Sixth Task';
		$taskArray6->completed = 'Y';
		$taskArray6->date_created = '1/11/2017';
		$taskArray6->date_completed = '2/20/2017';
		
		$taskArray7 = new Task();
		$taskArray7->description = 'Seventh Task';
		$taskArray7->completed = 'N';
		$taskArray7->date_created = '3/1/2017';
		$taskArray7->date_completed = '';
		
		$taskArray8 = new Task();
		$taskArray8->description = 'Eighth Task';
		$taskArray8->completed = 'N';
		$taskArray8->date_created = '2/11/2017';
		$taskArray8->date_completed = '';
		
		$taskArray9 = new Task();
		$taskArray9->description = 'Ninth Task';
		$taskArray9->completed = 'Y';
		$taskArray9->date_created = '2/1/2017';
		$taskArray9->date_completed = '2/20/2017';
		
		$taskArray10 = new Task();
		$taskArray10->description = 'Tenth Task';
		$taskArray10->completed = 'Y';
		$taskArray10->date_created = '3/11/2017';
		$taskArray10->date_completed = '4/20/2017';
		
		$taskArray = array($taskArray1, $taskArray2, $taskArray3, $taskArray4, $taskArray5, $taskArray6, $taskArray7, $taskArray8, $taskArray9, $taskArray10);
		
		return $taskArray;
	}
	
	public function printTasksManually($paulArray) {
	  
		foreach ($paulArray as $paulArray) {
			echo "\n";
			echo 'Task : ' .$paulArray->description.' ----- Completed: '.$paulArray->completed."<br>";
			echo 'Date Created: '.$paulArray->date_created."<br>";
			echo 'Date Completed: '.$paulArray->date_completed."<br>";
		}
	}
	
	public function printTasks($paulArray) {

    if (is_array($paulArray) || is_object($paulArray))
    {
      foreach ($paulArray as $paulArray) {
  			echo "\n";
  			echo 'Task : ' .$paulArray->getDescription().' ----- Completed: '.$paulArray->getCompleted()."<br>";
  			echo 'Date Created: '.$paulArray->getDateCreated()."<br>";
  			echo 'Date Completed: '.$paulArray->getDateCompleted()."<br>";
		  }  
    }
		
	}
}
?>