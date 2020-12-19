
<form action="index.php" method="post">
    <label>Name : </label>
    <input type="text" name="name"/>
</form>

<?php 
    $name = $_POST["name"];
    echo $name;
?>