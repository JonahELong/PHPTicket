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
$ticketNumber = $_POST['ticketNum'];

echo "<h1>Your Tickets:</h1>" . "<div class='spacer'></div>";

for ($x = 1; $x <= $ticketNumber; $x++) {
    $ticketCode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
    echo "<div class='ticket'>";
    echo "<h2>Ticket " . $x . "</h2>";
    echo "<p class='name'>Name: " . $_POST["name$x"] . "</p>";
    echo "<p class='code'>Code: " . $ticketCode . "</p>";
    echo "</div>";
    if ($x < $ticketNumber) {
        echo "<div class='spacer'></div>";
    }
}

?>

</body>
</html>
