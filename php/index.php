<?php include ('./str2ascii.php'); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    
    <link href="./../style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="container">
    <h1>str2ascii</h1>
    <p><a href="./..">go back</a></p>
    <form action="" method="post">
      <textarea name="str" id="textarea"><?php echo $_POST['str']; ?></textarea>
      <p>here you can enter your text or your ascii numbers divided by ,</p>
      <p><span>the delimiter</span><input name="delimiter" type="text" value="<?php echo $delimiter; ?>"> <input type="submit" value="Next"></p>
    </form>
    <h2>str -&#62; ascii</h2>
    <textarea readonly class="output"><?php echo str2ascii($_POST['str'], $delimiter); ?></textarea>
    <h2>ascii -&#62; str</h2>
    <textarea readonly class="output"><?php echo ascii2str($_POST['str'], $delimiter); ?></textarea>
  </div>
</body>
</html>
