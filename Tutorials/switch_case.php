<?php
$studentNumber = 10;
switch ($studentNumber):
    case 20:
        echo "The students are many";
    break;
    case 15:
        echo "The students are too many";
        break;
    case 10:
        echo "The students are few";
        break;
        
    endswitch;

if ($studentNumber>=20){
    echo "Admission can be accepted";
}
elseif($studentNumber==15){
    echo " \nThe admission will be optional";
}
else {
    echo "\nThere is no admission";
}


//The foreach...loop...I prefer the array as $value to the $key as value
$colours = array(  "name" =>"Blue" , "skin" => "Red" ,"Origin"=> "Orange");
foreach ($colours as $key =>$value) {
    $Kinds = $value;
    echo $Kinds;
}

    //Exercise: Using a for loop, write a script that computes and prints the values of the sum 2 + 4 + ... + 100.
$sum =0;
for ($even_number =2; $even_number<=100; $even_number += 2){
    $sum += $even_number;
    echo "  $sum";
   
}

?>