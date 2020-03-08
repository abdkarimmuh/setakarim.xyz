<section class="section " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Get In <span class="font-weight-bold">Tuch</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>

        <!-- Without Contact-->
        <div class="row mt-4 pt-4 justify-content-center">
            <div class="col-lg-8">
                <div class="contact_form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your name..." required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="email" class="font-weight-bold">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your email..." required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="subject" class="font-weight-bold">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject.."
                                        required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="comments" class="font-weight-bold">Message</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control"
                                        placeholder="Your message..." required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" class="btn btn-custom" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- With Contact-->
        {{-- <div class="row mt-4 pt-4">
            <div class="col-lg-4">
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-mobile2 text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Call Us On</p>
                        <p class="text-muted">{{ $about['phone'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-letter text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Email Us At</p>
                        <p class="text-muted">{{ $about['mail'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-pin text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Visit Office</p>
                        <p class="text-muted">{{ $about['address'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact_form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your name..." required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="email" class="font-weight-bold">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your email..." required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="subject" class="font-weight-bold">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject.."
                                        required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="comments" class="font-weight-bold">Message</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control"
                                        placeholder="Your message..." required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" class="btn btn-custom" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</section>