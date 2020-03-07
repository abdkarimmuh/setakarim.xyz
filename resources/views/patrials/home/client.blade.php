<section class="section bg-client" id="client">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto text-white section-main-title">
                    <h2>Our <span class="font-weight-bold">Client</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="mx-auto mt-2">It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div id="owl-demo" class="owl-carousel">
                    // TODO: Ini belum
                    {{-- @foreach ($clients as $client)
                    <div class="text-white people_says text-center">
                        @if ($client['file'] == null || $client['file'] == '')
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        @else
                        <div class="people_img">
                            <img src="{{$client['file']}}" alt="" class="img-fluid rounded-circle">
                        </div>
                        @endif
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">{{$client['name']}}</p>
                            <p class="h6">{{$client['desc']}}</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">"{{$client['remarks']}}"</p>
                        </div>
                    </div>
                    @endforeach --}}
                    <div class="text-white people_says text-center">
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">Kirk McFall</p>
                            <p class="h6">Google</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy
                                text is the 'Lorem Ipsum', which is said originated the 16th century. This
                                ancient dummy text is also incomprehensible, of most European in Latin script."
                            </p>
                        </div>
                    </div>
                    <div class="text-white people_says text-center">
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">Edward Evans</p>
                            <p class="h6">Google</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy
                                text is the 'Lorem Ipsum', which is said originated the 16th century. This
                                ancient dummy text is also incomprehensible, of most European in Latin script."
                            </p>
                        </div>
                    </div>
                    <div class="text-white people_says text-center">
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">Antonio Hernandez</p>
                            <p class="h6">Google</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy
                                text is the 'Lorem Ipsum', which is said originated the 16th century. This
                                ancient dummy text is also incomprehensible, of most European in Latin script."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>