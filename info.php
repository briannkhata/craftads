<?php
//phpinfo();

// Check if cURL extension is enabled
if (!function_exists('curl_init')) {
    echo 'cURL is not installed.';
} else {
    echo 'cURL is installed.';
}

?>