<?php
// Function
function func1(){
    echo 'This is a function.<br>';

}
func1();

function ret($x, $y){
    return $x + $y;
}
    $var1 = ret(32,45);
    echo $var1 . "<br>";
    // str Function
    $str = 'Hello Students';
    echo substr($str, 7, 5);
    echo "<br>";
   // pos Function.. 
    $pos = 'Hello I am Hamza: I am live in Rawalpindi';
   echo strpos($pos, 'am', 9);

?>