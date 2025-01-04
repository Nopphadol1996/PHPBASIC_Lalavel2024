<?php
class Person {
    public $name;
    public $lastname;
    public $age;
    
    // constructor ฟังก์ชัน __construct()
    //  จะใช้สำหรับการตั้งค่าเริ่มต้นให้กับอ็อบเจกต์ เช่น 
    //  การกำหนดค่าของตัวแปรในคลาสหรือการเตรียมการบางอย่างที่จำเป็นต้องทำก่อนที่อ็อบเจกต์จะถูกใช้งาน
    function __construct($name, $lastname, $age)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }

     // Method ที่แสดงข้อมูลของบุคคล
    function introduce() {
        echo "My name is " . $this->name . " " . $this->lastname . " and I am " . $this->age . " years old."."<br>";
    }
}
 // สร้างอ็อบเจกต์และส่งค่าพารามิเตอร์ไปยัง constructor
$person1 = new Person("Nopphadol", "Kanklaew", 28);
// เรียกใช้ method introduce
$person1->introduce();

$person2 = new Person("สมชาย", "ใจดี", 29);
$person2->introduce();
?>