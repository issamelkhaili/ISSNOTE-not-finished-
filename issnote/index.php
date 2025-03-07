<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="issamelkhaili">
  <meta name="description" content="ISSNote - A simple and efficient notepad for taking and managing notes.">
  <meta name="keywords" content="notepad, notes, ISSNote, text editor, writing">
  <title>ISSNote - Your Personal Notepad</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <header>
    <div class="header-content">
      <h2 id="filename"><?php echo "You are editing ".$filename; ?></h2>
      <div class="header-buttons">
        <button class="btn save-btn" onclick="document.getElementById('save-form').submit()">💾 Save Changes</button>
        <button class="btn delete-btn" onclick="document.getElementById('delete-form').submit()">Delete Note</button>
      </div>
    </div>
  </header>

  <main>
    <?php include "codemirror.html"?>
  </main>

  <form id="save-form" action="savedata.php" method="POST">
    <input type="hidden" id="submit" name="submit">
  </form>

    <form id="delete-form" action="deletefile.php" method="POST">
      <input type="hidden" id="submit" name="submit">
    </form>

<footer>
    <p>ISSNote v1.0 - Created by issamelkhaili</p>
    <input type="button" id="button" name="button" value="clickme">
    <script>
        document.getElementById('button').onclick = function() {
          const content = editor.getValue();
          console.log(content);
        };
    </script>
  </footer>
</body>
</html>