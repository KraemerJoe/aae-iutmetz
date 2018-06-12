@if (session()->has('success'))
	<div class="alert alert-success">
		<p><strong>{{ session('success') }}</strong></p>
	</div>
@endif