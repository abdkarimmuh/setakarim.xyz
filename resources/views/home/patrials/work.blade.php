<section class="section text-center" id="work">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Our <span class="font-weight-bold">Work</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <ul class="text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    @foreach ($slugs as $slug)
                    <li class="list-inline-item"><a class="" data-filter="{{$slug['slug']}}">{{$slug['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row mt-5 work-filter">
            @foreach ($works as $work)
            <div class="col-lg-4 {{$work['slug']}}">
                <div class="work_img_box rounded">
                    @if ($work['file'] == null || $work['file'] == '')
                    <a class="img-zoom" href="images/home-bg.jpg"></a>
                    @else
                    <a class="img-zoom" href="{{$work['file']}}"></a>
                    @endif
                    <div class="work_images">
                        @if ($work['file'] == null || $work['file'] == '')
                        <img src="images/home-bg.jpg" alt="image" class="img-fluid mx-auto d-block">
                        @else
                        <img src="{{$work['file']}}" alt="image" class="img-fluid mx-auto d-block">
                        @endif
                        <div class="work_overlay">
                            <h4 class="mb-0">{{$work['name']}}</h4>
                            <h6 class="mb-0">{{$work['desc']}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>