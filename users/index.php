<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="issamelkhaili">
  <meta name="description" content="ISSNote - A simple and efficient notepad for taking and managing notes.">
  <meta name="keywords" content="notepad, notes, ISSNote, text editor, writing">
  <title>ISSNote - Your Personal Notepad</title>
</head>
<header>
    <br><h1> Welcome to IssNote </h1></br>
    <br><h2>IssNote is the right place to store and save all ur thoughts </h2></br>
    <br><input type="button" id="creatfile" value
    <a href="notesbase/creatfile.php"><input type="button" id="creatfile" value="New Note"></a>
</header>
<body>
    <p><input type="button" id="login" value="Login" onclick="window.location.href='users/login/login.html'"/></p>
    <p><input type="button" id="Signup" value="Signup" onclick="window.location.href='users/signup/signup.html'"/></p>
    <br><label for="quotes" id="quotes"><h1>Quote of the day</h1></label></br>
    <h3><?php $quotes = file("quotes/quotes.txt"); $quotenum = rand(0,9); print ($quotes[$quotenum]); ?></h3>
</body>
</html>