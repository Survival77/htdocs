<?php
//Numeric Arrays
$colours = array('Blue', 'Red', 'Green', 'Violet', 'Orange');
echo $colours[4];
$colours[3] = 'Black';
echo $colours[3];

?>

<?php
//Associative Arrays
//This array set makes it unique to access members without sequence. It is not linear and strict
$Countries = array(
	'Name' => 'Ghana',
	'Capital city' => 'Accra',
	'Population' => 3000000,
	'Land size' => '9075000km'
);
echo $Countries['Name'];
echo $Countries['Capital city'];

/*
We shall store the salaries of employees  in an array using the employees 
names as the keys in our associative array and the value for their repective salaries
*/
$Salaries = array ('John'=> 2500, 'Eric'=> 4000, 'Pius'=> 5000);
echo 'The salary of John is ' . $Salaries['John'];
$Salaries['John'] = 'Low';

echo 'The salary of John is ' . $Salaries['John'];
?>
<?php
//You can have arrays with both indexed and named keys
//PHP_EOL is a newline character sequence appropriate for the OS (on Windows "\r\n").
$Fruits = [];
$Fruits[0]= "Pawpaw";
$Fruits[1] = "Apple";
$Fruits[2] = "Pear";
$Fruits["Citrus"]= "Orange";
echo PHP_EOL . "The citrus fruit here is " .$Fruits["Citrus"];
echo PHP_EOL .  "John likes eating " .$Fruits[1];
//Array items can be of any data type, including function.
function myName() {
  echo PHP_EOL .  "The literal name is John!";
}

$myArr = array("Volvo", 15, "myName");

$myArr[2]();
//Always check that the value is callable before invoking to avoid fatal errors
?>

<?php
// Multi-dimensional Array:2-D
$Names = array(
	array("John", "Male", 15),
	array("Eric", "Male", 18),
	array("Eunice", "Female", 20),
);
echo "The name of the girl is " . $Names[2][0] . " and her age is " . $Names[2][2];
//3-Dimensional: For this , you will need 3 indices to select the array
$Admissions = array(
	array(array("Albert","Passed", 9, "Admitted")),
	array(array("Julius", "Passed", 10, "Admitted")),
	array(array("Dennis", "Not passed", 20, "Not admitted")),
);

echo  PHP_EOL. 'First student name: ' . $Admissions[0][0][0];         // Albert
echo  PHP_EOL. 'First student status: ' . $Admissions[0][0][1];       // Passed
echo  PHP_EOL.'Third student admission: ' . $Admissions[2][0][3];    // Not admitted
// Array functions
$Marks = array(29,74,843,93,30,);
$array_size = sizeof($Marks);
echo  PHP_EOL. $array_size;
sort($Marks);
echo PHP_EOL.  implode (" ",$Marks);
?>

<?php
class Animals{
	private $Birds;
	
	public function set_Data($Birds){
		$this->Birds= $Birds;
	}
	public function get_Data(){
		return $this->Birds;
	}
}

$Eagle = new Animals();
$Eagle->set_Data("Eagle");
echo "The bird is an " . $Eagle->get_Data();


/*we use the public setter and getter to access private variables.
 Public variables can be accessed without the getters and setters.
 New objects are created from the general class before printing*/

 ?>
 

 <?php
 //form handling ...
 // We will working on handling of forms 
 


