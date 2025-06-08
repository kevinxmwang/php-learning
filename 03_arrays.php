<?php
// Indexed Arrays
$fruits = array("Apple", "Banana", "Orange");
// Or modern syntax:
$colors = ["Red", "Green", "Blue"];

echo "<h3>Indexed Arrays:</h3>";
echo "First fruit: " . $fruits[0] . "<br>";
echo "Second color: " . $colors[1] . "<br>";

// Loop through indexed array
echo "<h4>All fruits:</h4>";
for ($i = 0; $i < count($fruits); $i++) {
    echo ($i + 1) . ". " . $fruits[$i] . "<br>";
}

// Associative Arrays
$person = array(
    "name" => "Alice Smith",
    "age" => 30,
    "city" => "New York"
);

echo "<h3>Associative Array:</h3>";
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";

// Loop through associative array
echo "<h4>All person details:</h4>";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

// Multidimensional Arrays
$students = array(
    array("John", 22, "Computer Science"),
    array("Mary", 21, "Biology"),
    array("Bob", 23, "Mathematics")
);

echo "<h3>Multidimensional Array:</h3>";
for ($row = 0; $row < count($students); $row++) {
    echo "Student " . ($row + 1) . ": ";
    echo $students[$row][0] . " (" . $students[$row][1] . " years old, " . $students[$row][2] . ")<br>";
}
?>