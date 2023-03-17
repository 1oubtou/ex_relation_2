@extends('layout.section')
@section('dashboard' , 'active')
@section('section')
<div class="row gx-5 gx-xl-10 m-10">
	@include('resultat.select')
	@include('resultat.resulta')
	@include('resultat.liste_livraison')
	<!--end::Col-->
</div>
@endsection