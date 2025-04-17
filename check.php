<?php

exec("php -l check.php", $output, $returncode);

var_dump($_ENV);
var_dump($output);
var_dump($returncode);
var_dump(getenv('PATH'));

exec("which php", $output, $returncode);
var_dump($output);
var_dump($returncode);
