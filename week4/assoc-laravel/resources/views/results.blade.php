<!DOCTYPE html>
<html>
  <head>
    <title>Results</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../wp.css">
  </head>
  
  <body>  
    <p>
    Hello <?php echo htmlspecialchars($name); ?>.
    Next year, you will be <?php echo (int)$age + 1; ?> years old.

    <hr>
  </body>
</html>

