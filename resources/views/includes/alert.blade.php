@if($alert = session()->pull('alert'))

<div class="success">
	<div class="alert alert-success text-center" role="alert">
		  {{ $alert }}
	</div>
</div>

@endif

@if($alert = session()->pull('alert-info'))

<div class="success">
	<div class="alert alert-info text-center" role="alert">
		  {{ $alert }}
	</div>
</div>

@endif