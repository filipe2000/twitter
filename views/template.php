<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Twitter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

	</head>
<body>
<nav class="navbar navbar-fixed-top top-twitter">
<div class="container-fluid">
</div>
</nav>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TWITTER</a>
    </div>
    <div class="seg">
    	<div>Seguindo<br/>
    	<span><?php echo $viewData['qtd_seguido']; ?></span>
    	</div>
    	<div>Seguidores<br/>
    	<span><?php echo $viewData['qtd_seguidores']; ?></span>
    	</div>
    </div>    
    <ul class="nav navbar-nav">
	<li><?php echo $viewData['nome']; ?></li>
	<li><a href="/twitter/login/logout"  class="btn btn-info btn-xs">Logout</a>
    </ul>
  </div>
</nav>
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
	</body>
</html>