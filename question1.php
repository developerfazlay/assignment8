<?php

echo "<h3><u>AGE STATUS </u></h3><br>";

function ageStatus($checkAge){
    $ageMessage = 0;
    if ($checkAge > 0 && $checkAge < 13 ) {
        $ageMessage = "Your age is: {$checkAge} & You are a Children.";
    }
    elseif($checkAge >= 13 && $checkAge < 20 ) {
        $ageMessage = "Your age is: {$checkAge} & You are a Teenager.";
    }
    elseif($checkAge >= 20 && $checkAge < 60 ) {
        $ageMessage = "Your age is: {$checkAge} & You are a Young.";
    }
    elseif($checkAge >= 60 && $checkAge < 200 ) {
        $ageMessage = "Your age is: {$checkAge} & You are an Older.";
    }
    else{
        $ageMessage = "Your entered : {$checkAge} & It's an wrong value.";
    }
    return $ageMessage;
}

// Please enter your age
echo ageStatus(59);











?>