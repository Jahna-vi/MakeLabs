<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>
    <h1>I am an internship student</h1>

    <?php
    // Displaying different PHP outputs
    echo "hello world<br>";
    print "hello world<br>";

    $num = 10;
    $name = "sandhya";

    echo $num . " " . $name . "<br>";
    print $num . " " . $name . "<br>";

    var_dump($name);
    echo "<br>";
    var_dump($num);
    ?>

    <h2>Simple PHP Form</h2>
    <form action="ML1.1.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
