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

$ticketNumber = $_POST["ticketNum"];

echo "Please Enter Ticket Names: <br>";

echo "<form method=\"post\" action=\"ticketForm3.php\">";

for ($x = 1; $x <= $ticketNumber; $x++) {
    echo "<label for = \"name$x\"> Name On Ticket No.$x </label>";
    echo "<input type=\"text\" name=\"name$x\">";
    echo "<input type=\"hidden\" name=\"ticketNum\" value=\"$ticketNumber\">";

    echo "<br>";
}

echo "<input type=\"submit\">";
echo "</form>";

?>
    
</body>
</html>