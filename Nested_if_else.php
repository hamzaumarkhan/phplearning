<?php
// Nested If Else Statement..  
$var1 = 5;
$var3 = 5;

$var4 = 3;
$var5 = 6;
if($var1 == $var3) {
    if($var4 != $var5) {
        echo 'Everything is perfect :';
    }else {
        echo 'The First Block Was Perfect But Second is Not';
    }
}else {
    echo 'Sorry About This Line ';
}

// Nested If Else... 
$cookbook = 'yes';
$chicken_recipes = 'No';
$fried_chicken = 'yes';
if($cookbook == 'yes') {
    if($chicken_recipes == 'yes'){
        if($fried_chicken == 'yes'){
            echo ' We Have Everything Wich You Want :';
        }else{
            echo 'We Have The Many Cookbook And Many Chicken recipes, But Sorry About The Fried Chicken.Try Some Other If You Like:';
            
                   }
    }else{
        echo 'we Have to cookbook, But Sorry About The Chicken recipes';
    }
}else{
    echo 'Sorry We Have No Cookbook';
}
// Nested Else If ... 
$Book = 'No';
$Copy = 'No';
$Newspaper = 'No';
$Magzenie = 'No';
if($Bool == 'yes'){
    echo 'We Got The Book';
}else if ($Copy == 'yes'){
    echo 'We Got The Copy';
}else if ($newspaper == 'yes'){
    echo 'We Got The News Paper';
}else if ($Magzenie == 'yes'){
    echo 'We Got The Magzine';
}else {
    echo 'Ohh, I Wasted My Time To Go The Inside The Book Shop We Got Nothing';+
}


?>