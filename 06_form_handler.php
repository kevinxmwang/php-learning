<?php
if ($_POST) {
    echo "<h2>Form Data Received:</h2>";
    
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $hobbies = $_POST['hobbies'] ?? [];
    
    // Display data
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Age:</strong> " . htmlspecialchars($age) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    
    if (!empty($hobbies)) {
        echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
    }
    
    echo "<br><a href='06_form.html'>Go Back to Form</a>";
} else {
    echo "No form data received.";
}
?>