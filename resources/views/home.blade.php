<!DOCTYPE html>
<html lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Document title -->
    <title>شركة التجربة البصرية لتقنية المعلومات</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="/">
                            <span class="logo-default">
                                <img src="{{ asset('assets/images/'.$settings->logo) }}" />
                            </span>
                            <span class="logo-dark">
                                <img src="{{ asset('assets/logo.png') }}" />
                            </span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="#about">من نحن</a></li>
                                    <li><a href="#values">القيم</a></li>
                                    <li><a href="#services">الخدمات والأنشطة</a></li>
                                    <li><a href="#contact">تواصل معنا</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-halfscreen dots-creative" data-height-xs="360">
            <!-- Slide 1 -->
            <div class="slide background-image" style="background-image: url({{ asset('assets/images/hero.jpg') }})">
                <div class="container">
                    <div class="slide-captions text-center">
                        <!-- Captions -->
                        <h2 class="text-lg m-b-0 text-dark">
                            {{ $settings->welcome_msg }}
                        </h2>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
        </div>
        <!--end: Inspiro Slider -->

        <!-- About -->
        <section class="p-b-0" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/'.$settings->about_us_image) }}" class="w-100 h-100" style="border-radius: 10px" />
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section mt-5">
                            <h1 style="font-size: 40px">من نحن</h1>
                            <p>{{ $settings->about_us }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <section id="values" class="box-fancy section-fullwidth text-light mt-5" style="background-image:url({{ asset('assets/images/2.jpg') }});background-repeat: no-repeat;background-size: cover;">
            <div class="row">
                <div class="col-lg-3 text-center animate__animated animate__animate__fadeInUp visible" data-animate="animate__fadeInUp" data-animate-delay="200">
                    <h1 class="text-lg text-uppercase">01.</h1>
                    <h3>رؤيتنا</h3>
                    <span>
                        أن نكون شركة رائدة في توفير حلول مبتكرة
                        وفعالة لعم ائنا وكسب ثقتهم بتقديم ل
                        الأفضل لما يناسب عملهم لتصبح دائماً الخيار
                        الأول لهم.
                    </span>
                </div>

                <div class="col-lg-3 text-center animate__animated animate__animate__fadeInUp visible" data-animate="animate__fadeInUp" data-animate-delay="400">
                    <h1 class="text-lg text-uppercase">02.</h1>
                    <h3>رسالتنا</h3>
                    <span>
                        إن التطور السريع فى مجال تقنية المعلومات
يحتاج إلى عمل مستمر وشاق، لذلك نسعى
دائماً إلى بذل قصارى جهدنا للتميز من خال
النمو المستدام مدفوعاً بالابتكار .
                    </span>
                </div>

                <div class="col-lg-3 text-center animate__animated animate__animate__fadeInUp visible" data-animate="animate__fadeInUp" data-animate-delay="600">
                    <h1 class="text-lg text-uppercase">03.</h1>
                    <h3>الجودة والإتقان</h3>
                    <span>
                        نسعى لتحقيق الجودة في أعمالنا وإتقانها
لتكون وفق أرقى المواصفات العالمية.
                    </span>
                </div>

                <div class="col-lg-3 text-center animate__animated animate__animate__fadeInUp visible" data-animate="animate__fadeInUp" data-animate-delay="800">
                    <h1 class="text-lg text-uppercase">04.</h1>
                    <h2>القيم</h2>
                    <span>
                        الجودة العالية -
                        الأسعار المنافسة -
                        الدعم الفني المتواصل -
                        الالتزام بالوقت -
                        خبرة فريق العمل -
                        الاستمرارية
                    </span>
                </div>

                <div class="col-lg-3 text-center animate__animated animate__animate__fadeInUp visible" data-animate="animate__fadeInUp" data-animate-delay="600">
                    <h1 class="text-lg text-uppercase">05.</h1>
                    <h3>فريق عملنا سعودي 100 %</h3>
                    <span>
                        يتنوع العمل داخل شركة التجربة البصرية لتقنية المعلومات ليناسب
                        نوعية الخدمات والمنتجات التي تقدمها، بنظام محوسب ومجدول ضمن
                        آلية لتقسيم الخدمة والمنتج الى عدة أقسام وبوقت محدد ومتابعة
                        مستمرة بواسطة طاقم عمل مهيئ بأعلى درجات الكفاءة وذلك يضمن
                        تقديم الخدمة والمنتج الى العميل بأفضل وأسرع الطرق .
                    </span>
                </div>

            </div>
        </section>

        <!-- SERVICES -->
        <section id="services" style="padding-top: 20px">
            <div class="container">
                <div class="row">
                    <div class="heading-text heading-section mt-5">
                        <h2 style="font-size: 40px">الخدمات والأنشطة</h2>
                    </div>

                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/5.png" class="w-100" /></a>
                            </div>
                            <h3>الواقع المعزز AR</h3>
                            <p>
                                عبارة عن تطبيق يتم تركيبه على الأجهزة الذكية (ايفون - اندرويد
                                - جهاز لوحي) يعمل على تحويل المحتوى (بروشور - بروفايل - رول -
                                كتب – وغيرها الكثير) إلى محتوى تفاعلي تشويقي وهو في مجملة
                                عرضًا مركبًا يمزج بين المشهد الحقيقي الذي ينظر إليه المستخدم
                                والمشهد الظاهري الذي تم انشاؤه بواسطة الحاسب الآلي ويتم
                                استخدامه لدى جميع القطاعات الحكومية والخاصة.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block">
                                    <img src="img/4.png" class="w-100" />
                                </a>
                            </div>
                            <h3>الواقع الافتراضي VR</h3>
                            <p>
                                عبارة عن بيئة حاسوبية ثلاثية الأبعاد مغلقة بالكامل يرى فيها
                                المستخدم أماكن افتراضية كأنها بالواقع و تحيط وتستجيب لأفعاله
                                بطريقة طبيعية، عادة ما يكون ذلك من خلال وسائل عرض تستخدم مثبته
                                برأس المستخدم كالنظارات والمجسمات، كما تستخدم قفازات لتتبع
                                حركة اليدين من خلال خاصية اللمس وتستخدم في كثير من المجالات
                                (
                                المجال الطبي في عملية إعادة تأهيل المرضى بتقنية VR بالإضافة
                                إلى ألعاب الفيديو والتدريب والتعليم) وغيرها الكثير.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/1.png" class="w-100" /></a>
                            </div>
                            <h3>المعارض الافتراضية بخاصية 360 درجة</h3>
                            <p>
                                هي معارض يتم فيها تصوير المواقع بكاميرا بزاوية متعددة 360
                                واضافة محتوى تفاعلي لها، ويكون على شكل غرف أو مواقع يتم التنقل
                                بينها، ولا يحتاج الي تطبيق ويمكن الوصول من خلال رابط فقط ويمكن
                                عمل اجتماع فديو مباشر مع العملاء داخل المعرض.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/3d.png" class="w-100" /></a>
                            </div>
                            <h3>مجسمات 3D</h3>
                            <p>
                                تصوير المعالم بطائرة تصوير ( Drone ) ثم دمجها في برنامج خاص
                                بنا ليتم تحويلها الى أشكال ثلاثية الأبعاد يتم استخدامها في
                                الواقع المعزز والواقع الافتراضي.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/3d.png" class="w-100" /></a>
                            </div>
                            <h3>شاشات 3D</h3>
                            <p>
                                عباره عن شاشات فيها محتوى مجسم في غرفة ثلاثية الأبعاد يتم عرض
                                داخلها محتوي متحرك يجذب الأنظار ويعزز المعارف بمعالم متنوعة
                                وتستخدم في شاشات المباني الضخمة .
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/2.png" class="w-100" /></a>
                            </div>
                            <h3>شاشات 7D</h3>
                            <p>
                                تقدم لك بعد آخر عميق بحيث ترى الأحداث كالواقع ويتم دمج مؤثرات
                                وصور وفيديو ومجسمات متحركة فيها لتضيف على التجربة أعلى درجات
                                الواقعية والانسجام .
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#">
                                    <img src="img/19.png" class="w-100" />
                                </a>
                            </div>
                            <h3>الهولوجرام</h3>
                            <p>
                                القدرة على مشاهدة المجسمات دون الحاجة لحمل جهاز و تطبيق .
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/2.png" class="w-100" /></a>
                            </div>
                            <h3>شاشات اللمس</h3>
                            <p>شاشات رقمية حديثة بنظام اللمس متعددة الاستخدامات .</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/13.png" class="w-100" /></a>
                            </div>
                            <h3>الصوت الموجه</h3>
                            <p>
                                عباره عن مؤثرات صوتيه يتم توجيهها مباشرة إلى المشاهد دون
                                الحاجة لتركيب سماعات خارجية او مركبة على الرأس
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/20.png" class="w-100" /></a>
                            </div>
                            <h3>الملاحة الداخلية</h3>
                            <p>
                                هو تطبيق واقع معزز للإرشاد، يعرض مجسم توضيحي للمواقع داخل
                                المباني الضخمة أو الأسواق، دون الحاجة الى أنظمة الـ GPS .
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/16.png" class="w-100" /></a>
                            </div>
                            <h3>الروبوت</h3>
                            <p>
                                آلة تعمل من خلال استشعار محيطها لتتمكن من الوصول الى اجراءات،
                                واتخاذ قرارات ينفذها في العالم الحقيقي يتم استخدامه في الوظائف
                                عن بعد .
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/18.png" class="w-100" /></a>
                            </div>
                            <h3>بروجكتر مابيينق</h3>
                            <p>تصميم وتشغيل مشاريع بروجكتر مابيينق على المباني الضخمة.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/2.png" class="w-100" /></a>
                            </div>
                            <h3>الطاولة التفاعلية</h3>
                            <p>تصميم برامج وتطبيقات للطاولات التفاعلية بمختلف متطلباتها.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect square medium color">
                            <div class="icon">
                                <a href="#" class="d-block"><img src="img/17.png" class="w-100" /></a>
                            </div>
                            <h3>انترنت الأشياء</h3>
                            <p>
                                تصميم وبرمجة انترنت الأشياء وتركيب المستشعرات وأنظمة التحكم.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SERVICES -->

        <!-- CALL TO ACTION -->
        <section class="background-grey text-center" id="contact">
            <div class="container">
                <h4 class="mb-4">
                    يسعدنا تواصلكم معنا للإجابة عن استفساراتكم ومتابعة طلباتكم عبر نموذج التواصل داخل
                    الموقع أو على أرقامنا
                </h4>
                <form action="">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label>الاسم الكامل</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label>البريد الالكتروني</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label>رقم الهاتف</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label>الموضوع</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-12">
                            <label>الرسالة</label>
                            <textarea class="form-control" name="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group col-12 text-center">
                            <input type="submit" value="إرسال" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12">
                        <h3>تواصل معنا عبر</h3>
                    </div>
                    <div class="col-12">
                        <h5 style="direction: ltr;font-size: 18px;" class="my-4"><i class="fa fa-phone"></i> 011 20 44 955</h5>
                        @if($settings->phone)
                            <h5 style="direction: ltr;font-size: 18px;" class="my-4">
                                <a style="color:#1e2022;" href="tel:{{ $settings->phone }}"><i class="fa fa-phone"></i> {{ $settings->phone }}</a>
                            </h5>
                            @endif
                        @if($settings->email)
                            <h5 style="direction: ltr;font-size: 18px;" class="my-4"><i class="fa fa-envelope"></i> {{ $settings->email }}</h5>
                            @endif
                        @if($settings->facebook)
                            <h5 class="my-4 custom-social-link">
                                <a href="{{ $settings->facebook }}"><i class="fab fa-facebook"></i></a>
                            </h5>
                            @endif
                        @if($settings->twitter)
                            <h5 class="my-4 custom-social-link">
                                <a href="{{ $settings->twitter }}"><i class="fab fa-twitter"></i></a>
                            </h5>
                            @endif
                        @if($settings->instagram)
                            <h5 class="my-4 custom-social-link">
                                <a href="{{ $settings->instagram }}"><i class="fab fa-instagram"></i></a>
                            </h5>
                            @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- CALL TO ACTION -->

        <!-- Footer -->
        <footer id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">
                        © 2021 - جميع الحقوق محفوظة.
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!--Template functions-->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
