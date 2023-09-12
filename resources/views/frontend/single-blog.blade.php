@extends('frontend.layout.master')
@section('title')
    Blog - Connect with Dr.Atiq
@endsection

@section('content')
       <!-- breadcrumbs area start -->
       <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset('frontend')}}/assets/img/bg/bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Blog Post</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('index')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>Blog Post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!-- about section start -->
        <section class="about_section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="about_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <img width="550" height="550" src="{{(!empty($blog->logo))?URL::to('storage/'.$blog->logo):URL::to('image/no_image.png')}}" alt="">
                            <div class="about_video_btn">
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about_sidebar wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="about_title">
                                <h5>{{$blog->title}}</h5><br>
                                <p>{{$blog->created_at->format('d M, Y')}}</p>
                               
                            </div>
                            <div class="about_desc">
                                {!!$blog->desc!!}
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->


        <!-- gaming video section start -->

        <!-- gaming video section end -->

   
        <!-- gaming update section start -->
        <section class="gaming_update_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="{{asset('frontend')}}assets/img/bg/bg.jpg">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="#">CONNECT NOW <img width="20" height="20" src="{{asset('frontend')}}/assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming update section end -->

    </div>
    <!-- page wrapper end -->
@endsection