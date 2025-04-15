<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM petugas WHERE username = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verify if user exists
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password = $user['password']) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['level'];

            // Redirect to dashboard based on level
            if ($user['level'] === 'admin') {
                header('Location: ../administrator/index.php');
            } elseif ($user['level'] === 'petugas') {
                header('Location: ../petugas/index.php');
            } else {
                echo "Unknown user level.";
            }
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }
}
?>