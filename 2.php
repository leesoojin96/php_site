<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php로 파일불러오기</title>
  </head>
  <body>
    <?php
    echo file_get_contents($_GET['id'].".txt");
    // 아이디의 값에 따라 불러오는 파일이 다르도록 만들기
     ?>
  </body>
</html>
