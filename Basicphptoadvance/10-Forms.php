<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    Name: <input type="text" name="name"><br><br>
    Lastname: <input type="text" name="lastname"><br><br>
    Age: <input type="text" name="age"><br><br>
    <button type="submit" value="submit">Submit</button>
</form>   

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];

    echo "Name: " . $name . "<br>";
    echo "Lastname: " . $lastname . "<br>";
    echo "Age: " . $age . "<br>";
}
?>

</body>
</html>