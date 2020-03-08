@extends('layouts.master')

@section('content')
@include('patrials.topnav-blog')

        <!--Start Home-->
        <section class="header_section section">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h2 class="font-weight-bold">Sebuah Coretan Karim</h2>
                            <div class="home_divider mt-3 mb-3 mx-auto"></div>
                            <div class="page_link text-uppercase"> 
                                <a href="/" class="d-inline-block mr-1">Home</a> / <span class="text-white ml-1">Blog</span> 
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
                        @foreach ($blogs as $blog)
                        <div class="mt-3 mb-3 rounded bg-white p-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img_blog">
                                        @if ($blog['file'] == null || $blog['file'] == '')
                                        <img src="/images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block" style="height: 180px; object-fit: cover;">
                                        @else
                                        <img src="{{$blog['file']}}" alt="" class="img-fluid rounded mx-auto d-block" style="height: 180px; object-fit: cover;">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="content_blog pt-3 pb-3">
                                        <div>
                                            <h5 class="font-weight-bold mb-0"><a href="/blog/{{$blog['id']}}" class="text-dark">{{str_limit($blog['title'], 40)}}</a></h5>
                                        </div>
                                        <div class="mt-3">
                                            <p class="mb-1"><span class="text-custom font-weight-bold">{{$blog['category_name']}}</span><span class="text-muted">&nbsp;&nbsp;|&nbsp;&nbsp;{{$blog['date']}}</span></p>
                                            <p class="desc_blog text-muted mt-0">{{str_limit(strip_tags($blog['body']), 120)}}</p>
                                            <p class="h6 mb-0"><a href="/blog/{{$blog['id']}}" class="text-muted font-weight-bold">Read More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        @endforeach
                        @include('blog.patrials.pagination')
                    </div>
                    @include('blog.patrials.side_widget')
                </div>
            </div>
        </section>
        <!-- End Blog -->

@endsection