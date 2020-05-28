<?php
session_start();
?>
<html>
<body>
<script>
alert("Logout successfully!");
</script>
</body>
<? session_destroy();
// Redirect to the login page:
header('Refresh: 0; URL="index.html"');?>
</html>