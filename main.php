<?php

echo '<h2>Test</h2>';

file_put_contents('gs://my_bucket/hello.txt', 'File operations work!');
echo file_get_contents('gs://my_bucket/hello.txt');

echo '<h2>PHP info</h2>';
// Show all information, defaults to INFO_ALL

phpinfo();
