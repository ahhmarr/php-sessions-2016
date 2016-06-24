<?php 

include_once 'checkAuth.php';

echo 'welcome '.$_SESSION['username'];

?>
<a href="logout.php">Logout</a>