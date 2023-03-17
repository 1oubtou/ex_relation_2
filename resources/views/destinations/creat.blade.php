@extends('layout.section')
@section('destinations' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card card-flush">
		<div class="card-body">
			<div class="pb-3" >
				<h2>Ajouter Destination</h2>
			</div>
			<form action="{{ route('destinations_store') }}" method="POST">
				@csrf
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Ville</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="ville" value="{{ old('ville') }}" maxlength="50" required />
							@error('ville')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="d-flex justify-content-start align-items-center">
					<a href="{{ route('destinations_index') }}" class="btn btn-light mx-5">
						<span class="indicator-label">Annuler</span>
					</a>
					
					<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
						<span class="indicator-label">Save</span>
					</button>
				</div>
				</div>
				
			</form>
		</div>
	</div>
</div>

@endsection