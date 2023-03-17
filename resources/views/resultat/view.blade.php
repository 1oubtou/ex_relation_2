@extends('layout.section')
@section('dashboard' , 'active')
@section('section')
<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Details de Livraison</h3>
			</div>
			<div class="align-self-center">
				<a href="{{ route('dashboard_index') }}" class="btn btn-sm btn-primary mx-2">Liste de Livraison</a>
				<a href="{{ route('dashboard_annule', $dashboard->id) }}" class="preconfirmed btn btn-sm btn-primary">Annuler la Livraison</a>
			</div>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Nom complet du Conducteur</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $dashboard->conducteurs->nom }} &nbsp; {{ $dashboard->conducteurs->prenom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Lage </label>
				<div class="col-lg-8 d-flex align-items-center">
					<span class="fw-bold fs-6 text-gray-800 me-2">{{ $dashboard->conducteurs->lage }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">N° CIN</label>
				<div class="col-lg-8">
					<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $dashboard->conducteurs->n_cin }}</a>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">N° Camion</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $dashboard->camions->number }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Destination</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $dashboard->destination->ville }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">date de lancement</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $dashboard->created_at }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">date de fin</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $dashboard->updated_at == $dashboard->created_at ? "Ce n'est pas fini" : $dashboard->updated_at }}</span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('.preconfirmed').click(function(e){
            e.preventDefault();
            Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#ff4d4d',
				confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
					Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success'
					)
                    window.location.href = $(this).attr('href');
                }
            })
        })
    });
</script>
@endsection