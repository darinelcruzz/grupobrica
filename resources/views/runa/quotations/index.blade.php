@extends('runa.root')

@push('pageTitle')
    Cotizaciones
@endpush

@section('content')

	<div class="row">
		<div class="col-md-6">
			<color-box title="Cotizaciones" color="warning" solid>
				<data-table example="1">
					{{ drawHeader('#', 'cliente', 'descripción', '<i class="fa fa-cogs"></i>', 'estado') }}

					<template slot="body">
						@foreach($quotations as $quotation)
							<tr>
								<td>
									<big style="color: {{ $quotation->type ? 'navy': 'orange' }}">
										<b>{{ $quotation->folio }}</b>
									</big>
								</td>
								<td>
									{{ $quotation->client->name }}
									<div v-if="{{ $quotation->status === 'finalizado' ? 1: 0 }}">
										<br><i class="fa fa-phone" style="color:blue"></i>&nbsp;{{ $quotation->client->phone }}
									</div>
								</td>
								<td>
									<span style="color:green">
										$ {{ number_format($quotation->type ? $quotation->retainer: $quotation->amount, 2) }}
									</span><br>
									<small style="color:gray">{{ $quotation->description }}</small>
								</td>
								<td>
									<dropdown icon="cogs" color="warning">
										<ddi to="#" icon="check" text="PAGADO"></ddi>
										<ddi to="{{ route('runa.quotation.print', ['id' => $quotation->id]) }}" icon="print" text="IMPRIMIR"></ddi>
										<ddi to="#" icon="calculator" text="GENERAR TICKET"></ddi>
									</dropdown>
								</td>
								<td>
									<span class="badge bg-red"><small>{{ strtoupper($quotation->status) }}</small></span>
								</td>
							</tr>
						@endforeach
					</template>
				</data-table>
			</color-box>
		</div>
	</div>

@endsection