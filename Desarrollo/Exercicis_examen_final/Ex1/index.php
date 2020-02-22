

<?php $x = ($_POST['num']) * "14.75" / "100";?>
<?php $y = $x * "3" / "100";?>
<?php $z = ($x + $y) * "21" / "100";?>


Has de pagar = <?php echo ($z + $x + $y);  ?>€<br>
 IVA=<?php echo  $z;  ?>€<br>
 Taxes=<?php echo $y;  ?>€<br>

