<?php
$a1 = mt_rand();
echo  $a1 . "<br>";
echo mt_rand() . "<br>";

echo mt_rand(1, 500). "<br>";
echo "<input type=text value=".mt_rand(1, 500). "><br>";
?>

<input type="text" name="aleatorio" value="<?php echo mt_rand(1, 500)  ?>">
