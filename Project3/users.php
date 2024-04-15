<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'bunty');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
       
        header("Location: clientpage.php");
        exit(); 
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
}
?>
