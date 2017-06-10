<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';
include 'tasklist.php';


// Add code here that will load the CSV file with the tasks in it
// and will print the tasks in a table
// The following is an example of how the table will be printed 
// between the header and the footer
$myArray = new Tasklist();

echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Completed(Y/N)</th>';
echo '        <th>Date Created</th>';
echo '        <th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
$myArray->loadRecordsHTML();

echo '    </tbody>';
echo '</table>';


include 'footer.php';

