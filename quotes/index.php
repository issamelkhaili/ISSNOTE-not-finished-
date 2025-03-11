<?php
    $quotes = file("quotes.txt");
    $quotenum = rand(1,10);
    print ($quotes[$quotenum]);
?>