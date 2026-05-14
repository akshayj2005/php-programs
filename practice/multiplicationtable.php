<!-- Multiplication Table of user given number -->
<?php
if (isset($_POST['submit'])) {
    $num = $_POST['number'];
    echo "<h2>Multiplication Table of $num</h2>";
    echo "<table border='1' cellpadding='10' style='text-align: center;'>";
    echo "<tr><th>Expression</th><th>Result</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "<tr><td>$num x $i</td><td>$result</td></tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Enter a number to see its multiplication table</h1>
    <form method="post" action="">
        <input type="number" name="number" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
