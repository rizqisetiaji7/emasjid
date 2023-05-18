@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="row">
	<h4 class="h4 mb-3">Welcome, <span class="fw-bold">{{ auth()->user()->name }}</span>.</h4>
	
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Card Header</h5>
			</div>
			<div class="card-body">
				{{-- Content --}}
			</div>
		</div>
	</div>
</div>
@endsection

@push('script')
<script>
	
</script>
@endpush