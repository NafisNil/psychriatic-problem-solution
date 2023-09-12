@extends('frontend.layout.master')
@section('title')
    Blog  - Connect with Dr.Atiq
@endsection

@section('content')
       <!-- breadcrumbs area start -->
       <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset('frontend')}}/assets/img/bg/bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Blog</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('index')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>  Blog</li>
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
        <section class="blog_section mb-90">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s"
                    data-wow-duration="1.1s">
                    <h2> Blog</h2>
                    
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
        <!-- about section end -->


        <!-- gaming video section start -->

        <!-- gaming video section end -->

   
        <!-- gaming update section start -->
        <section class="gaming_update_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="{{asset('frontend')}}/assets/img/bg/bg.jpg">
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