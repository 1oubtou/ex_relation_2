@extends('layout.section')
@section('conducteurs' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Conducteur Details</h3>
			</div>
			<div class="align-self-center">
				<a href="{{ route('conducteurs_index') }}" class="btn btn-sm btn-primary mx-2">Liste Conducteurs</a>
				<a href="{{ route('conducteurs_edit', $conducteurs->id) }}" class="btn btn-sm btn-primary">Modifier Conducteur</a>
			</div>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Nom</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $conducteurs->nom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Prenom</label>
				<div class="col-lg-8 fv-row">
					<span class="fw-semibold text-gray-800 fs-6">{{ $conducteurs->prenom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Lage </label>
				<div class="col-lg-8 d-flex align-items-center">
					<span class="fw-bold fs-6 text-gray-800 me-2">{{ $conducteurs->lage }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">N° CIN</label>
				<div class="col-lg-8">
					<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $conducteurs->n_cin }}</a>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Adresse </label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $conducteurs->adresse }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Telephone</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $conducteurs->telephone }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Date Create</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $conducteurs->created_at->toDateString() }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">Date Update</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $conducteurs->updated_at == $conducteurs->created_at ? "No Updated" : $conducteurs->updated_at->toDateString() }}</span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection