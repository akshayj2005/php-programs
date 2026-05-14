<!-- Contact Us Page and store submissions in database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
    $sql = "CREATE TABLE enquiries (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(10) NOT NULL,
        erp VARCHAR(20) NOT NULL
    )";
    $conn->query($sql);
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $erp = $_POST['erp'];

    $sql = "INSERT INTO enquiries (name, email, phone, erp) VALUES ('$name', '$email', '$phone', '$erp')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    </head>
<body>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="phone" placeholder="Your Phone Number" minlength="10" maxlength="10" required>
            <input type="text" name="erp" placeholder="Your ERP Number" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>