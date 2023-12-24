<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Check password correctness (replace '123saif' with your expected password)
    if ($_POST['password'] == "123saif") {
        // Display form data after submission and password check
        echo '<div class="thankyou" style="width: 300px; height: 200px; border: 1px solid #ccc; padding: 60px; margin-left:200px;text-align: center;">';
        echo '<h2>Your Form is Successfully Submitted</h2>';
        echo '<p>Thank You for submitting the form</p>';
        echo '<a href="http://localhost/forms.html">Return back to home</a>';
        echo '</div>';
    } else {
        echo "<p>Password is incorrect.</p>";
    }
    // Avoid displaying passwords directly for security reasons
}
?>
