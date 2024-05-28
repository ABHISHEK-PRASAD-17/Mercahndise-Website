<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="1stpage.php">MERCH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="1stpage.php">Home</a>
        </li>
       
        
      </ul>
      <div>
        <?php 
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count = count($_SESSION['cart']);
        }
        ?>
        <a href="mycart1.php" class="btn btn-success">MY CART <?php echo $count; ?></a>
      </div>
    </div>
  </div>
</nav>
</body>
</html>