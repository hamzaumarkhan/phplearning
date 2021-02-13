<?php
// Arrays
$days = array();
$days[0] = 'Mondahy';
$days[2] = 'Wednesday';
$days[3] = 'Thursday';
$days[4] = 'Friday';
$days[5] = 'Saturday';
$days[6] = 'Sunday';

echo $days[4];
echo '<br>';

$Months = array('January', 'February', 'March', 'April','May', 'June', 'July');
echo $Months[5];

// Asociative Arrays.. 
$tasks = array('fat'=>'First', 'sec'=>'Second','thr'=>'Third','frt'=>'Forth');
$tasks['x'] = 'Ten';
echo $tasks['x'];
echo '<br>';
$a_days = array();
$a_days['mon'] = 'Monday';
$a_days['tue'] = 'Tuesday';
$a_days['wed'] = 'Wednesday';
echo $a_days["wed"];
echo '<br>';
echo '<br>';

// MultiDimentional Arrays.. 
$employees = array('employee1' =>array(
    'name'=>'Ali','Designation'=>'Web Developer', 'skill'=>'PHP,Node.js,HTMl5'
), 'employee2'=>array(
    'name'=>'Hassan','Designation'=>'Web Designer', 'skill'=>'Photoshop,Ilustator,Freehand'
));
echo $employees['employee1']['Designation'];
echo '<br><br><br>';
for($c = 0; $c <= 6; $c++){
   echo $Months[$c];
   
}
echo '<br><br>';

// Printing Array With Different Looping Techniques.. 
foreach($a_days as $b_days){
    echo $b_days.'<br>';
}
echo '<br><br>';
foreach($tasks as $key => $tasks){
    echo $key. ' => '. $tasks . '<br>';
}
echo '<br><br>';
foreach( $employees as $emplooy){
    foreach( $emplooy as $key => $data){
        echo $key.': '.$data.'<br>';
    }
}


print_r($days);
echo '<br><br>';
echo count($days);
echo '<br><br>';

// $a_days = 'Tuesday';
//  if(in_array($a_days, $days)){
//      echo 'Moad inside the days array';
//  } esle {
//  echo 'Sorry Not Found';
//  }
echo '<br>';
if(is_array($days)) {
    echo 'True';
}else{
    echo 'False';
}
// Current Function .. 
echo '<br>';
echo current($days);
echo '<br><br><br>';
$items = array('Watches', 'Moblie', "Electronic", "Laptop");
array_push($iems, "Glass", "Battel", "Mouse");
print_r($items);

echo '<br><br>';

array_unshift($items, 'Keyoard', 'Glass', 'Box', 'Bettery');
print_r($items);
// Remove First Element.. 

echo '<br><br>';
array_shift($items);
print_r($items);

// Remove The Last Element .. 
array_pop($items);
print_r($items);

// Return the index 1 before index 0
echo '<br><br>';
sort($items);
print_r($items);
echo "<br><br>";

asort($tasks);
foreach($tasks as $key => $task){
    echo $key.'=>'.$task.'  <br>';
}

echo "<br><br>";
ksort($tasks);
foreach($tasks as $key => $task){
    echo $key.'=>'.$task;
    echo '<br>';
}
echo '<br><br>';
$designation = array_column($employees, 'Designation','name');
echo "<pre>";
print_r($designation);
echo "<pre>"; 

echo '<br><br>';

$nums = array(2,3,4,5,5);
echo array_sum($nums);
?>