<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    
    if (!empty($fullName)) {
        echo "Hello " . $fullName . "!";
    } else {
        echo "Name is required!";
    }
} else {
    echo "No form data received!";
}
?>
