@extends('runa.root')

@push('pageTitle')
    Usuarios | Editar
@endpush

@section('content')

	<div class="row">
		<div class="col-md-7">
			<color-box title="Agregar usuarios" color="warning" solid>
				{!! Form::open(['method' => 'POST', 'route' => ['runa.user.update', $user->id], 'class' => 'form-horizontal']) !!}

					{!! Field::text('name', $user->name, ['tpl' => 'lte/oneline'], ['icon' => 'comment-o']) !!}

					{!! Field::text('username', $user->username, ['tpl' => 'lte/oneline', 'ph' => 'ejemplo: runa123'], ['icon' => 'user']) !!}
						
					{!! Field::email('email', $user->email, ['tpl' => 'lte/oneline'], ['icon' => 'at']) !!}
						
					{!! Field::select('level', [0 => 'Admin', 1 => 'Ventas', 2 => 'Gerente', 3 => 'Ingeniero', 4 => 'Operador'], $user->level, 
						['tpl' => 'lte/oneline', 'empty' => 'Elegir nivel'],
						['icon' => 'credit-card'])
					!!}

					{!! Form::submit('Guardar', ['class' => 'btn btn-warning pull-right']) !!}
				{!! Form::close() !!}
			</color-box>
		</div>
	</div>

@endsection