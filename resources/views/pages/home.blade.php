@extends('layouts.home')
@section('content')

    @include('includes.toparea')
    @include('includes.mainmenu')
    @include('includes.home.slider')


    <div class='wrapsemibox'>
	<div class='semiboxshadow text-center'>
	    <img class="img-responsive" src="assets/calypso/shp-999fad195c8edb6ec3900a955e772929ec291ceed993136d7f2b441dbf214dc6.png" alt="Shp 999fad195c8edb6ec3900a955e772929ec291ceed993136d7f2b441dbf214dc6" />
	</div>
	@include('includes.home.services')

	@include('includes.home.about-us')

	@include('includes.home.why-chooses')

	@include('includes.home.portfolio')

	@include('includes.home.contact-us')

    </div>
@stop