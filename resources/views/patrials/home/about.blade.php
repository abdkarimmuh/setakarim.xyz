<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">About </span>Me</h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">I am a Developer and UI/UX Designer — based in Depok.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div>
                    <img src="images/sign.png" alt="" class="img-fluid mx-auto d-block">
                </div>
                <div class="text-center about-detail mx-auto mt-5">
                    <h3 class="mb-3">Hello! <span class="font-weight-bold text-custom">I'M {{ $about['name'] }}.</span>
                    </h3>
                    <ul class="mb-0 list-inline text-center about-work">
                        <li class="list-inline-item mr-0 text-muted">UI/UX Designer</li>
                        <li class="list-inline-item mr-0 text-muted">Web Developer</li>
                        <li class="list-inline-item mr-0 text-muted">Mobile Devloper</li>
                    </ul>
                    <p class="text-muted mt-3">{{ $about['desc'] }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($skills as $item)
            <div class="col-md-6">
                <div class="progress-bars skill-custom">
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">{{ $item['name'] }}</div>
                        <div class="text-muted float-right">{{ $item['percent'] }}%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ $item['percent'] }}%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>