<?php
    echo "<h1> Your IssNotes</h1>";
    $path = "notesbase/Notes";
    $toopen = opendir($path);
    echo "<ul>"."\n";
    while(($directory_contents = readdir($toopen)))
    {
        if($directory_contents != '.' && $directory_contents != "..")
        {
            $filepath = "notesbase/Notes/" . $directory_contents;
            $sizze = filesize($filepath);
            $modified = filemtime($filepath);
            echo "<li>"."$directory_contents"."     size : $sizze" . "     last_modified : " .date("Y/m/d",$modified)."</li>"."\n";
            echo "<br>";
        }
    }
    closedir($toopen);
    echo "</ul>";
?>