<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container row">

	<div class="col-sm-3">
		<h3>
		<?php
		echo $nome;
		?>
		</h3>
	</div>
	<div class="col-sm-6" >
		<form method="POST">
			<textarea name="msg" class="txtMsg" autofocus></textarea><br/>
			<input type="submit" value="Enviar" class="btn btn-primary"></input>
		</form>
		<div class="feeds">
		<?php 	foreach ($feed as $item):	?>
		<strong> <?php echo $item['nome'] ?></strong>-<?php echo date('d-m - H:i', strtotime($item['data_post'])); ?><br/>
		<?php echo $item['msg'] ?><hr>
		<?php endforeach; ?>
		</div>
	</div>
	<div class="col-sm-3 sugest" >
		<table class="table table-default">
		<thead><thead>Quem Seguir:</thead></thead>
		<?php
		foreach ($sugetao as $sug): ?>
		<tr>
			<td>
				<?php echo $sug['nome']; ?>
			</td>
			<td>	
			<?php if($sug['seguido']==0): ?>
			<a href="/twitter/home/seguir/<?php echo $sug['id_user']; ?>"  class="btn btn-info btn-xs">Seguir</a></td>
			<?php else : ?>
			<a href="/twitter/home/desseguir/ <?php echo $sug['id_user']; ?>"  class="btn btn-info btn-xs">Desseguir</a></td>	
			<?php endif; ?>	
		</tr>
		<?php endforeach;	?>
		</table>
	</div>


</div>
</body>
</html>
