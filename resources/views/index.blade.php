@extends('layouts.master')

@section('content')
@include('patrials.topnav')

<!--START HOME-->
@include('patrials.home.home')
<!--END HOME-->

<!-- START ABOUT -->
@include('patrials.home.about')
<!-- END ABOUT -->

<!-- START SERVICES -->
@include('patrials.home.services')
<!-- END SERVICES -->

<!-- END FUNFACTS -->
@include('patrials.home.funfacts')
<!-- START FUNFACTS -->

<!-- START EXP. & EDU. -->
@include('patrials.home.experiences')
<!-- END EXP. & EDU. -->

<!-- START ORG. & ACH. -->
@include('patrials.home.organizations')
<!-- END ORG. & ACH. -->

<!-- START CTA -->
{{-- @include('patrials.home.cta') --}}
<!-- END CTA -->

<!--START WORK -->
@include('patrials.home.work')
<!--END WORK -->

<!-- START CLIENT -->
@include('patrials.home.client')
<!-- END CLIENT -->

<!-- START GREAT PEOPLE -->
{{-- @include('patrials.home.great-people') --}}
<!-- END GREAT PEOPLE -->

<!-- START SUBCRIBE  -->
{{-- @include('patrials.home.suscribe') --}}
<!-- END SUBCRIBE -->

<!-- START BLOG -->
@include('patrials.home.blog')
<!-- END BLOG -->

<!-- CONTACT FORM START-->
@include('patrials.home.contact')
<!-- CONTACT FORM END-->
@endsection