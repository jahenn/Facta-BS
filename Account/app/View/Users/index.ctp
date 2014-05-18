<?php 
	/**
	*
	*/

	// pr($users);

?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".table").dataTable();
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-6 btn-group">
			<?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo Usuario', array(
				'controller'=>'Users',
				'action'=>'add'
			), array(
				'escape' => false,
				'class'=>'btn btn-primary'
			)); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6 well">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nombre de Usuario</th>
						<th>Nombre Completo</th>
						<th>Correo Electronico</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($users as $_user): ?>
					<tr>
						<td><?= $this->Html->link($_user['User']['username'] , array(
							'controller' => 'Users',
							'action' => 'view', $_user['User']['username'] 
						)) ?></td>
						<td><?= utf8_encode($_user['User']['nombre'] ) ?></td>
						<td><?= $_user['User']['correo_electronico'] ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-6"></div>
	</div>
</div>