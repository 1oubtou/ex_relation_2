@extends('layout.section')
@section('camions' , 'active')
@section('section')

<div class="col-xl-7 m-auto">
	<div class="card-body p-8 bg-white rounded border border-secondary">
		<div class="d-flex justify-content-between mb-10">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Liste Camions</h3>
			</div>
			<a href="{{ route('camions_create') }}" class="btn btn-sm btn-primary align-self-center">Ajouter Camions</a>
		</div>
		@if ($camions->isEmpty())
			<h3 class="text-center text-danger">Desole aucune donnee a afficher.</h3>
		@else
			<table class="table table-row-dashed mx-auto w-100">
				<!--begin::Table head-->
				<thead>
					<!--begin::Table row-->
					<tr class="text-center text-gray-400 fw-bold">
						<th class="min-w-100px">#</th>
						<th class="min-w-100px">N° Camion</th>
						<th class="min-w-100px">Actions</th>
					</tr>
					<!--end::Table row-->
				</thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody class="fw-semibold text-gray-600 text-center">
					@foreach ( $camions as $key => $camion )
						<tr>
							<td>
								<a href="#" class="text-gray-800 text-hover-primary fw-bold">{{ ++$key }}</a>
							</td>
							<td>
								<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $camion->number }}</a>
							</td>
							<td>
								<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">Actions
									<span class="svg-icon svg-icon-5 m-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
										</svg>
									</span>
								</a>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{ route('camions_show', $camion->id) }}" class="menu-link px-3">View</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{ route('camions_edit', $camion->id) }}" class="menu-link px-3">Edit</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="{{ route('camions_destroy', $camion->id) }}" class="preconfirmed menu-link px-3">Delete</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</td>
							<!--end::Action=-->
						</tr>
					@endforeach
				</tbody>
				<!--end::Table body-->
			</table>
			<div class="d-flex justify-content-center">
				{!! $camions->links('pagination::bootstrap-4') !!}
			</div>
		@endif
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