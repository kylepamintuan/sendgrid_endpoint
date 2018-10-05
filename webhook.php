<?php

require_once('credentials.php');

$query = "INSERT INTO receive_email SET subject='{$_POST['subject']}', body='{$_POST['html']}', sender='{$_POST['from']}', recipient='{$_POST['to']}', sent=NOW()";

mysqli_query($conn, $query);

?>