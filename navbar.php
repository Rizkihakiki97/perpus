<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.3.3/dist/css//bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #bee1fa;">
    <div class="container-fluid">
      <a class="navbar-brand" href="img/logo.png"></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">Dashboard</a>
          <a class="nav-link" href="?pg=user">Manage Accounts</a>
          <a class="nav-link" href="?pg=book">Manage Books</a>
        </div>
        <a href="controller/logout.php" class="btn btn-danger btn-sm ms-auto">Log out</a>
      </div>
    </div>
  </nav>
  <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.js"></script>
</body>

</html>