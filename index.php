<?php

  $obj = new main();
  $FirstName = "Rich";
  $LastName = "Nunziante";
  $FullName = "Richard Nunziante";
  $obj->printStrings($FirstName,$LastName,$FullName);
  
  //Section for Arrays
  $array = array(1,2,3,4,5,6,7);
  $arrayCar = array("Ford", "GMC", "Nissan", "Toyota", "Honda");
  $obj->printArrays($array,$arrayCar);
 

  class main {

    public function __construct() {

      echo '<H1>Homework Assignment for Strings and Arrays</H1>';
      echo '<hr>';

    }

    public function printStrings($FirstName,$LastName,$FullName) {
      echo '<h3><u>10 String Functions</u></h3>';
	  echo '<br>';
      echo '<h2>(1)String Manipulation Function: Print </h2>';
      print $FirstName .' '. $LastName .'<br>';   
      echo '<hr>';
      echo '<h2>(2) String Manipulation Function:Capitalize </h2>';
      echo strtoupper ($FirstName).'<br>';
      echo '<hr>';
      echo '<h2>(3) String Manipulation Function:String Length </h2>';
      echo strlen($FirstName).'<br>';
      echo '<hr>';
      echo '<h2>(4) String Manipulation Function:Replace </h2>';
      echo substr_replace ($LastName, 'Mr.', 0, 0) . '<br>'; 
      echo '<hr>';
      echo '<h2>(5) String Manipulation Function:Reverse String </h2>';
      echo strrev ($LastName) . '<br>';
      echo '<hr>';
      echo '<h2>(6) String Manipulation Function:Shuffle String </h2>';
      $shuffled =  str_shuffle($LastName);
      echo $shuffled;
      echo'<hr>';     
      echo '<h2>(7) String Manipulation Function:Word wrap </h2>';   
      $wordwrap = wordwrap($FullName, 8, "<br />\n");
      echo $wordwrap;
      echo '<hr>';
      echo '<h2>(8) String Manipulation Function:Word count </h2>';
      echo str_word_count($FullName) . '<br>';
      echo '<hr>';
      echo '<h2>(9) String Manipulation Function: Character Count </h2>';
      echo count_chars($FullName,3);
      echo '<hr>';
      echo '<h2>(10) String Manipulation Function:Repeat String </h2>';
      print str_repeat($FullName,6);
      echo '<hr>';
  
   }

      
    public function printArrays($array,$arrayCar) {
      echo '<h3><u>10 Array Functions</u></h3>';
      echo '<br>';
	  echo '<h2>(1) Array Function:Count </h2>';
      echo count($arrayCar);
      echo '<hr>';
 	  echo '<h2>(2) Array Function:Print </h2>';
      echo print_r($arrayCar);
	  echo '<hr>';
	  echo '<h2>(3) Array Function:List </h2>';
      echo "A list of popular cars include: " . $arrayCar[0] . ", " . $arrayCar[1] . ", " . $arrayCar[2] . ", " . $arrayCar[3] . " and " . $arrayCar[4] . ".";
	  echo '<hr>';
	  echo '<h2>(4) Array Function:Named Keys </h2>';
	  //Local Variable used here
	  $Grade = array("Sal"=>"3.0", "Fred"=>"3.8", "Howard"=>"4.0");
      $Grade2 = array("Richard"=>"2.0", "Robin"=>"3.5", "Gary"=>"3.0");
	  echo "Howard received a grade of " . $Grade['Howard'] . " in Math.";
	  echo '<hr>';
	  echo '<h2>(5) Array Function:Size of </h2>';
	  echo "The array size is " .sizeof($arrayCar);
	  echo '<hr>';
	  echo '<h2>(6) Array Function:Unset </h2>';
      echo 'The orginal number of students is 3';
	  unset($Grade["Fred"]);
	  echo '<br>';
	  echo "The new number of students is " . sizeof($Grade) . ".";
  	  echo '<hr>';
	  echo '<h2>(7) Array Function:Sort </h2>';
	  if(sort($arrayCar)){
	  print_r($arrayCar);}
	  echo '<hr>';
	  echo '<h2>(8) Array Function:Difference between Arrays </h2>';
	  $Diff_array = array_diff($Grade,$Grade2);
	  print_r($Diff_array);
	  echo '<hr>';
	  echo '<h2>(9) Array Function:Common Elements between Arrays </h2>';
	  $common_array = array_intersect($Grade,$Grade2);
	  print_r($common_array);
	  echo '<hr>';
	  echo '<h2>(10) Array Function: Convert an Array into a String </h2>';
	  $converted_string = implode(", ",$arrayCar);
      echo $converted_string;
      echo '<hr>'; 
	  
	  }
	       
   
    public function __destruct() {
      echo '<br>';
      echo '<center><b>End of homework for week 3. I am FINALLY done!!!</b></center>';

    }

	
  }

  
  
?>
