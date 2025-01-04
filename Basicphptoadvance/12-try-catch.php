<?php
    function divide($a, $b) {
        try {
            if ($b == 0) {
                // ตรวจสอบว่ามีการหารด้วยศูนย์หรือไม่
                throw new Exception("Division by zero.");
            }
            return $a / $b;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    echo divide(10, 0); // จะเกิดข้อผิดพลาด
?>
