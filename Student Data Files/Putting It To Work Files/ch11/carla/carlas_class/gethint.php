<?php
// Fill up array with names
$a[]="Adams, Anna"; $a[]="Adams, Sam"; $a[]= "Adams, Brittany";
$a[]="Blue, Chester"; $a[]="Blue, Charity"; $a[]= "Baxter, Briana";
$a[]="Cinder, Ella"; $a[]="Charleston, Diana"; $a[]="Coles, Max";
$a[]="Edwards, Eva"; $a[]="Remer, Fiona"; $a[]="Gunder, Anna";
$a[]="Hegan, Howard"; $a[]="Lazerly, Inga"; $a[]="Lazerly, Johanna";
$a[]="Lazerly, Kate"; $a[]="Murphy, Linda"; $a[]="Murphy, Nina"; 
$a[]="Murphy, Ophelia"; $a[]="Page, Polly"; $a[]="Pepper, Joel"; 
$a[]="Pepper, Tom"; $a[]="Raulerston, Cindy"; $a[]="Stein, Doris"; 
$a[]="Steinberg, Eve"; $a[]="Steinberg, Oliver"; $a[]="Ibanez, Sunny";
$a[]="Towers, Milton"; $a[]="Tims, Tom"; $a[]="Jones, Violet";
$a[]="Russell, Liza"; $a[]="Roushe, Elizabeth"; $a[]="Hegen, Ellen";
$a[]="Wentz, Willow"; $a[]="Wentz, Vicky"; $a[]="Hart, Anne"; 
$a[]="Hart, John"; $a[]= "Calhoun, Sherry"; $a[]="Burns, Carl"; 
$a[]="Burns, Carol"; $a[]= "Reed, Debbie"; $a[]="Reed, Matthew"; 
$a[]="Reed, Rachel"; $a[]="Reed, Bob"; $a[]="Duke, Chad"; 
$a[]="Horton, Martha"; $a[]="Horton, Anna"; $a[]="Stoker, Brad"; 
$a[]="Jones, Arthur"; $a[]="Jones, Hannah"; $a[]="Jones, Kate"; 
$a[]="Jones, Linda"; $a[]="Smith, Nancy"; $a[]="Smith, Eddy";
$a[]="Porter, Judy"; $a[]="Porter, Joel"; $a[]="Axelrod, Tom"; 
$a[]="Randall, Tim"; $a[]="Randall, Debbie"; $a[]="Marks, Evan"; 
$a[]="Marks, Oscar"; $a[]="Rodrigues, Juan"; $a[]="Rodrigues, Mario";
$a[]="Rodriguez, Eva"; $a[]="Lejeune, Lisa";  $a[]="Rodriguez, Carlos"; 
$a[]="Lejeune, Andre"; $a[]="Morris, Ellen"; $a[]="Morris, Harold"; 
$a[]="Morris, Vicky"; $a[]="Boch, Zachary"; $a[]="Boch, John"; 
$a[]= "Franks, Benny"; $a[]="Fried, Moshe"; $a[]="Grant, Carol"; 
$a[]= "Grant, Daniel"; $a[]="Klein, Matthew"; $a[]="Klein, Rusty"; 
$a[]="Klein, Robert"; $a[]="Newcomb, Ned"; $a[]="Newcomb, Norman"; 
$a[]="Ochs, Anna"; $a[]="Underwood, Billie-Jean"; $a[]="VanMarten, James";
$a[]="Underwood, MaryAnn"; $a[]="Vo, Tom"; $a[]="VanMarten, Darlene";
$a[]="VanMarten, Katherine"; $a[]="VanMarten, Charles";  
$a[]="Perez, Isabel"; $a[]="Perez, Juan"; $a[]="Perez, Mario"; 
$a[]="Perez, Luz"; $a[]="Barclay, Denise"; $a[]="Cooper, Evan"; 
$a[]="Cooper, Kevin"; $a[]="Peterson, Susan"; $a[]="McCurdy, Nancy";
$a[]="Keramine, Mary"; $a[]="Nichols, Marty"; $a[]="Nichols, David";
$a[]="Arlington, Jim"; $a[]="Chen, Ellen"; $a[]="Chen, Tom"; 
$a[]="Chen, Karen"; $a[]="Lee, Michelle"; $a[]="Lee, Cooper"; 
$a[]="Weare, James"; $a[]="Krantz, Otto"; $a[]="Schultz, Cheryl"; 

//get the q parameter from URL
$q = $_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." ; ".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no names match";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>