<?php
$servername = "localhost:8111";
$username = "root";
$password = "";
$dbname = "b5_mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Chèn dữ liệu vào bảng MyGuests
    $sql = "INSERT INTO myguests (firstname, lastname, email) 
            VALUES ('John', 'Doe', 'john@example.com'),
                   ('Jane', 'Smith', 'jane@example.com'),
                   ('James', 'Johnson', 'james@example.com'),
                   ('Emily', 'Brown', 'emily@example.com'),
                   ('Michael', 'Davis', 'michael@example.com')";
    $conn->exec($sql);
    echo "Dữ liệu đã được chèn thành công";
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
$conn = null;
?>
