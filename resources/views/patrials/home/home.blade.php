<section class="home-bg section h-100vh" id="home">
    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h4>Hello & Welcome</h4>
                            <h2 class="header_title mb-0 mt-3">I Am <span class="element font-weight-bold"
                                    data-elements="Karim.,A Designer.,A Devloper."></span></h2>
                            <ul class="social_home list-unstyled text-center pt-4">
                                @foreach ($socials as $social)
                                <li class="list-inline-item">
                                    <a href="{{$social['address']}}" target="_blank">
                                        <i class="mdi {{$social['icon']}}"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="header_btn">
                                <a href="#" class="btn btn-outline-custom btn-rounded mt-4">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll_down">
        <a href="#about" class="scroll">
            <i class="mbri-arrow-down text-white"></i>
        </a>
    </div>
</section>