<?php
// Basic function
function sayHello() {
    echo "Hello from a function!<br>";
}

// Function with parameters
function greetUser($name, $time = "day") {
    echo "Good $time, $name!<br>";
}

// Function that returns a value
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

// Function with variable parameters
function calculateAverage(...$numbers) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    return $count > 0 ? $sum / $count : 0;
}

// Using functions
echo "<h3>Function Examples:</h3>";
sayHello();
greetUser("Alice");
greetUser("Bob", "evening");

$result = addNumbers(10, 20);
echo "10 + 20 = " . $result . "<br>";

$average = calculateAverage(10, 20, 30, 40, 50);
echo "Average of 10,20,30,40,50 = " . $average . "<br>";

// Anonymous function (closure)
$multiply = function($a, $b) {
    return $a * $b;
};

echo "5 * 3 = " . $multiply(5, 3) . "<br>";
?>