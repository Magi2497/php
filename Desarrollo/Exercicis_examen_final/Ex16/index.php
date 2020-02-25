   
 <form action="index.php" method="post">
    <p>Escriu: <input type="num" name="nom1" /></p>
    <p>Escriu: <input type="num" name="nom2" /></p>
    <p><input type="submit" name= "submit"/></p>
   </form>


   <?php 
if(isset($_POST['submit'])){
  $strin_1= $_POST['nom1'];
  $string_2= $_POST['nom2'];
}
?>

<?php    
    function anagrames($string_1, $string_2) 
    { 
        if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
            return 'yes'; 
        else 
            return 'no';        
    } 
  
?>


<?php 
echo (anagrames( $strin_1,$string_2 )."\n"); 
?>