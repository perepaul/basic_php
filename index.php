<?php
function familyName(string $fname, string $lname = 'Perekpo')
{
    echo "$fname $lname";
}

function sum(int $num1, int $num2)
{
    $num1++;
    return $num1 + $num2;
}

$genderString = "I am a ";
function female($str)
{
    $str .= "female";
}

function male(&$str)
{
    $str .= "male";
}

female($genderString);
male($genderString);

echo $genderString . "<br>";



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Family</h1>
    <ul>
        <li> <?php familyName("Kodes"); ?> </li>
        <li> <?php familyName("Emmanuel"); ?> </li>
        <li> <?php familyName("Paulinus"); ?> </li>
        <li> <?php familyName("Ekpoamomoemi"); ?> </li>
        <li> <?php familyName("Innocent", "Elayefa"); ?> </li>
    </ul>

    <p>The sum of 5 and 10 is: <?php echo sum(5, 10); ?></p>
    <p>The sum of 20 and 100 is: <?php echo sum(20, 100); ?></p>
    <p>The sum of 50 and 70 is: <?php echo sum(50, 70); ?></p>


</body>

</html>