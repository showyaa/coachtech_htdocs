<?php
session_start();
?>
<html>

<body>
  <p>再びセッション開始</p>
  <p>受け取ったセッション変数の値は<?php print $_SESSION["language"]?>です</p>
  <p><a href="session3.php">セッションを破棄する</a></p>
</body>
</html>