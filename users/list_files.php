<?php
    echo "<label name=\"Mini titl\" id=\"customised_title\"><h2>Your IssNotes</h2></label>";
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
            $ddirectory_contents = $directory_contents;
            echo "<li>"."$ddirectory_contents    "."     size : $sizze" . "     last_modified : " . date("Y/m/d",$modified)."</li>"."\n";
            echo "<br>";
        }
    }
    closedir($toopen);
    echo "</ul>";
?>