@extends('frontend.layout.master')
@section('title')
    Index - Connect with Dr.Atiq
@endsection

@section('content')
<div class="page_wrapper">

    <!--slide banner section start-->
    <section class="hero_banner_section d-flex align-items-center mb-130" data-bgimg="{{(!empty($slider->logo))?URL::to('storage/'.$slider->logo):URL::to('image/no_image.png')}}">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero_content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">{{$slider->title}}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s"  style="text-shadow:
                            -1px 0px 0px rgb(4, 93, 131),
                            1px 0px 0px rgb(9, 78, 87),
                            0px -1px 0px rgb(40, 32, 32),
                            0px 1px 0px rgb(0, 102, 255);color: rgb(255, 255, 255);">{{$slider->subtitle}}</p>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                                href="all-game.html">Play Now <img width="20" height="20"
                                    src="{{asset('frontend')}}/assets/img/icon/arrrow-icon.webp" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--slider area end-->

    <!-- gaming  world section start -->

    <!-- gaming  world section end -->

    <!-- gaming video section start -->
    <section class="gaming_video_section mb-118 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_video_inner slick_navigation slick__activation" data-slick='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,  
                        "responsive":[ 
                        {"breakpoint":500, "settings": { "slidesToShow": 1 } }  
                        ]                                                     
                    }'>
                        <div class="gaming_video_thumb">
                            <img width="1170" height="540" src="{{asset('frontend')}}/assets/img/bg/gaming-bg1.webp" alt="">
                            <div class="gaming_video_paly_icon">
                                <a class="video_popup" href="https://www.youtube.com/watch?v={{$about->link}}"><img
                                        width="134" height="140" src="{{asset('frontend')}}/assets/img/others/play-btn.webp" alt=""></a>
                            </div>
                            <div class="live_streaming_text">
                                <h3>Watch </h3>
                            </div>
                        </div>
                        <div class="gaming_video_thumb">
                            <img width="1170" height="540" src="assets/img/bg/gaming-bg1.webp" alt="">
                            <div class="gaming_video_paly_icon">
                                <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img
                                        width="134" height="140" src="assets/img/others/play-btn.webp" alt=""></a>
                            </div>
                            <div class="live_streaming_text">
                                <h3>Watch Live Streaming</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming video section end -->

    <!-- upcoming gaming section start -->

    <!-- upcoming gaming section end -->

    <!-- counterup section start -->

    <!-- counterup section end -->

    <!-- popular gaming  section start -->
    <section class="popular_gaming_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s"
                data-wow-duration="1.1s">
                <h2>Featured GAME</h2>
                
            </div>
            <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="row">
                    @foreach ($featuregame as $item)
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="{{@$item->link}}"><img width="570" height="330"
                                    src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" style="max-width:200px; max-height:150px" alt=""></a>
                     
                        </div>
                    </div>
                   
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- popular gaming section end -->

    <!-- testimonial section start -->

    <!-- testimonial section end -->

    <!-- blog section start -->
    <section class="blog_section mb-90">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s"
                data-wow-duration="1.1s">
                <h2>Latest Blog</h2>
                
            </div>
            <div class="row blog_inner">
                @foreach ($blog as $item)
                <div class="col-lg-6">
                    <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                        data-wow-duration="1.1s">
                        <div class="blog_thumb">
                            <a href="{{route('single_blog', $item->id)}}"><img width="200" height="200"
                                    src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_date">
                                <span><i class="icofont-calendar"></i> {{$item->created_at->format('d M, Y')}}</span>
                            </div>
                            <h3><a href="{{route('single_blog', $item->id)}}">{{$item->title}}</a></h3>
                            <a href="{{route('single_blog', $item->id)}}">READ MORE</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
          
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <!-- gaming update section start -->
    <section class="gaming_update_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_update_inner d-flex justify-content-between align-items-center"
                        data-bgimg="{{asset('frontend')}}/assets/img/bg/bg.jpg">
                        <div class="gaming_update_text">
                            <h2>Connect with us <br>
                                for gamING update.</h2>
                        </div>
                        <div class="gaming_update_btn">
                            <a class="btn btn-link" href="#">CONNECT NOW <img width="20" height="20"
                                    src="{{asset('frontend')}}assets/img/icon/arrrow-icon.webp" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming update section end -->

</div>
@endsection