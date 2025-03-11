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
      <h2 id="filename"><?php echo "<h2>$filename</h2>";?>
      <div class="header-buttons">
        <form action="savedata.php" method="POST" style="display:inline;">
          <input type="hidden" name="filename" value="<?php echo $filename; ?>">
          <input type="hidden" name="content" value="<?php echo htmlspecialchars($content); ?>">
          <button type="submit" name="submit" class="btn save-btn">💾 Save Changes</button>
        </form>
        <form action="../notesbase/deletefile.php" method="POST" style="display:inline;">
          <input type="hidden" name="filename" value="<?php echo $filename; ?>">
          <button type="submit" name="submit" class="btn delete-btn">Delete Note</button>
        </form>
      </div>
    </div>
  </header>

  <main>
    <?php include "codemirror.html"?>
  </main>


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