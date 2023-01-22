@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row g-3">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffform">
							Add Course Information
						</button>
					</div>