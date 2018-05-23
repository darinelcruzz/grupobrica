@extends('runa.root')

@push('pageTitle')
    Usuarios
@endpush

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ route('runa.user.create') }}" class="btn btn-app pull-right">
				<span class="badge bg-yellow">{{ count($users) }}</span>
				<i class="fa fa-key"></i> AGREGAR
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<color-box title="Usuarios" color="warning" solid>
				<data-table example="1">
					{{ drawHeader('ID', 'nombre', 'usuario', '<i class="fa fa-cogs"></i>') }}

					<template slot="body">
						@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>
									{{ $user->name }}
									<span class="pull-right">
										{!! str_repeat("<i class=\"fa fa-star\" style=\"color:orange\"></i>", 5 - $user->level) !!}
									</span><br>
								</td>
								<td>
									<span style="color:blue">{{ $user->username }}</span><br>
									<small>{{ $user->email }}</small>
								</td>
								<td>
									<dropdown icon="cogs" color="warning">
										<ddi to="{{ route('runa.user.edit', ['id' => $user->id]) }}" icon="pencil" text="Editar"></ddi>
										<ddi to="{{ route('runa.user.destroy', ['id' => $user->id]) }}" icon="trash" text="Borrar"></ddi>
									</dropdown>
								</td>
							</tr>
						@endforeach
					</template>
				</data-table>
			</color-box>
		</div>
	</div>

@endsection