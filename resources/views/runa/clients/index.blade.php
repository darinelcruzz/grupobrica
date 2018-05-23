@extends('runa.root')

@push('pageTitle')
    Clientes
@endpush

@section('content')

	<div class="row">
		<div class="col-md-3">
			<a href="{{ route('runa.client.create') }}" class="btn btn-app">
				<span class="badge bg-yellow">{{ count($clients) }}</span>
				<i class="fa fa-user"></i> AGREGAR
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<color-box title="Clientes" color="warning" solid>
				<data-table example="1">
					{{ drawHeader('ID', 'nombre', 'dirección', 'contacto', '<i class="fa fa-cogs"></i>') }}

					<template slot="body">
						@foreach($clients as $client)
							<tr>
								<td>{{ $client->id }}</td>
								<td>
									{{ $client->name }}
									<span class="pull-right">
										<i v-if="{{ $client->credit === 1 ? 1: 0}}" class="fa fa-credit-card" style="color:red"></i> &nbsp;&nbsp;&nbsp;
										<i v-if="{{ $client->discount > 0 ? 1: 0 }}" style="color:orange"><b>%</b></i>
									</span><br>
									<small style="color:green">{{ $client->rfc }}</small>
								</td>
								<td>
									{{ $client->city }} <br>
									<small>{{ $client->address }}</small> <br>
									<small style="color:blue">{{ $client->phone }}</small>
								</td>
								<td>
									{{ $client->contact }} <br>
									<small style="color:gray">{{ $client->contact_phone }}</small>
								</td>
								<td>
									<dropdown icon="cogs" color="warning">
										<ddi to="{{ route('runa.client.edit', ['id' => $client->id]) }}" icon="pencil" text="Editar"></ddi>
										<ddi to="{{ route('runa.client.destroy', ['id' => $client->id]) }}" icon="trash" text="Borrar"></ddi>
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