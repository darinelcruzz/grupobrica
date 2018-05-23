@extends('runa.root')

@push('pageTitle')
    Usuarios | Agregar
@endpush

@section('content')

	<div class="row">
		<div class="col-md-7">
			<color-box title="Agregar usuarios" color="warning" solid>
				{!! Form::open(['method' => 'POST', 'route' => 'runa.user.store', 'class' => 'form-horizontal']) !!}

					{!! Field::text('name', ['tpl' => 'lte/oneline'], ['icon' => 'comment-o']) !!}

					{!! Field::text('username', ['tpl' => 'lte/oneline', 'ph' => 'ejemplo: runa123'], ['icon' => 'user']) !!}
						
					{!! Field::email('email', ['tpl' => 'lte/oneline'], ['icon' => 'at']) !!}
					
					{!! Field::password('password', ['tpl' => 'lte/oneline'], ['icon' => 'unlock-alt']) !!}
					
					{!! Field::password('password_confirmation', ['tpl' => 'lte/oneline'], ['icon' => 'lock']) !!}
						
					{!! Field::select('level', [0 => 'Admin', 1 => 'Ventas', 2 => 'Gerente', 3 => 'Ingeniero', 4 => 'Operador'], null, 
						['tpl' => 'lte/oneline', 'empty' => 'Elegir nivel'],
						['icon' => 'credit-card'])
					!!}

					{!! Form::submit('Agregar', ['class' => 'btn btn-warning pull-right']) !!}
				{!! Form::close() !!}
			</color-box>
		</div>
	</div>

@endsection