<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">Organization & Achievement</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4 justify-content-center">
            <div class="col-md-6">
                @foreach ($achievements as $achievement)
                <div class="row mb-4 mt-4">
                    <div class="col-md-3">
                        <div class="logo_img">
                            @if ($achievement['file'] == null || $achievement['file'] == '')
                            <img src="images/icon.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            @else
                            <img src="{{$achievement['file']}}" alt="logo-img" class="mx-auto img-fluid d-block">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <p class="mb-0 font-weight-bold">{{$achievement['title']}}</p>
                        <p class="mb-2 lead">{{$achievement['name']}}</p>
                        <p class="text-muted">{{$achievement['year']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach ($organizations as $organization)
                <div class="row mb-4 mt-4">
                    <div class="col-md-3">
                        <div class="logo_img">
                            @if ($organization['file'] == null || $organization['file'] == '')
                            <img src="images/icon.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            @else
                            <img src="{{$organization['file']}}" alt="logo-img" class="mx-auto img-fluid d-block">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <p class="mb-0 font-weight-bold">{{$organization['title']}}</p>
                        <p class="mb-2 lead">{{$organization['name']}}</p>
                        <p class="text-muted">{{$organization['year']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>