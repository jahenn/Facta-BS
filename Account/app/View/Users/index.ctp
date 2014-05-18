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
		<div class="col-md-10">
			<div class="pull-right btn-group">
				<?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo Usuario', array(
					'controller'=>'Users',
					'action'=>'add'
				), array(
					'escape' => false,
					'class'=>'btn btn-primary'
				)); ?>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-10">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class ="col-md-2">Nombre de Usuario</th>
						<th class="col-md-6">Nombre Completo</th>
						<th class="col-md-4">Correo Electronico</th>
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
	</div>
</div>