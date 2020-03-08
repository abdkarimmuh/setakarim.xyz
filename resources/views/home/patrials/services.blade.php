<section class="section bg-light" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Our <span class="font-weight-bold">Services</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            @foreach ($services as $item)
            <div class="col-lg-4 mt-4">
                <div class="lan_box_ser text-center rounded p-4 mt-3">
                    <div class="ser_icon">
                        <i class="{{ $item['icon'] }}"></i>
                    </div>
                    <div class="service-content mt-4">
                        <h5 class="font-weight-bold">{{ $item['name'] }}</h5>
                        <p class="mt-3 text-muted mb-0">{{ $item['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>