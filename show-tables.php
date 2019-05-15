<?php 
include_once('db.php'); 
include_once('inc/html/head.php');
?>

<h1 class="text-center">Tables in your DataBase</h1>

 <?php 
 $db->showTables();
 ?>   

<?php 
include_once('inc/html/footer.php'); 
?>
