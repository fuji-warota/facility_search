<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>
    <!-- <script type="text/javascript" src="./position.js"></script> -->
    <h1>facility page</h1>
    <form action="#" method="POST">
      <p>緯度:<input type="text" name="lat">経度:<input type="tect" name="lon"></p>
      <p><input type="submit" value="決定"></p>
    </form>
    <?php include('./test.php');
      echo('<pre>');
      echo json_encode($result, JSON_UNESCAPED_UNICODE);
      echo('</pre>');
    ?>
  </body>
</html>
