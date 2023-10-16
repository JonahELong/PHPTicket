<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket System</title>
</head>
<body>

<?php

$ticketNumber = $_POST['ticketNum'];

echo "Your Tickets: <br><br>";

for ($x = 1; $x <= $ticketNumber; $x++) {

    $ticketCode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
    echo "Ticket " . $x . ":<br>";
    echo "Name: " . $_POST["name$x"] . "<br>";
    echo "Code: " . $ticketCode . "<br>";

    echo "<br><br>";
}

?>
    
</body>
</html>