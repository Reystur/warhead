<?php
$out_file = pathinfo(__FILE__, PATHINFO_FILENAME);
/* file_name => file_depth */
$in_files = array(
    "begin-404" => "",
    "body-empty" => "  ",
    "header" => "    ",
    "500-content" => "    ",
    "footer" => "    "
);
include "@run.php";
