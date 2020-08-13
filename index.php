<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>first Page</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/php_js/php/style.css">
  </head>
  <body>
    <header>
      <img src="https://image-notepet.akamaized.net/resize/620x-/card_news/201907/8ee7feb500e154ba61bc0f8fad06b07f.jpg"
      alt="cat_study">
      <h1><a href="http://localhost/php_js/php/index.php">JavaScript</a></h1>
    </header>

    <nav>
      <ol>
      <?php
        echo file_get_contents("list.txt");
       ?>
      </ol>
    </nav>

    <article>
    <?php
      // 입력된 아이디값이 있으면 해당 아이디 값의 파일을 불러오라
    if(empty($_GET['id']) == false){
    echo file_get_contents($_GET['id'].".txt");
    }
    // 아이디값이 없는 파일을 불러올 경우 에러가 발생할 수 있으므로 조건문을 작성해주면
    // 더 안전한 애플리케이션이 된다!
     ?>
    </article>
  </body>
</html>
