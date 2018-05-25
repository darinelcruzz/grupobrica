@extends('runa.root')

@push('pageTitle')
    Cotizaciones | Agregar
@endpush

@section('content')

	<div class="row">
		<div class="col-md-{{ $type > 0 ? '8': '10' }} col-md-offset-{{ $type > 0 ? '2': '1' }}">
			<color-box title="Cotización {{ $type > 0 ? '| Producción': '' }}" color="warning" solid>
				{!! Form::open(['method' => 'POST', 'route' => ['runa.quotation.store', $type]]) !!}

					<div class="row">
						<div class="col-md-6">
							{!! Field::select('r_client_id', $clients, null, 
								['tpl' => 'lte/withicon', 'label' => 'Cliente', 'empty' => 'Seleccione cliente'], 
								['icon' => 'user'])
							!!}
						</div>
						<div class="col-md-6" align="center">
							<br>
							<em>¿Agregar cliente?</em> &nbsp;&nbsp;
							<a href="{{ route('runa.client.create') }}" class="btn btn-default">
								<i class="fa fa-user-plus"></i>
							</a>
						</div>
					</div>

					<div v-if="{{ $type }}" class="row">
						<div class="col-md-6">
							{!! Field::number('retainer', 0.00, ['tpl' => 'lte/withicon', 'min' => '0', 'step' => '0.01'], ['icon' => 'usd']) !!}
						</div>
						<div class="col-md-6">
							{!! Field::date('delivered_at', date('Y-m-d'), ['tpl' => 'lte/withicon', 'label' => 'Entrega'], ['icon' => 'calendar']) !!}
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							{!! Field::number('folio', $lastQ ? $lastQ->id + 1: 1, ['tpl' => 'lte/withicon', 'disabled' => ''], ['icon' => 'barcode']) !!}
						</div>
						<div class="col-md-8">
							{!! Field::text('description', ['tpl' => 'lte/withicon'], ['icon' => 'comment-o']) !!}
						</div>
					</div>

					<div v-if="!{{ $type }}">
						<products retainer="0" discount="0"></products>
						<input type="hidden" name="delivered_at" value="{{ date('Y-m-d') }}">
					</div>
					
					<hr>
					{!! Form::submit('Agregar', ['class' => 'btn btn-warning pull-right']) !!}

				{!! Form::close() !!}
			</color-box>
		</div>
	</div>

@endsection