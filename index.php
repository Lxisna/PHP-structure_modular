<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
  rel="stylesheet">

  <style>
    #carousel img, #gallery div.card img{
      width: 100%;
      aspect-ratio: 16/10;
    }

    .footer {
      position: fixed;
      width: 100%;
      left: 0;
      bottom: 0;
      color: #FFF;
      text-align: center;
      background-color: black;
    }
  </style>
</head>
<body>
  <?php
  require("header.php")
  ?>
  <main class="container"> 
    <?php 
    //si la variable page est définit dans l'url, on la récupérer,sinon c'est "home"
    $getPage =isset($_GET['page'])? $_GET['page'] :'home';
    //我们定义加载所需页面的路线
    $path="./pages/" .$getPage. ".php";
    //
    $page=file_exists($path) ? $path :"./pages/home.php";
    //我们使用 include 或 require 加载所需的页面
    include($page);
    ?>
  </main>
  <?php
  require("footer.php")
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>