<?php

$tempdir = sys_get_temp_dir();
var_dump($tempdir);

$tempdir = realpath($tempdir);
var_dump($tempdir);

$dirname = $tempdir . "/example";
var_dump(mkdir($dirname));
