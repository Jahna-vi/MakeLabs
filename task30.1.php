<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST['name']) ? $_POST['name'] : "Not Provided";
        $email = isset($_POST['email']) ? $_POST['email'] : "Not Provided";

        // Displaying the submitted data
        echo htmlspecialchars($email) . htmlspecialchars($name);
    }
    ?>
</body>
</html>
