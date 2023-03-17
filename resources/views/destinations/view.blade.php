@extends('layout.section')
@section('destinations' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Destinations Details</h3>
			</div>
			<div class="align-self-center">
				<a href="{{ route('destinations_index') }}" class="btn btn-sm btn-primary mx-2">Liste Destinations</a>
				<a href="{{ route('destinations_edit', $destinations->id) }}" class="btn btn-sm btn-primary">Modifier Destination</a>
			</div>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Ville</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $destinations->ville }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Date Create</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $destinations->created_at->toDateString() }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">Date Update</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $destinations->updated_at == $destinations->created_at ? "Not Updated" : $destinations->updated_at->toDateString() }}</span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection