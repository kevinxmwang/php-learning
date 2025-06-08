<?php
$score = 85;

// If-else statements
echo "<h3>If-Else Example:</h3>";
if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} elseif ($score >= 60) {
    echo "Grade: D<br>";
} else {
    echo "Grade: F<br>";
}

// Switch statement
$day = "Monday";
echo "<h3>Switch Example:</h3>";
switch ($day) {
    case "Monday":
        echo "Start of the work week!<br>";
        break;
    case "Friday":
        echo "TGIF!<br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend time!<br>";
        break;
    default:
        echo "Regular weekday<br>";
}

// Loops
echo "<h3>Loop Examples:</h3>";

// For loop
echo "<h4>For Loop (1 to 5):</h4>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: " . $i . "<br>";
}

// While loop
echo "<h4>While Loop (countdown from 5):</h4>";
$count = 5;
while ($count > 0) {
    echo "Countdown: " . $count . "<br>";
    $count--;
}

// Foreach loop with array
echo "<h4>Foreach Loop:</h4>";
$hobbies = ["Reading", "Swimming", "Coding", "Gaming"];
foreach ($hobbies as $index => $hobby) {
    echo ($index + 1) . ". " . $hobby . "<br>";
}
?>