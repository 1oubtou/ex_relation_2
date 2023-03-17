@extends('layout.section')
@section('camions' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Camions Details</h3>
			</div>
			<div class="align-self-center">
				<a href="{{ route('camions_index') }}" class="btn btn-sm btn-primary mx-2">Liste Camions</a>
				<a href="{{ route('camions_edit', $gps->id) }}" class="btn btn-sm btn-primary">Modifier Camion</a>
			</div>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">N° Camions</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $gps->number }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Date Create</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $gps->created_at->toDateString() }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">Date Update</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $gps->updated_at == $gps->created_at ? "Non mis a jour" : $gps->updated_at->toDateString() }}</span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection