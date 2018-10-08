<?php include "loop.php"?>
<form action="" method="post">
    <input type="number" name="loop">
    <button type="submit">Loop!</button>
</form>

<?php 
if(isset($_POST['loop'])){
    $obj = new Loop;
    echo $obj->marlin_booking($_POST['loop']);
}
?>