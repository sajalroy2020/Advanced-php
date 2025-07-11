<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Test Page</title>
</head>
<body>
    <h1>Welcome to PHP Test Page</h1>
    <p>This is a sample HTML page inside test.php.</p>

    <!-- php -S localhost:8000  // php run commend-->

    <?php
        echo "Hello, World!\n";
        echo "Current date and time: " . date('Y-m-d H:i:s') . "\n";
        echo "PHP version: " . phpversion() . "\n";
        echo "This is a simple PHP script running successfully!\n";
        echo "My name is sajla Roy";
        $test = 'Test Veriable';
        echo $test;

        $books = ['Bangla', 'English', 'Math', 'Database Management'];
    ?>

    <ul>
        <!-- // arrays  -->
        <?php foreach ($books as $key => $book): ?>
            <li><?php echo $book; ?></li>
        <?php endforeach; ?>

        <?php foreach ($books as $key => $book): ?>
            <li><?php echo $book; ?></li>
        <?php endforeach; ?>

    </ul>


    <!-- Associative Arrays  -->
    <?php 
        $allBooks = [
            [
                'name'=>'Bangla',
                'url'=> 'https://github.com/sajalroy2020'
            ],
            [
                'name'=>'English',
                'url'=> 'https://github.com/sajalroy2020'
            ],
        ]
    ?>

    <ul>
        <?php foreach ($allBooks as $key => $book): ?> 
            <li>
                <a href="<?php echo $book['url']; ?>"><?php echo $book['name']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>
</html>