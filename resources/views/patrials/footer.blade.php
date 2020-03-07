<!-- START FOOTER -->
<section class="bg-light">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-lg-12">
                <div class="float-left float_none mt-2 mb-2">
                    <p class="copy-rights text-muted mb-0">2020 &copy; Setakarim</p>
                </div>
                <div class="float-right float_none mt-2 mb-2">
                    <ul class="list-inline fot_social mb-0">
                        @foreach ($socials as $social)
                        <li class="list-inline-item">
                            <a href="{{$social['address']}}" class="social-icon text-muted" target="_blank">
                                <i class="mdi {{$social['icon']}}"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END FOOTER -->