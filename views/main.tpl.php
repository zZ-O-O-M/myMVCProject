<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <title><?= $pageData['title'] ?></title>
</head>
<body>

<form class="form" method="post">
  <label for="login">Login:</label>
  <input type="text" name="login" id="login" placeholder="login">

  <label for="pass">Password:</label>
  <input type="text" name="password" id="pass" placeholder="password">

  <input type="submit">
</form>


<? if (isset($pageData['error'])): ?>
   <?= $pageData['error']; ?>
<? else: ?>
  <p>All done</p>
<? endif ?>


<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.js"></script>
<script src="/js/script.js"></script>
<script src="/node_modules/angular/angular.js"></script>
</body>
</html>
