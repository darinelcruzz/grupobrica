<!DOCTYPE html>
<html lang="es">
	@include('lte.htmlhead')

	<body class="hold-transition login-page">

		<div class="login-box">

			<div class="login-box-body">

				<div class="row">
					<div class="col-md-8 col-md-offset-2" align="center" valign="middle">
						<img src="{{ asset("img/$company.png") }}" alt="logo" width="100%" height="100%">
					</div>
				</div>

				{!! Form::open(['method' => 'POST', 'route' => 'login', 'class' => 'form-horizontal']) !!}
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							{!! Field::text('username', ['value' => old('username'), 'tpl' => 'lte/withicon'], ['icon' => 'user-circle']) !!}
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							{!! Field::password('password', ['tpl' => 'lte/withicon'], ['icon' => 'key']) !!}
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<input type="hidden" value="{{ $company }}" name="company">
							<button type="submit" class="btn btn-{{ $company == 'runa' ? 'warning': 'primary'}} btn-block">
								<b>E N T R A R &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-forward"></i></b>
							</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</body>
</html>