<?php

echo "<h3><u> CURRENCY CONVERTER</u></h3> <br>";


function currencyConverter($taka, $CurrencyInto){
    switch (strtoupper($CurrencyInto)) {
        case "USD":
             $convertedAmount = $taka/86;
             $roundedUsd = round($convertedAmount, 2);
             return "$taka Bangladeshi Taka = $roundedUsd USD";   
             break;

        case "CAD":
            $convertedAmount = $taka/68;
            $roundedCad = round($convertedAmount, 2);
            return "$taka Bangladeshi Taka = $roundedCad CAD"; 
            break;

        case "POUND":
            $convertedAmount = $taka/109;
            $roundedPound = round($convertedAmount, 2);
            return "$taka Bangladeshi Taka = $roundedPound POUND"; 
            break;

        case "EURO":
            $convertedAmount = $taka/92;
            $roundedEuro = round($convertedAmount, 2);
            return "$taka Bangladeshi Taka = $roundedEuro EURO"; 
            break;   

        default:
            return "You didn't select any currency to convert";
        }



  
}

// Please set any  amount of Bangladeshi T.K and your desired currency like USD/CAD/POUND/EURO
echo currencyConverter(1000,'USD');




?>