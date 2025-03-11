<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="issamelkhaili">
  <meta name="description" content="ISSNote - A simple and efficient notepad for taking and managing notes.">
  <meta name="keywords" content="notepad, notes, ISSNote, text editor, writing">
  <title>ISSNote - Your Personal Notepad</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="container">
      <h1>Welcome to ISSNote</h1>
      <h2>The perfect place to store and organize all your thoughts</h2>
      <div class="btn-container">
        <button class="btn btn-outline" onclick="window.location.href='users/login/login.html'">Login</button>
        <button class="btn" onclick="window.location.href='users/signup/signup.html'">Sign Up</button>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="quote-section">
        <h2>Quote of the Day</h2>
        <p class="quote">
          <?php
            $quotes = file("quotes/quotes.txt");
            $quotenum = rand(0, count($quotes)-1);
            echo htmlspecialchars($quotes[$quotenum]);
          ?>
        </p>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> ISSNote. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>