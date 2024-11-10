<h3>Try Catch</h3>

<?php

try {
    $x = 10 / 'Hello';
} catch (DivisionByZeroError $e) {
    echo 'เกิดข้อผิดพลาด ไม่สามารถหารด้วยศูนย์ได้';
} catch (TypeError $e) {
    echo 'เกิดข้อผิดพลาด ไม่สามารถหารด้วยตัวอักษรได้';
} catch (Throwable $e) {
    echo 'เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้ '.$e->getMessage();
}

echo '<br />';

try {
    $x = 10 / 'Hello';
} catch (Throwable $e) {
    echo 'เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้ '.$e->getMessage();
}
?>