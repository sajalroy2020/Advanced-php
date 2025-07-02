<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Test Page</title>
</head>
<body>
    <h1>Welcome to PHP Test Page</h1>
    <p>This is a sample HTML page inside test.php.</p>

    <?php
        echo "Hello, World!\n";
        echo "Current date and time: " . date('Y-m-d H:i:s') . "\n";
        echo "PHP version: " . phpversion() . "\n";
        echo "This is a simple PHP script running successfully!\n";
        echo "My name is sajla Roy";
    ?>
</body>
</html>