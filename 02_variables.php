<?php
// Variables start with $ symbol
$name = "John Doe";
$age = 25;
$height = 5.9;
$isStudent = true;

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . " feet<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";

// Variable types
echo "<h3>Variable Types:</h3>";
echo "Name type: " . gettype($name) . "<br>";
echo "Age type: " . gettype($age) . "<br>";
echo "Height type: " . gettype($height) . "<br>";
echo "IsStudent type: " . gettype($isStudent) . "<br>";

// Variable scope
$globalVar = "I'm global";

function testScope() {
    $localVar = "I'm local";
    global $globalVar;
    echo $globalVar . "<br>";
    echo $localVar . "<br>";
}

testScope();
?>