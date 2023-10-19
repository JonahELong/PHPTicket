<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micky Flannigan Tickets</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
    <div class="container">
        <h1>Micky Flannigan Ticket Sale!</h1>
        <p>Tell us how many tickets you would like.</p>
        <p>Up to a limit of 5 per category</p>
        <form action="tellUsYourName.php" method="post">
            <label for="adultTickets">Adult Tickets:</label>
            <input type="number" id="adultTickets" name="adultTickets" min="1" max="5">
            <br><br>
            <label for="childTickets">Child Tickets:</label>
            <input type="number" id="childTickets" name="childTickets" min="1" max="5">
            <br><br>
            <input type="submit" value="Next">
        </form>
    </div>
</body>
</html>
