<?php
system("scss --style expanded --sourcemap=none --watch ../scss/{$file}.scss:../css/{$file}.css", $return);
echo $return;
