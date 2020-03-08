@extends('layouts.master')

@section('content')
@include('patrials.topnav-blog')

<!--Start Home-->
<section class="header_section">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-white text-center">
                    <h2 class="font-weight-bold">{{$blog['title']}}</h2>
                    <div class="home_divider mt-3 mb-3 mx-auto"></div>
                    <div class="page_link text-uppercase">
                        <a href="/" class="d-inline-block mr-1">Home</a> / <span
                            class="text-white ml-1">Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Home-->

<!-- Start Blog -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_box bg-white rounded p-2 mt-3">
                            <div class="img_blog">
                                <img src="{{$blog['file']}}" alt="" class="img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="blog_detail rounded m-2 p-4 bg-white">
                                <h4 class="font-weight-bold">{{$blog['title']}}</h4>
                                <div class="blog_detail_devider mt-3 "></div>
                                <div class="clearfix mt-3 mb-3">
                                    <p class="text-muted float-left mb-0">By <span class="text-custom font-weight-bold">Muhammad Abdul Karim</span>&nbsp;&nbsp;|&nbsp;&nbsp;{{$blog['date']}}</p>
                                </div>
                                <div>{!! $blog['body'] !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('blog.patrials.side_widget')
        </div>
    </div>
</section>
<!-- End Blog -->

@endsection