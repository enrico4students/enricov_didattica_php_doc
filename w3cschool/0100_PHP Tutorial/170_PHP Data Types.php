<?php
/* Getting the Data Type
You can get the data type of any object by using the var_dump() function.
*/
$x = 5;
var_dump($x);





/* PHP String
*/
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);





/* PHP Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
*/
$x = 5985;
var_dump($x);




/* PHP Float
*/
$x = 10.365;
var_dump($x);







/* PHP Boolean
*/
$x = true;
var_dump($x);




/* PHP Array
*/
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);




/* PHP Object 
*/
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);





  /* PHP NULL Value
  */
  $x = "Hello world!";
  $x = null;
  var_dump($x);




  /* Change Data Type
  */
  $x = 5;
  var_dump($x);
  
  $x = "Hello";
  var_dump($x);


$x = 5;
$x = (string) $x;
var_dump($x);



  /* PHP Resource
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call.
We will not talk about the resource type here, since it is an advanced topic.
  */





  /*
  */