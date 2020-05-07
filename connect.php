<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die ("loi ket noi");

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $sql = "CREATE TABLE tbl_category (
// cat_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// cat_name VARCHAR(30) NOT NULL,
// status VARCHAR(30) NOT NULL,
// date_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "Tao bang thanh cong";
// } else {
//     echo "loi tao bang: " . $conn->error;
// }
// $sql = "CREATE TABLE tbl_products (
// pro_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// pro_name VARCHAR(30) NOT NULL,
// pro_price VARCHAR(30) NOT NULL,
// pro_image VARCHAR(30) NOT NULL,
// status VARCHAR(30) NOT NULL,
// description VARCHAR(30) NOT NULL,
// date_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Tao bang thanh cong";
// } else {
//     echo "loi tao bang: " . $conn->error;
// }

// $conn->close();
 ?>
