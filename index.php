<?php
require_once 'lib/autoload.php';
$sql = empty($_REQUEST['sql']) ? '' : strip_tags(trim($_REQUEST['sql']));
$formatted_sql = empty($sql) ? '' : SqlFormatter::format($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>SQL Formatter</title>
  <meta name="description" content="sql">
  <meta name="author" content="Vijay Mahrra">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column">
        <h1>SQL Formatter</h1>
        <?php if (!empty($formatted_sql)): ?>
        <?=$formatted_sql?>
        <?php endif ?>
        <form action="/index.php" method="POST">
          <label for="sql">Enter your SQL:</label>
          <textarea class="u-full-width" placeholder="SELECT …" name="sql" id="sql"><?=$sql?></textarea>
          <input class="button-primary" type="submit" value="Reformat my query!">
        </form>
        <hr>
        <ul>
            <li>SQL formatted with: <a href="http://jdorn.github.io/sql-formatter/">http://jdorn.github.io/sql-formatter/</a>
            <li>Website CSS uses <a href="http://getskeleton.com/">Skeleton</a>
        </ul>
      </div>
    </div>
  </div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
