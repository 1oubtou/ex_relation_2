@extends('layout.section')
@section('conducteurs' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card card-flush">
		<div class="card-body">
			<div class="pb-3" >
				<h2>Ajouter Conducteurs</h2>
			</div>
			<form action="{{ route('conducteurs_store') }}" method="POST">
				@csrf
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Nom</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="nom" value="{{ old('nom') }}" maxlength="10" required />
							@error('nom')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Prenom</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="prenom" value="{{ old('prenom') }}" maxlength="10" required />
							@error('prenom')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Lage</span>
							</label>
							<input type="number" class="form-control form-control-solid" name="lage" value="{{ old('lage') }}" maxlength="2" onKeyPress="if(this.value.length==2) return false;" required />
							@error('lage')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">N° CIN</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="n_cin" value="{{ old('n_cin') }}" maxlength="10" required />
							@error('n_cin')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Adresse</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="adresse" value="{{ old('adresse') }}" maxlength="50" required />
							@error('adresse')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Telephone</span>
							</label>
							<input type="tel" class="form-control form-control-solid" name="telephone" value="{{ old('telephone') }}" maxlength="20" required />
							@error('telephone')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<a href="{{ route('conducteurs_index') }}" class="btn btn-light mx-5">
						<span class="indicator-label">Annuler</span>
					</a>
					
					<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
						<span class="indicator-label">Save</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection