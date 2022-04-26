<?php

echo "<h3><u> BMI CALCULATOR </u></h3> <br>";

function BMI($height, $weight){
    $height_in_meter = $height/100;
    $bmi_rule = $weight/($height_in_meter * $height_in_meter);

    $final_bmi = round($bmi_rule, 1);

    if($final_bmi<=18.5){
        return "Your BMI = $final_bmi <br> You are underweight.";
    }
    elseif($final_bmi>18.5 && $final_bmi<=24.5){
        return "Your BMI = $final_bmi <br> Congrats! You have normal weight.";
    }
    elseif($final_bmi>24.5 && $final_bmi<=29.9){
        return "Your BMI = $final_bmi <br> You are overweight.";
    }
    else{
        return "Your BMI = $final_bmi <br> Be careful on your health! You are so Fatty.";
    }

    
}

// Enter your height in CM and weight in KG
echo BMI(168, 80);


















?>