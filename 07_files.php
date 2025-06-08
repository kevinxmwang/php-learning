<?php
// Writing to a file
$filename = "test.txt";
$content = "Hello, this is a test file!\nCreated with PHP.\n";

// Write to file
if (file_put_contents($filename, $content)) {
    echo "File written successfully!<br>";
} else {
    echo "Error writing file!<br>";
}

// Reading from a file
if (file_exists($filename)) {
    $fileContent = file_get_contents($filename);
    echo "<h3>File Content:</h3>";
    echo "<pre>" . htmlspecialchars($fileContent) . "</pre>";
} else {
    echo "File doesn't exist!<br>";
}

// Append to file
$additionalContent = "This line was appended later.\n";
file_put_contents($filename, $additionalContent, FILE_APPEND);

// Read file line by line
echo "<h3>File Content (line by line):</h3>";
$lines = file($filename);
foreach ($lines as $lineNumber => $line) {
    echo "Line " . ($lineNumber + 1) . ": " . htmlspecialchars($line) . "<br>";
}

// File information
echo "<h3>File Information:</h3>";
echo "File size: " . filesize($filename) . " bytes<br>";
echo "Last modified: " . date("Y-m-d H:i:s", filemtime($filename)) . "<br>";
echo "Is readable: " . (is_readable($filename) ? "Yes" : "No") . "<br>";
echo "Is writable: " . (is_writable($filename) ? "Yes" : "No") . "<br>";
?>