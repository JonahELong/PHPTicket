<!DOCTYPE html>
<html>
<head>
    <title>Tell Us Your Name</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
    <div class="container">
        <h1>Tell Us Your Name</h1>

        <?php
        // Get the number of adult and child tickets from the previous page
        $adultTickets = isset($_POST['adultTickets']) ? intval($_POST['adultTickets']) : 0;
        $childTickets = isset($_POST['childTickets']) ? intval($_POST['childTickets']) : 0;

        // Check if either adult or child tickets are selected
        if ($adultTickets >= 1 || $childTickets >= 1) {
            // Start the form with the ticket quantity inputs
            echo '<form action="ticketConfirmation.php" method="post">';
            
            if ($adultTickets >= 1 && $adultTickets <= 5) {
                echo '<input type="hidden" name="adultTickets" value="' . $adultTickets . '">';
                // Generate the input boxes for adult names
                for ($i = 1; $i <= $adultTickets; $i++) {
                    echo '<label for="adultName' . $i . '">Adult Name ' . $i . ':</label>';
                    echo '<input type="text" id="adultName' . $i . '" name="adultName' . $i . '" required>';
                    echo '<br><br>';
                }
            }

            if ($childTickets >= 1 && $childTickets <= 5) {
                echo '<input type="hidden" name="childTickets" value="' . $childTickets . '">';
                // Generate the input boxes for child names
                for ($i = 1; $i <= $childTickets; $i++) {
                    echo '<label for="childName' . $i . '">Child Name ' . $i . ':</label>';
                    echo '<input type="text" id="childName' . $i . '" name="childName' . $i . '" required>';
                    echo '<br><br>';
                }
            }

            // Close the form and add the submit button
            echo '<input type="submit" value="Submit">';
            echo '</form>';
        } else {
            // Neither adult nor child tickets are selected, redirect back to homepage
            header("Location: homepage.php?error=1");
        }
        ?>

        <a href="homepage.php">Return to Home</a>
    </div>
</body>
</html>
