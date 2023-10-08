<?php

session_start();
session_destroy();

echo '<script>

window.location = "index.html"; // Redirecting to other page.
alert ("Logout successfully");
</script>'

?>