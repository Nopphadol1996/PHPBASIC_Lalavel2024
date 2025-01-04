<?php
// เชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";  // ชื่อผู้ใช้ฐานข้อมูล
$password = "";      // รหัสผ่านฐานข้อมูล
$dbname = "user_registration";  // ชื่อฐานข้อมูล

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// เช็คการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่าได้ส่งฟอร์มมาแล้วหรือไม่
if (isset($_POST['register'])) {
    // รับข้อมูลจากฟอร์ม
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // ตรวจสอบว่ารหัสผ่านและยืนยันรหัสผ่านตรงกันหรือไม่
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        // การแฮชรหัสผ่านเพื่อความปลอดภัย
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // ตรวจสอบว่าอีเมล์ซ้ำในฐานข้อมูลหรือไม่
        $sql_check = "SELECT * FROM users WHERE email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            echo "Email is already registered!";
        } else {
            // สร้างคำสั่ง SQL สำหรับการเพิ่มข้อมูลผู้ใช้ใหม่
            $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $hashed_password);

            // การทำงานของคำสั่ง SQL
            if ($stmt->execute()) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // ปิดการเชื่อมต่อฐานข้อมูล
            $stmt->close();
        }
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
