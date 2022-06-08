<?php
$number1 = 5;
$number2 = 7;
$number3 = 2;
if ($number1>$number2 & $number1>$number3)
{
    echo "Largest number is $number1";
}
elseif ($number2>$number1 & $number2>$number3)
{
    echo "Largest number is $number2";
}
/*if ($number3>$number1 & $number3>$number2)
{
    echo "Largest number is $number3 ";
}*/
else
{
    "Largest number is $number3";
}
?>