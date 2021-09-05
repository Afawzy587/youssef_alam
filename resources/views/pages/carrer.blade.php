@extends('layouts.front')

@section('content')
    <!--           start content-->
    <div class="main-container">
        <main class="main wrapper">
            <!-- intro-innerPage -->
            <div class="intro-innerPage">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 padi-0">
                        <div class="intro-back" style="background-image: url({{voyager::image($carrer->section_1_image)}});">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="page-title">
                                                {{__('home.carrers')}}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- intro-innerPage -->

            <!-- page-ul-section -->
            <div class="page-ul-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-ul">
                                <ul class="list-unstyled" data-aos="fade-up">
                                    <li>
                                        <a href="{{route('HOME')}}">{{__('home.home')}}</a>
                                    </li>
                                    <li>
                                        <h5 class="page-active">{{__('home.carrers')}}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->

            <!-- career-section -->
            <div class="career-section" style="background-image: url({{voyager::image($carrer->section_2_image)}});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="career-pop-up">
                                <ul class="list-unstyled">
                                    @foreach($jobs as $jId => $job)
                                        <li data-aos="fade-up">
                                            <p class="career-title" data-careerdiscription="{{$job->getTranslatedAttribute('content', Config::get('app.locale') , 'fallbackLocale')}}"
                                               ata-careertitle="{{$job->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}" data-toggle="modal"
                                               data-careerExp="{{$job->getTranslatedAttribute('experience', Config::get('app.locale') , 'fallbackLocale')}}" data-target="#careerModal">
                                                {{$job->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="left-box">
                                <div class="career-box">
                                    <div class="section-content width-prag-100 aos-init aos-animate"data-aos="fade-up">
                                        <h3 class="section-title white-title">
                                            {{__('home.SUBMIT_RESUME')}}
                                        </h3>
                                        <p class="prag">
                                            {{__('home.SUBMIT_Your')}}
                                        </p>
                                    </div>
                                    <div class="form-box">
                                        <form action="{{url('/job_contact')}}" id="job_contact" method="post"  enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <select name="career-select" class="job_id" id="career=select">
                                                @foreach($jobs as $jId => $job)
                                                    <option value="{{$job->id}}">{{$job->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}</option>
                                                @endforeach
                                            </select>
                                            <div class="input-box">
                                                <div class="chooseFile col-md-6 pl-0">
                                                    <input type="file" name="file" id="file" class="inputfile"  required="required"  data-parsley-required-message="PleaseUploadCV" />
                                                    <label for="file" id="filename" class="form-control label-file-name">
                                                        <span><i class="fas fa-upload"></i> {{__('home.Choose_File')}}</span>
                                                    </label>
                                                </div>
                                                <button type="submit" class="send-button"> {{__('home.send')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- career-section -->

            <!-- careerVideo-section -->
            <div class="careerVideo-section" style="background-image: url({{voyager::image($carrer->section_3_image)}});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content width-prag-100 text-center" data-aos="fade-up">
                                <h3 class="section-title white-title">
                                    {{__('home.SUBMIT_RESUME')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-8 col-md-12">
                            <a data-fancybox="careerVideo"
                               href="{{$carrer->video_link}}">
                                <div class="video-box" data-aos="zoom-in"
                                     style="background-image: url({{voyager::image($carrer->video_image)}});">
                                        <span>
                                            {{__('home.PLAY_ViDEO')}}
                                        </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- careerVideo-section -->

            <!-- digital-section -->
            <div class="digital-section" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="digital-content">
                                <p class="prag">
                                    {{__('home.DIGITAL_PRINTING')}}
                                </p>
                                <p class="prag">
                                    {{__('home.y_a_DIGITAL_PRINTING')}}
                                </p>
                                <p class="prag">
                                    4:30
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div >
            <!-- digital-section -->
            <div class="contactus-section" style="background-image: url({{voyager::image($carrer->section_4_image)}});">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" class="contactus-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name"
                                                   class="form-control input-style" placeholder="Name"
                                                   aria-describedby="helpId"
                                                   style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                        </div>
                                        <div class="form-group">
                                            <select name="inquiries" class="select-option" id="opInquiries">
                                                <option value="inquiries">Inquiries</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="txtEmail" name="email" id="email"
                                                   class="form-control input-style" placeholder="Your Email"
                                                   aria-describedby="helpId">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone"
                                                   class="form-control input-style" placeholder="Your Phone"
                                                   aria-describedby="helpId">
                                        </div>
                                        <div class="form-group">
                                                <textarea class="form-control input-style" id="txtMessage"
                                                          placeholder="Enter The Message Here..."></textarea>
                                        </div>
                                        <div class="buttom-link">
                                            <button type="submit" class="submit-button">Learn more</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--           end content-->
    <!-- Modal -->
    <div class="modal fade" id="careerModal" tabindex="-1" role="dialog" aria-labelledby="careerModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModal"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="prag"></p>
                    <span class="exp-year"></span>
                </div>
            </div>
        </div>
    </div>
@endsection

