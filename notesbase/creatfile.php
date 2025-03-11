<?php
include "../Functions/issnoteutils.php"; //functions issnoteutils
$filename = create_note("Notes/New Page");
$modified = filemtime("Notes/".$filename);
$modified = Date("Y/m/d",$modified);
addtolog("newfile",$filename." | date  : $modified \n");
include "../issnote/index.php"; //codemirror src codemirror
?>