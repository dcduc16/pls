<?php

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="shell.php"');

readfile("shell.php");
