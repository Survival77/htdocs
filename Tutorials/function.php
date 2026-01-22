<?php
//User defined functions
/*We can pass in parameters in the parenthesis. If you declare a variable outside a fxn, it is a global 
fxn. In order to use it,pass it in or declare it as a global variable */
function get_Name ( string $firstName, string $lastName ,  int $Age,string $Gender){
    
    echo " The full name is $firstName $lastName, the age is $Age and he is a $Gender";
}
get_Name("Eric ", "Ananga " , 20 , "Male");

// A function returning a value
function calculate_Value($interest, $years)
{
    return $interest* $years;
}
 echo calculate_Value(20,5);

function total_Cost ($product, $sum){
    return $product * $sum;
}
 echo total_Cost(15,20);

 // 