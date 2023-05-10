<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Includes Demo</title>
</head>
<body>

    <h1>PHP Includes Demo</h1>

    <nav>
        <ul>
            <li><a href="index.php">Homepage</li>
            <li><a href="page2.php">Page 1</li>
            <li><a href="another_page.php">Another page (page 2)</li>
        </ul>
    </nav>

    <?php include "inc/nav.php"; ?>

    <h2>This is another page ha haha</h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Culpa magni autem rerum incidunt voluptas fugiat quae quas, 
        nam earum assumenda nisi iure odio ipsum consequatur sit 
        esse repudiandae eligendi eum.</p>
    


    
</body>
</html>