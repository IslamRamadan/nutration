
@extends('layouts.front')
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area " style="overflow:auto">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img style="height:90%;width:90%" src="{{asset('front/img/banner/edu_ilastration.png')  }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>تعليم اونلاين <br>
                                بث مباشر <br>
                                ودروس مسجلة واختبارات</h3>
                            <a href="{{ route('all.owners') }}" class="boxed_btn">ابدء الدراسة</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area" id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>Subborah (سبورة) <br>
                          رائدة مجال ادارة التعلم</h3>
                        <p>نحن شركة رائدة في مجال التعلم والتعليم عن بعد نساعدك علي صنع منصتك الخاصة اذا كنت مركز او معهد تعلمي او كورسات او كنت محاضر او معلم واذا كنت طالب او متعلم ستحصل علي افضل الكورسات والمحاضرات</p>
                        <a href="{{ url('/#con') }}" class="boxed_btn">انضم الينا</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>طالب</span>
                                    <p>  او متعلم</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>معلم</span>
                                    <p> او محاضر</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>مركز تعليمي</span>
                                    <p> او كورسات</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses" style="background: #8B47E5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3 style="color: #fff">الافضل لدينا</h3>
                        <p style="color: #fff">يمكنك البدء بالتعلم الان مع افضل المراكز التعليمية والكورسات <br>ومع افضل المحاضرين والمعلمين يعملون خصيصا من اجلك.</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row" >
                                @foreach ($records as $one)


                                    <div class="col-lg-4 col-md-4  ">


                                            <div class="courses_info text-center" style="padding:40px;background: rgb(28, 27, 85);color:#fff;margin-bottom: 10px">
                                                <div>{{$one->country}}</div>
                                                <br>
                                                <h3><a href="{{ route('home.category',[$one->id,$one->name]) }}" style="color: #fff">{{ $one->name }}</a></h3>
                                                <br>
                                                @if ($one->start ==1)
                                                <a href="{{ route('home.category',[$one->id,$one->name]) }}"><button style="font-size: 18px;font-weight: bold" class="btn btn-primary" type="button" > دخــول</button> </a>

                                                @endif
                                                @if ($one->start ==0)
                                                <a href="{{ route('home.category.form',[$one->id]) }}"><button style="font-size: 18px;font-weight: bold" class="btn btn-primary" type="button" > تسجيل</button> </a>

                                                @endif

                                            </div>
                                        </div>


                                    @endforeach

                                </div>


                    </div>
                </div>

            </div>
            <div class="container" style="padding-top:30px">
                <a href="{{ route('all.owners') }}"> <button class="btn btn-danger btn-lg">  المزيد ... </button></a>


            </div>
        </div>




    </div>

      <!-- testimonial_area_start -->
      <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->


    <!-- our_courses_start -->
    <div class="our_courses" style="background: #FFF0F5	">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>ما يميزنا</h3>
                        <p>قدم مادتك العلمية عن بعد<br>
                          نساعدك علي الوصول للعالمية.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center" style="background: #fff	">
                        <div class="icon">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>دروس مسجلة واختبارات</h3>
                        <p>
                            اضف مادتك العلمية سواء فيديو او اي نوع من المستندات او العروض التقديمية
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center" style="background: #fff">
                        <div class="icon blue">
                            <i class="flaticon-art-and-design"></i>

                        </div>
                        <h3>حصص اونلاين</h3>
                        <p>
                           استمتع بكل الادوات اثناء محضرتك الاونلاين من مشاركة الشاشة او العروض التقديمية
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center"  style="background: #fff">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>تحكم وامان

                        </h3>
                        <p>
                           احصل علي منصتك الخاصة وتحكم بها  مع حماية وامان كامل للمنصة باحدث وسائل الامان البرمجية
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center"  style="background: #fff">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>خصوصية محتواك </h3>
                        <p>
                            تستطيع التحكم في المحتوي وتسجيل المحاضرات الاونلاين من عدمة فكل شئ بيدك
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter" id="con" style="background: #000">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6" >
                    <div class="newsletter_text">
                        <h3> لم تنضم الينا بعد  كمقدم كورسات او فصول افتراضية ؟ </h3>
                        <p>انضم الينا الان واحصل علي عرضك الخاص من خلال الاتصال او ارسال رسالة واتس اب علي الرقم</p>
                    </div>
                </div>
                 <!-- subscribe_newsletter_Start-->
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>احصل علي عرضك الخاص</h4>
                        <form class="newsletter_form">
                            <input required type="text" value="96550909048" disabled>
                            <button >هاتف و واتس اب</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
    <div class="our_latest_blog" style="background: #FFF0F5	">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>ماذا يمكننا ان نقدم</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4" 	 >
                    <div class="single_latest_blog" style="background: #fff	">
                        <div class="thumb">
                            <img src="{{asset('front/img/mo.png')  }}" alt="">
                        </div>
                        <div class="content_blog">

                            <div class="blog_meta" style="padding: 10px">
                                <h3><a href="#">مادة علمية بطريقة واضحة</a></h3>
                            </div>
                            <p class="blog_text">
                              التنظيم المتقن للمادة العلمية يساعد فعليا علي زيادة التحصيل.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog" style="background: #fff	">
                        <div class="thumb">
                            <img src="{{asset('front/img/mo2.png')  }}" alt="">
                        </div>
                        <div class="content_blog">

                            <div class="blog_meta" style="padding: 10px">
                                <h3><a href="#">تحكم مثالي لعرض المحتوي</a></h3>
                            </div>
                            <p class="blog_text">
                               باستخدام لوحة تحكم موقعنا يمكنك فعل كل شي تريد وبالطريقة التي تحددها.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog" style="background: #fff	">
                        <div class="thumb">
                            <img src="{{asset('front/img/mo3.png')  }}" alt="">
                        </div>
                        <div class="content_blog">

                            <div class="blog_meta" style="padding: 10px">
                                <h3><a href="#">سجل الان والتحق بالركب وكن احد عملاءنا</a></h3>
                            </div>
                            <p class="blog_text">
                              قم بالتسجيل بالموقع وتواصل معنا لنكون بوابتك الي الوصول للمزيد من المشتركين.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->

    @endsection
