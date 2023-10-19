<!DOCTYPE html>
<html>
<head>
    <title>Ticket Confirmation</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
    <h1 class="confirmation-title">You're going to see Micky Flanagan live!</h1>

    <div class="container">
        <h1>Ticket Confirmation</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the number of adult and child tickets from the previous page
            $adultTickets = isset($_POST['adultTickets']) ? intval($_POST['adultTickets']) : 0;
            $childTickets = isset($_POST['childTickets']) ? intval($_POST['childTickets']) : 0;

            $valid = true;
            for ($i = 1; $i <= $adultTickets; $i++) {
                $inputName = "adultName$i";
                if (empty($_POST[$inputName]) || !preg_match('/^[A-Za-z ]+$/', $_POST[$inputName])) {
                    $valid = false;
                    break;
                }
            }
            for ($i = 1; $i <= $childTickets; $i++) {
                $inputName = "childName$i";
                if (empty($_POST[$inputName]) || !preg_match('/^[A-Za-z ]+$/', $_POST[$inputName])) {
                    $valid = false;
                    break;
                }
            }

            if ($valid) {
                // Generate and display individual tickets
                for ($i = 1; $i <= $adultTickets; $i++) {
                    $ticketID = mt_rand(100000000, 999999999); // Generate 9-digit random ID
                    $ticketName = $_POST["adultName$i"];
                    echo '<div class="ticket-adult-ticket">';
                    echo '<div class="ticket-content">';
                    echo '<h3 class="ticket-category">Adult Ticket</h3>';
                    echo '<p class="ticket-name">' . $ticketName . '</p>';
                    echo '<p class="ticket-id">Ticket ID: ' . $ticketID . '</p>';
                    echo '</div>';
                    echo '</div>';
                }

                for ($i = 1; $i <= $childTickets; $i++) {
                    $ticketID = mt_rand(100000000, 999999999); // Generate 9-digit random ID
                    $ticketName = $_POST["childName$i"];
                    echo '<div class="ticket-child-ticket">';
                    echo '<div class="ticket-content">';
                    echo '<h3 class="ticket-category">Child Ticket</h3>';
                    echo '<p class="ticket-name">' . $ticketName . '</p>';
                    echo '<p class="ticket-id">Ticket ID: ' . $ticketID . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } 
            else 
            {
                echo "Invalid input type. Please try again.";
            }
        } 
        else 
        {
            header("Location: homepage.php"); // Redirect if accessed directly without proper data
        }
        ?>

        <a href="homepage.php">Return to Home</a>
    </div>
</body>
</html>
