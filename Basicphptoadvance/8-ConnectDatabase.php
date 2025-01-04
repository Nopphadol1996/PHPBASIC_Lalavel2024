<?php
    // ข้อมูลการเชื่อมต่อฐานข้อมูล
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "basicphp";

    // เชื่อมต่อกับฐานข้อมูล
    $conn = new mysqli($servername, $username, $password, $dbname);

    // เช็คการเชื่อมต่อ
    if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

    // คำสั่ง SQL
    $sql = "SELECT id, name,lastname,age FROM users"; // user คือชื่อตารางในฐานข้อมูล
    $result = $conn->query($sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($result->num_rows > 0) {
        // แสดงผลข้อมูล
        while($row = $result->fetch_assoc()) {
            // ใช้ fetch_assoc() เพื่อดึงข้อมูลแถวแรก
            echo "id: " . $row["id"]." "."ชื่อ ". $row["name"]." "."นามสกุล ". $row["lastname"]." "."อายุ ".$row["age"]."<br>";
        }
    } else {
        echo "0 results";
    }

    // ปิดการเชื่อมต่อ
    $conn->close();
?>
