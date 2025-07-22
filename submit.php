
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    $entry = "Name: $name\nEmail: $email\nFeedback: $feedback\n-----------------------\n";

    file_put_contents("feedbacks.txt", $entry, FILE_APPEND | LOCK_EX);

    echo "✅ Thank you for your feedback!";
} else {
    echo "Invalid request.";
}
?>
