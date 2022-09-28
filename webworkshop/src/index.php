<?php
//Start the session
session_start();

// We check if an "answer" is already associated with this session. 
// If this is not the case, we geenrate one randomly.
// You can read the documentation for isset here: https://www.php.net/manual/en/function.isset.php
if (!isset($_SESSION["answer"])) {
    $_SESSION["answer"] = random_int(0,10);
}

// If "internet_points" is not set, we initialize it to 0.
if (!isset($_SESSION["internet_points"])) {
    $_SESSION["internet_points"] = 0;
}

// Generate a prompt to inform the user about the result of their guess.
// By default, we just tell the user to submit a guess.
$prompt = "Try to guess the number by entering it above and hitting submit";

// If the users submitted a guess
if (isset($_GET["guess"])) {
    $guess = $_GET["guess"];

    // Convert the answer to a string for comparison. GET parameters are always strings
    $answer = strval($_SESSION["answer"]);

    if ($guess == $answer) {
        $prompt = "You got it!";

        // Award the user with an internet point.
        $_SESSION["internet_points"]++;

        // Generate a new answer
        $_SESSION["answer"] = random_int(0, 10);
    } else {
        // If the user did not guess correctly, tell the user to try again.
        $prompt = "Oh no! Try again";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Guess the number</title>
    <style>
        html, body {
            margin: 0;
            height: 100%;
        }

        #wrapper {
            height: 100%;
            width: 100%;
            background: #ededed;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        #container {
            height: 500px;
            width: 300px;
            padding: 20px;
            background: white;
            top: 50%;
            box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.25);
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- The if of this div was previously main-container. It has now been corrected to container to match the CSS selector -->
        <div id="container">
            <h2>Guess the number</h2>
            <form action="/">
                <input name="guess" type="number" autofocus />
                <input type="submit" />
            </form>
            <p><?php echo $prompt ?></p>
            <p>Internet points: <?php echo $_SESSION["internet_points"] ?></p>
        </div>
    </div>
</body>
</html>
