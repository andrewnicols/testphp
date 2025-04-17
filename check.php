<?php

exec("php -l check.php", $output, $returncode);

var_dump($_ENV);
var_dump($output);
var_dump($returncode);
