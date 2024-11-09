<h3>Form</h3>

<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST["name"])){ // ส่งกับ form นิยมเป็น INPUT
    echo $_POST["name"];
}
?>
