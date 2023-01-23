@extends('layouts.app')

@section('title')
	Home
@endsection

@section('content')
	@include('layouts.navbar')
	<div id="carousel" class="carousel slide carousel-fade" data-mdb-ride="carousel">

		<div class="carousel-indicators">
			@foreach ($banners as $row)
				<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="{{$loop->index}}" class="{{ $loop->first ? 'active' : '' }}"></button>
			@endforeach
		</div>

		<div class="carousel-inner">
			@foreach ($banners as $row)
			<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
				<img src="{{ asset('storage/images/'. $row->image) }}" alt="{{ $row->title }}" class="d-block w-100" />
			</div>
			@endforeach
		</div>

		<button class="carousel-control-prev" type="button" data-mdb-target="#carousel" data-mdb-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-mdb-target="#carousel" data-mdb-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	@include('layouts.footer')
@endsection
