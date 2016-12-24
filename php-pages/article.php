<?php
$out_file = pathinfo(__FILE__, PATHINFO_FILENAME);
/* file_name => file_depth */
$in_files = array(
    "begin" => "",
    "body-branding" => "  ",
    "header" => "    ",
    "article-content" => "    ",
    "footer" => "    "
);
include "@run.php";
