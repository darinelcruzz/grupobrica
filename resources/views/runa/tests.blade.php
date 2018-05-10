@extends('runa.root')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<color-box title="Una caja" color="warning">
				
			</color-box>

			<color-box title="Una caja 'sólida'" color="warning" solid>
				HOLA MUNDO
				<dropdown icon="cogs" color="warning">
					<ddi to="#" icon="user" text="Usuario"></ddi>
					<ddi to="#" icon="at" text="Correo"></ddi>
					<ddi to="#" icon="sign-out" text="Salir"></ddi>
				</dropdown>
			</color-box>

			<color-box title="Una caja 'sólida' con botón" color="warning" solid button>
				<modal-button target="unmodal">
					<span class="btn btn-warning">APLASTAMAH!</span>
				</modal-button>
				<modal title="Un modal" id="unmodal">
					¡SOY UN MODAL!
				</modal>
			</color-box>

			<color-box title="Una caja 'sólida' colapsada" color="warning" solid button collapsed>
				HOLA MUNDO
			</color-box>
		</div>
	</div>

@endsection