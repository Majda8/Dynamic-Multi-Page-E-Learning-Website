<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "users");

if ($conn instanceof mysqli) {
    if (isset($_POST["register"])) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Utiliser des requêtes préparées pour éviter les vulnérabilités d'injection SQL
        $stmt = mysqli_prepare($conn, "SELECT * FROM tb_users WHERE username = ? OR email = ?");
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        
        if ($result !== false && mysqli_num_rows($result) > 0) {
            // L'utilisateur existe déjà
            echo "<script> alert('Username/Email Has Already Taken'); </script>";
        } else {
            // Insérer les informations de l'utilisateur dans la base de données
            $insertQuery = "INSERT INTO tb_users (name, username, email, password) VALUES (?, ?, ?, ?)";
            $insertStmt = mysqli_prepare($conn, $insertQuery);
            mysqli_stmt_bind_param($insertStmt, "ssss", $name, $username, $email, $password);
            
            if (mysqli_stmt_execute($insertStmt)) {
                echo "<script> alert('Registration Successful'); </script>";
            } else {
                echo "<script> alert('Registration Failed'); </script>";
            }
        }
    }
} else {
    echo "Failed to establish database connection.";
}
?>

