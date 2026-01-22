
<?php
/*
# Write a PHP script tthat computes the future value(FV) of a given present amount. The formulat for future value is_a
FV = PV *[1+(i/m)]^(m*y)
where:
PV = Present Value(take as $3000)
i = annual interest rate (i = 0.4)
m = number of compounding periods per year (m = 4)
y = number of years(y = 6)
calculate and display the future value
*/
$PV = 3000;
$i = 0.4;
$m = 4;
$y = 6;
$base = 1 + ($i / $m);
$exponent = $m * $y;

$FV = $PV * pow($base, $exponent);
echo "The future value (FV) is: $" . number_format($FV, 2);


//Let us take  arithmetic operators
$a = 15;
$b = 5;

//Assignment operators
$c = $a + $b;
echo " \n The value for c is " . $c ;
// The new value for c is 20
$c += $a;
echo "\nThe new value for c is " .$c;

// Comparison operators
if ($a ==$b){
    echo "\nTrue";
}
else
     {
    echo "false";
}

//Making progress
//conditional operator?? I understand now
$result = ($a>$b)? $b:$a;
echo "\nValue of the result is " . $result; 


// Decision structures: The if Statement
if ($a>$b){
    
    echo "\nYou are right! \n";
}
// The if else statement 
//lets check if a student has pass the course DCIT 204

$pass_Mark = 65;
if ($pass_Mark>=80){
    echo "You have passed";
}
else 
{
    echo "You have failed";
}

//Using the if...elseif statement
if ($pass_Mark>=80){
    echo "Grade A";
}
elseif ($pass_Mark>=75){
    echo "Grade B";
} 
elseif ($pass_Mark>=65){
    echo "\n Grade B+ ";
}
// The nested if...
    

if ($pass_Mark <= 65 && $pass_Mark <=70)
    {
    if($pass_Mark<=65 && $pass_Mark>=50){
        echo "Success!";
    }
    else {
        echo "No Success";
    }

}
?>

<?php
//The switch... case 
$Age = 25;
switch ($Age){
    case 30:
        echo "He is 30 years old";
        break;
    case 26:
        echo "He is not a teenager";
        break;
    case 28:
        echo "He is a young person";
        break;
        default:
        echo "He is none of the above";
        break;
}
?>


<?php
//Writing a program to test students score and assign a letter
$pass_Mark = 78;
if ($pass_Mark >=90 && $pass_Mark<=100){
    echo "Grade A";
}
elseif ($pass_Mark <=89 && $pass_Mark<90){
    echo "Grade B";
}
elseif ($pass_Mark<=79 && $pass_Mark<80){
    echo "Grade C";
}
switch ($pass_Mark){
    case 60-69:
        echo "Grade D";
        break;
    case $pass_Mark<=60:
        echo "Grade F";
}

//Performing repeatitive tasks: Loops
// The while loop
$Age = 1;
$numberOfPens= 5;
while ($Age<=6){
    if ($Age == 6){
        break;
    }
    echo "\nPrint the number $Age";
    $Age++;
}
// The Do while loop
do {
    echo "\nYou have qualified";
    $numberOfPens++;

}
while($numberOfPens<=6);
