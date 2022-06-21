<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas2 Jelita - Dashboard</title>
	<link rel="stylesheet" href="<?php echo AST; ?>/css/bootstrap.min.css">
</head>

<body>
			<!-- ini menu navigasi--> 
			<nav class="navbar navbar-expand-lg bg-light">
 				 <div class="container">
 				   <a class="navbar-brand" href="#">Tugas 2 Jelita</a>
 				   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    		  <span class="navbar-toggler-icon"></span>
  			  </button>
  		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
     		 <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/golongan">Golongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">User</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layanan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">ContacUS</a></li>
            <li><a class="dropdown-item" href="#">Pusat Informasi</a></li>
            <li><a class="dropdown-item" href="#">Bantuan</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<!-- ini menu navigasi--> 

  <div class=container>
  <?php require_once ROOT . "app/views/" . $view . ".php"; ?>
  </div>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
			<script src="<?php echo AST; ?>/js/bootstrap.bundle.js"></script>
		<footer>
			copyright 2022&copy; Jelita Ritonga
		</footer>

	</main>
</body>

</html>