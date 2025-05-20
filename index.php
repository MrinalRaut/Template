<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Template Creator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Create Your Custom Template</h1>
  <form method="POST" action="generate.php">
    <label for="text">Your Text:</label><br>
    <input type="text" id="text" name="text" required><br><br>

    <label for="font">Choose a Font:</label><br>
    <select name="font" id="font">
      <option value="Arial">Arial</option>
      <option value="Courier New">Courier New</option>
      <option value="Times New Roman">Times New Roman</option>
    </select><br><br>

    <button type="submit">Generate</button>
  </form>
</body>
</html>
