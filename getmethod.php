<?php
if(isset($_GET['name'])) {
    echo "<p>Hi, ". htmlspecialchars($_GET['name']). "</p>";
}
?>
<form method="get">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>