@extends('layout.section')
@section('camions' , 'active')
@section('section')

<div class="col-xl-7 m-auto">
	<div class="card card-flush">
		<div class="card-body">
			<div class="pb-3" >
				<h2>Modifier Camion</h2>
			</div>
			<form action="{{ route('camions_update',$gps_edit->id) }}" method="POST">
				@csrf
				<div class="row row-cols-1">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Nom Cours</span>
							</label>
							<div class="d-flex justify-content-start align-items-start">
								<div class="w-50 me-10">
									<input type="text" class="form-control form-control-solid me-10" name="number" value="{{ $gps_edit->number }}" required />
									@error('number')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								<a href="{{ route('camions_index') }}" class="btn btn-light mx-5">
									<span class="indicator-label">Annuler</span>
								</a>
								<button type="submit" class="btn btn-primary">
									<span class="indicator-label">Save</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection