<?php 
include_once('db.php'); 
include_once('inc/html/head.php');

?>
 
    <h1 class="text-center">Welcome!</h1>
	<?php if ($db->conn): ?>
		<h2 class="text-center">You are connected to the '<?php echo getenv('DB_NAME'); ?>' database</h2>
		<?php else: ?>
			<h2 class="text-center">Error connecting to your database, check the config</h2>
		<?php endif ?>

<?php 
include_once('inc/html/footer.php'); 
?>
