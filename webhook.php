<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_SERVER['HTTP_X_GITHUB_EVENT'] ) {
    shell_exec("cd /var/www/html/MarketPlace/ && git pull");
}

?>
