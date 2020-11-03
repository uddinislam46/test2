<?php
$output = shell_exec('git status ');

echo '<pre>';
var_dump($output);
exit;
