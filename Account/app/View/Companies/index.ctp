<div class="container">
	<div class="row">
		<dic class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="col-md-2">RFC</th>
						<th class="col-md-6">Nombre de la Compania</th>
						<th class="col-md-4">Domicilio</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($companies as $company): ?>
					<tr>
						<td><?= $company['Company']['rfc'] ?></td>
						<td><?= $company['Company']['nombre'] ?></td>
						<td><?= $company['Company']['domicilio'] ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</dic>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="btn-group">
				<?= $this->Html->link('<i class="fa fa-plus"></i> Nueva Compania', array(
					'controller' => 'Companies', 'action' => 'add'
				), array(
					'class' => 'btn btn-primary',
					'escape' => false
				)) ?>
			</div>
		</div>
	</div>
</div>