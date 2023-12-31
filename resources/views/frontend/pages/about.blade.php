<section class="section about-me" id="aboutme">
    <!-- container -->
    <div class="container">
        <div class="about-box">
            <div class="row">

                <div class="col-lg-6 position-relative">
                    <div class="image-round"></div>
                    <div class="about-image p-4 pb-0">
                        <img src="{{ asset('frontend/images/about.png')}}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-item p-5">
                        <h2 class="display-5 fw-semibold">About Me</h2>
                        <p class="text-muted fs-14">It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout. The point of using normal
                            distribution of letters, as opposed to using 'Content here, content here', making it
                            look like readable English..</p>

                        <ul class="nav nav-pills mb-3 mt-4 pt-2" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Experience</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Education</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade mb-4 show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">

                                @foreach ( $skill as $data)
                                <div class="skill-item  pt-2">
                                    <div class="">
                                        <h6>{{ $data->title}} :</h6>
                                        <small>{{ $data->description}}</small>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                            
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">

                                <div class="experience">
                                    <div class="row position-relative">
                                        <div class="col-2">
                                            <div class="border-left"></div>
                                        </div>
                                        @foreach ( $education as $data)
                                        <div class="col-10">
                                            <div class="mt-4 pt-2">
                                                <h5>{{ $data->title}}</h5>
                                                <p class="text-muted fs-15 fw-bold p-0 m-0">{{$data->company}} </p>
                                                <small  class="text-muted p-0 m-0"><small>{{ $data->location}}</small></small>
                                                <p class="text-muted fs-15">{!! $data->description!!}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                   
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="experience">
                                    <div class="row position-relative">
                                        <div class="col-2">
                                            <div class="border-left"></div>
                                        </div>
                                        <div class="col-10">
                                            <div class="mt-4 pt-2">
                                                <h5>BSc in Computer Science & Engineering</h5>
                                                <p class="text-muted fs-15 mb-0">Daffodil International University</p>
                                                <p class="text-muted fs-15 mb-0">Graduate - 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- end container -->
</section>