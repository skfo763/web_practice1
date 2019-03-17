<?php
  $conn = mysqli_connect('localhost', 'root', 990228);
  mysqli_select_db($conn, 'temp');
  $result = mysqli_query($conn, "SELECT* FROM topic");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CSS/style.css">
</head>
<body id="background">
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/360px-Unofficial_JavaScript_logo_2.svg.png" alt="JavaScript_logo_2"></img>
        <h1>JavaScript</h1>
    </header>
    <nav>
        <ol>
          <?php
            while($row = mysqli_fetch_assoc($result)) {
              echo '<li><a href="http://localhost/php/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
              echo "<br/>";
            }
          ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="white" id="white_btn"/>
        <input type="button" value="dracula" id="dracula_btn"/>
        <a href="http://localhost/php/write.php">글 작성</a>
    </div>
    <article>
        <form action="process.php" method="post">
            <p>
              제목 : <input type="text" name="title">
            </p>
            <p>
              작성자 : <input type="text" name="author">
            </p>
            <p>
              본문 : <br/><textarea name="description" rows="10" cols="80"></textarea>
            </p>
            <input type="submit" name="name">

        </form>
    </article>
    <script src="http://localhost/JS/script.js"></script>
</body>
</html>
