@extends('layouts-custom.app')

@section('title', 'Lista de Usuarios')

@section('content')
	<section class="content mt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>
					<i class="fa fa-users"></i>
					Lista de Usuarios
				</h1>
				<hr>
				<a class="btn btn-success" href="{{ url('user/create') }}">
					<i class="fa fa-plus"></i> 
					Adicionar Usuario
				</a>
				<hr>
				<table class="table table-bordered table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Nombre Usuario</th>
							<th>Nombre Completo</th>
							<th>Correo Electrónico</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->username }}</td>
								<td>{{ $user->fullname }}</td>
								<td>{{ $user->email }}</td>
								<td>
									<a class="btn btn-light" href="">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-light" href="">
										<i class="fa fa-pencil"></i>
									</a>
									<a class="btn btn-danger" href="">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
@endsection

