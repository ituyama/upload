<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>アップロード完了</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://ituyama.github.io/sannomaru/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    CoderDojo三の丸
  </a>
</nav>


<?php


    if(is_uploaded_file($_FILES['up_file']['tmp_name'])){
  if(move_uploaded_file($_FILES['up_file']['tmp_name'],"./".$_FILES['up_file']['name'])){

            //正常
            echo "アップロード成功";
            echo "<iframe width='100%' height='1000px' src=./",$_FILES['up_file']['name'],"></iframe>";
                echo " <a href=","./".$_FILES['up_file']['name'],">こちら</a>）";


        }else{

            echo "error";
        }

    }else{
        echo "notfound.";

    }
    ?>
    </body>
    </html>
