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
				<a class="btn btn-success" href="{{ url('users/create') }}">
					<i class="fa fa-plus"></i> 
					Adicionar Usuario
				</a>
				<hr>
				@if (session()->has('message'))
					<div class="alert alert-success alert-dismissible fade show">
					  {{ session()->get('message') }}
					  <button type="button" class="close" data-dismiss="alert">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				@endif
				<table class="table table-bordered table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Nombre Usuario</th>
							<th>Nombre Completo</th>
							<th>Correo Electrónico</th>
							<th>Foto</th>
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
									<img class="img-thumbnail" src="{{ asset($user->photo) }}" width="40px">
								</td>
								<td>
									<a class="btn btn-light" href="{{ url('users/'.$user->id) }}">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-light" href="{{ url('users/'.$user->id.'/edit') }}">
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

