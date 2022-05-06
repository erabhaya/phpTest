<?php 
session_start();

?>
<h1 style="text-align:center"> Welcome <strong><?php echo $_SESSION['register'][0];?></strong></h1>

<a href="logout.php">Logout</a>