@extends('layouts-custom.app')

@section('title', 'Crear Usuario')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-plus"></i> 
					Crear Usuario
				</h1>
				<hr>
				<form action="{{ url('user') }}" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Nombre de Usuario" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="fullname" placeholder="Nombre y Apellidos" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Contraseña" required>
					</div>
					<div class="form-group">
						<input type="date" class="form-control" name="birthdate" placeholder="Fecha Nacimiento" required>
					</div>
					<div class="form-group">
						<select name="gender" class="form-control">
							<option value="">Seleccione Genero...</option>
							<option value="F">Femenino</option>
							<option value="M">Masculino</option>
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="photo" class="form-control" accept="image/*">
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-lg"> 
							<i class="fa fa-save"></i>
							Guardar
						</button>
						<button class="btn btn-light btn-lg" type="reset"> 
							<i class="fa fa-trash"></i>
							Limpiar
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection