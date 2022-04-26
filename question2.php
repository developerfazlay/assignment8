<?php

echo "<h3><u> RECTANGLE, SQUARE, TRIANGLE AREA </u></h3> <br>";


// Rectangle Area
function rectangle($length, $width){
   $rectangle_area = $length * $width;
   return "The area of the rectangle is {$length} x {$width} = $rectangle_area";
}

// Please enter the length and width value of the rectangle
echo rectangle(20,10);



echo "<br>";
echo "<br>";






// Square Area
function square($arm){
   $square_area = $arm * $arm;
   return "The area of the square is {$arm}<sup>2</sup> = $square_area";

}

// Please enter one arm value of the square
echo square(8);




echo "<br>";
echo "<br>";






// Triangle Area
function triangle($base, $height){
    $triangle_area = ($base*$height)/2;
    return "The area of the triangle is ($base * $height)/2 = $triangle_area";
 }
 
 // Please enter the triangle base and height value
 echo triangle(30,10);










?>