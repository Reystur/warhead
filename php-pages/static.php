<?php
$out_file = pathinfo(__FILE__, PATHINFO_FILENAME);
/* file_name => file_depth */
$in_files = array(
    "begin" => "",
    "body-default-branding" => "  ",
    "header" => "    ",
    "static-content" => "    ",
    "footer" => "    "
);
include "@run.php";
