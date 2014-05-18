<?php  pr($this->request->data) ?>
<div class="container">
	<?= $this->Form->create('User') ?>
		<div class="row">
			<div class="col-md-2"><label for="username">Nombre de Usuario:</label></div>
			<div class="col-md-4"> 
				<?= $this->Form->input('username', array(
					'class'=>'form-control',
					'label' => false )) ?>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-2"><label for="nombre">Nombre Completo:</label></div>
			<div class="col-md-4">
				<?= $this->Form->input('nombre', array(
					'class' => 'form-control',
					'label' => false
				)) ?>
			</div>
			<div class="col-md-2"><label for="correo_electronico">Correo Electronico:</label></div>
			<div class="col-md-4">
				<?= $this->Form->input('correo_electronico', array(
					'class' => 'form-control',
					'label' => false
				)) ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"><label for="password">Contraseña:</label></div>
			<div class="col-md-4">
				<?= $this->Form->input('password', array(
					'class' => 'form-control',
					'label' => false
				)) ?>
			</div>
			<div class="col-md-2"><label for="password-2">Confirma Contraseña</label></div>
			<div class="col-md-4"><input type="password" class="form-control"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<span class="pull-right btn-group">
					<input type="submit" value="Guardar Usuario" class="btn btn-primary">
					<a href="#" class="btn btn-default btn-flat">Regresar</a>
				</span>
			</div>
		</div>
	<?= $this->Form->end() ?>
</div>