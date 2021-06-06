<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>home</title>
  </head>
  <body>
    <p>test</p>
    <script type="text/javascript" src="./position.js"></script>
    <?php include('./test.php');
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    ?>
  </body>
</html>
