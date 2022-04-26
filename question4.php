<?php

echo "<h3><u> AGE CALCULATOR </u></h3> <br>";


function ageCalculator($birthDay, $checkDay){

    $bdate = date_create($birthDay);
    $cdate = date_create($checkDay);

    $differnce_date = date_diff($bdate,$cdate);
    $age = $differnce_date -> format("Your Age: %y Years %m Months %d Days");

    return $age;

}

    //Please Enter date of birth and checking on the date
    echo ageCalculator('1-1-1994', '26-4-2022');




























?>