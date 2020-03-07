<section class="section" id="education">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">Education & Experiance</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-5">
                <div class="cv_edu_exp mt-3">
                    @foreach ($educations as $item)
                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">
                                    {{ $item['year'] }}</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>{{ $item['name'] }}</h4>
                                    <p class="cv_desc mb-0">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="cv_edu_exp mt-3">
                    @foreach ($experiences as $item)
                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">
                                    {{ $item['year'] }}</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>{{ $item['name'] }}</h4>
                                    <p class="cv_desc mb-0">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>