@extends('runa.root')

@push('pageTitle')
    Clientes | Editar
@endpush

@section('content')

	<div class="row">
		<div class="col-md-6">
			<color-box title="Agregar cliente" color="warning" solid>

				{!! Form::open(['method' => 'POST', 'route' => ['runa.client.update', $rClient->id]]) !!}

					{!! Field::text('name', $rClient->name, ['tpl' => 'lte/withicon'], ['icon' => 'user']) !!}
					
					<div class="row">
						<div class="col-md-6">
							{!! Field::email('email',$rClient->email, ['tpl' => 'lte/withicon'], ['icon' => 'at']) !!}
						</div>
						<div class="col-md-6">
							{!! Field::text('phone',$rClient->phone, ['tpl' => 'lte/withicon'], ['icon' => 'phone']) !!}
						</div>
					</div>
					
					{!! Field::text('address',$rClient->address, ['tpl' => 'lte/withicon'], ['icon' => 'map-marker']) !!}
					
					<div class="row">
						<div class="col-md-6">
							{!! Field::text('city',$rClient->city, ['tpl' => 'lte/withicon'], ['icon' => 'map-signs']) !!}
						</div>
						<div class="col-md-6">
							{!! Field::text('rfc',$rClient->rfc, ['tpl' => 'lte/withicon'], ['icon' => 'barcode']) !!}
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							{!! Field::text('contact',$rClient->contact, ['tpl' => 'lte/withicon'], ['icon' => 'user']) !!}
						</div>
						<div class="col-md-6">
							{!! Field::text('contact_phone',$rClient->contact_phone, ['tpl' => 'lte/withicon'], ['icon' => 'mobile-phone']) !!}
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							{!! Field::select('credit', [0 => 'No', 1 => 'Sí'], $rClient->credit, ['tpl' => 'lte/withicon', 'empty' => false], ['icon' => 'credit-card']) !!}
						</div>
						<div class="col-md-6">
							{!! Field::number('discount', $rClient->discount, ['tpl' => 'lte/withicon'], ['icon' => 'minus-square']) !!}
						</div>
					</div>

					{!! Form::submit('Guardar', ['class' => 'btn btn-warning pull-right']) !!}
				{!! Form::close() !!}
			</color-box>
		</div>
	</div>

@endsection