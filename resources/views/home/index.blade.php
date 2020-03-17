@extends('layouts.master')

@section('content')
@include('patrials.topnav')

<!--START HOME-->
@include('home.patrials.home')
<!--END HOME-->

<!-- START ABOUT -->
@include('home.patrials.about')
<!-- END ABOUT -->

<!-- START SERVICES -->
@include('home.patrials.services')
<!-- END SERVICES -->

<!-- END FUNFACTS -->
@include('home.patrials.funfacts')
<!-- START FUNFACTS -->

<!-- START EXP. & EDU. -->
@include('home.patrials.experiences')
<!-- END EXP. & EDU. -->

<!-- START ORG. & ACH. -->
@include('home.patrials.organizations')
<!-- END ORG. & ACH. -->

<!-- START CTA -->
{{-- @include('home.patrials.cta') --}}
<!-- END CTA -->

<!--START WORK -->
@include('home.patrials.work')
<!--END WORK -->

<!-- START CLIENT -->
@include('home.patrials.client')
<!-- END CLIENT -->

<!-- START GREAT PEOPLE -->
{{-- @include('home.patrials.great-people') --}}
<!-- END GREAT PEOPLE -->

<!-- START SUBCRIBE  -->
{{-- @include('home.patrials.suscribe') --}}
<!-- END SUBCRIBE -->

<!-- START BLOG -->
{{-- @include('home.patrials.blog') --}}
<!-- END BLOG -->

<!-- CONTACT FORM START-->
@include('home.patrials.contact')
<!-- CONTACT FORM END-->
@endsection