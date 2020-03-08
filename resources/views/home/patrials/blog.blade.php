<section class="section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Our <span class="font-weight-bold">Blog</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4 mb-4 justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 mt-3">
                <div class="text-center rounded bg-white p-2">
                    <div class="img_blog">
                        @if ($blog['file'] == null || $blog['file'] == '')
                        <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                        @else
                        <img src="{{$blog['file']}}" alt="" class="img-fluid rounded mx-auto d-block">
                        @endif
                    </div>
                    <div class="content_blog pt-3 pb-3">
                        <div>
                            <h5 class="font-weight-bold mb-0">
                                <a href="/blog/{{$blog['id']}}" class="text-dark">{{str_limit($blog['title'], 20)}}</a>
                            </h5>
                        </div>
                        <div class="mt-3">
                            <p class="font-weight-bold h6 mb-3">{{$blog['category_name']}}</p>
                            <p class="h6 text-muted date_blog mb-0">{{$blog['date']}}</p>
                            <p class="mt-3 desc_blog pl-2 pr-2 text-muted">{{str_limit(strip_tags($blog['body']), 100)}}</p>
                            <p class="h6 mb-0">
                                <a href="/blog/{{$blog['id']}}" class="text-muted font-weight-bold">Read More...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-sm-12 text-center">
                <a class="btn btn-custom" href="/blog">Other Blog</a>
            </div>
        </div>
    </div>
</section>