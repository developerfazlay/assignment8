<?php

echo "<h3><u>GPA RESULT MAKING</u></h3> <br>";


function gpaMaking($bangla, $english, $math, $sScience, $gScience, $religion){
    if($bangla>=33 && $bangla<=100 && $english>=33 && $english<=100 && $math>=33 && $math<=100 && $sScience>=33 && $sScience<=100 && $gScience>=33 && $gScience<=100 && $religion>=33 && $religion<=100){

        // Total and Average Mark. If need then we will able to use it;
        $total = $bangla+$english+$math+$sScience+$gScience+$religion;
        $average = $total/6;
        $average = round($average, 2);
        
        // Check bangla point
        if($bangla>=80){
            $banglaPoint = 5.00;
        }elseif($bangla>=70){
            $banglaPoint = 4.00;
        }
        elseif($bangla>=60){
            $banglaPoint = 3.50;
        }
        elseif($bangla>=50){
            $banglaPoint = 3.00;
        }
        elseif($bangla>=40){
            $banglaPoint = 2.00;
        }
        else{
            $banglaPoint = 1.00;
        }


        //Check English Point
        if($english>=80){
            $englishPoint = 5.00;
        }elseif($english>=70){
            $englishPoint = 4.00;
        }
        elseif($english>=60){
            $englishPoint = 3.50;
        }
        elseif($english>=50){
            $englishPoint = 3.00;
        }
        elseif($english>=40){
            $englishPoint = 2.00;
        }
        else{
            $englishPoint = 1.00;
        }


        //Check Math Point
        if($math>=80){
            $mathPoint = 5.00;
        }elseif($math>=70){
            $mathPoint = 4.00;
        }
        elseif($math>=60){
            $mathPoint = 3.50;
        }
        elseif($math>=50){
            $mathPoint = 3.00;
        }
        elseif($math>=40){
            $mathPoint = 2.00;
        }
        else{
            $mathPoint = 1.00;
        }


        //Check Social Science Point
        if($sScience>=80){
            $sSciencePoint = 5.00;
        }elseif($sScience>=70){
            $sSciencePoint = 4.00;
        }
        elseif($sScience>=60){
            $sSciencePoint = 3.50;
        }
        elseif($sScience>=50){
            $sSciencePoint = 3.00;
        }
        elseif($sScience>=40){
            $sSciencePoint = 2.00;
        }
        else{
            $sSciencePoint = 1.00;
        }



        //Check General Science Point
        if($gScience>=80){
            $gSciencePoint = 5.00;
        }elseif($gScience>=70){
            $gSciencePoint = 4.00;
        }
        elseif($gScience>=60){
            $gSciencePoint = 3.50;
        }
        elseif($gScience>=50){
            $gSciencePoint = 3.00;
        }
        elseif($gScience>=40){
            $gSciencePoint = 2.00;
        }
        else{
            $gSciencePoint = 1.00;
        }




        //Check Religion Point
        if($religion>=80){
            $religionPoint = 5.00;
        }elseif($religion>=70){
            $religionPoint = 4.00;
        }
        elseif($religion>=60){
            $religionPoint = 3.50;
        }
        elseif($religion>=50){
            $religionPoint = 3.00;
        }
        elseif($religion>=40){
            $religionPoint = 2.00;
        }
        else{
            $religionPoint = 1.00;
        }

        // Making gpa without round
        $without_r_gpa = ($banglaPoint+$englishPoint+$mathPoint+$sSciencePoint+$gSciencePoint+$religionPoint)/6;

        // Rounded gpa
        $gpa = round($without_r_gpa, 2);
        
        // Making Average Grade 
        if($gpa==5.00){
            $averageGrade = "A+";
        }elseif($gpa>=4.00){
            $averageGrade = "A";
        }
        elseif($gpa>=3.50){
            $averageGrade = "A-";
        }
        elseif($gpa>=3.00){
            $averageGrade = "B";
        }
        elseif($gpa>=2.00){
            $averageGrade = "C";
        }
        else{
            $averageGrade = "D";
        }


        
        return "Your GPA: $gpa (Out of 5.00) <br> Your Grade: $averageGrade <br> Your Total Marks: $total <br> Your Average Mark: {$average}" ;


    }




    
    // Check less than 0 or greater than 100 mark
    else if($bangla<0 || $bangla>100 || $english<0 || $english>100 ||$math<0 || $math>100 || $sScience<0 || $sScience>100 || $gScience<0 || $gScience>100 || $religion<0 || $religion>100){

        return "You entered wrong mark. Please enter your mark 0-100. Thank you!";
    }
    // If one subject's mark is 0-32 than it would be failed mark.
    else{
        
        return "Sorry! You are Failed!";

    }
    

    

}




// Please enter your subject mark from here
 echo gpaMaking(80, 85, 87, 70, 75, 90);
 















?>