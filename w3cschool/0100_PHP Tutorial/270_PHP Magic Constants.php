<?php
// https://www.w3schools.com/php/php_magic_constants.asp

namespace myArea;

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}

/* PHP Predefined Constants
PHP has nine predefined constants 
that change value depending on where they are used, 
and therefor they are called "magic constants".

_CLASS__	    If used inside a class, the class name is returned.	
__DIR__	        The directory of the file.	
__FILE__	    The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	    The current line number.	
__METHOD__	    If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	    If used inside a trait, the trait name is returned.	
ClassName::class Returns the name of the specified class and the name of the namespace, if any.
*/

// __CLASS__
class Fruits {
    public function myValue(){
      return __CLASS__;
    }
}
$kiwi = new Fruits();
echo $kiwi->myValue();



nl();
// __DIR__
echo __DIR__; nl();


nl();
// __FILE__	The file name including the full path.	
echo __FILE__;


nl();
// __FUNCTION__	If inside a function, the function name is returned.
function myValue(){
    return __FUNCTION__;
}
echo myValue(); 


nl();
// __LINE__	The current line number.
echo "__LINE__ " . __LINE__; nl();

nl();
// __METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
class Fruits2 {
    public function myValue(){
      return __METHOD__;
    }
}
$kiwi = new Fruits2();
echo $kiwi->myValue();

nl();
// __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
// namespace myArea;
// PHP Fatal error:  Namespace declaration statement has to be the very first statement or after any declare call in the script in D:\00_data\08-dev\didattica\didattica_php\w3cschool\0100_PHP Tutorial\270_PHP Magic Constants.php on line 68


function myValue2(){
  return __NAMESPACE__;
}
echo myValue2(); nl();

//__TRAIT__	If used inside a trait, the trait name is returned.	
trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();

  nl();
// ClassName::class	Returns the name of the specified class and the name of the namespace, if any
class Fruits3 {
    public function myValue(){
      return Fruits3::class;
    }
  }
$kiwi = new Fruits3();
echo $kiwi->myValue();