<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket System</title>
    <link rel="stylesheet" href="mainstyle.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticketNumber = $_POST["ticketNum"];

    if ($ticketNumber >= 1 && $ticketNumber <= 5) {
        for ($x = 1; $x <= $ticketNumber; $x++) {
            $name = filter_input(INPUT_POST, "name$x", FILTER_SANITIZE_STRING);
            if ($name !== false) {
                echo "Name for Ticket No.$x: $name<br>";
            } else {
                echo "Invalid input for Ticket No.$x<br>";
            }
        }
    } else {
        echo "Invalid number of tickets. Please select a value between 1 and 5.";
    }
}
?>
    
</body>
</html>