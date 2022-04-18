<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Կառավարում</title>
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo_misc.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">
    <script src="{{asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
</head>
<body>
<div class="bg-overlay"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div id="menu-container">
                <div id="menu-1" class="about content" style="display: block;">
                    <div class="row">
                        <ul class="tabs">
                            @if(Auth::user()->advice === 1)
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <p>Մանկավարժական խորհուրդ</p>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->advice === 2)
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <p>Կառավարման խորհուրդ</p>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->advice === 3)
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <p>Ծնողական խորհուրդ</p>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->advice === 4)
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <p>Աշակերտական խորհուրդ</p>
                                    </a>
                                </li>
                            @endif
                            <li class="col-md-4 col-sm-4">
                                <a href="#tab5" class="icon-item">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <p>Մեթոդմիավորում</p>
                                </a>
                            </li>
                            <li class="col-md-4 col-sm-4">
                                <a href="#tab6" class="icon-item">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <p>Դասղեկներ</p>
                                </a>
                            </li>
                        </ul>
                        <div class="col-md-12 col-sm-12">
                            @if(Auth::user()->advice === 1)
                                <div class="toggle-content text-center" id="tab1">
                                    <div style="width: 100%;">
                                        <h3>Մանկավարժական խորհուրդ</h3>
                                    </div>
                                    @foreach($decision as $deci)
                                        <div class="tabItem">
                                            <img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                                            <a href="{{url('decisions/pdfexport/' . $deci->id)}}"
                                               target="_blank">{{$deci->created_at->format('d m Y')}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if(Auth::user()->advice === 2)
                                <div class="toggle-content text-center" id="tab2">
                                    <div style="width: 100%;">
                                        <h3>Կառավարման խորհուրդ</h3>
                                    </div>
                                    @foreach($decision as $deci)
                                        <div class="tabItem">
                                            <img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                                            <a href="{{url('decisions/pdfexport/' . $deci->id)}}"
                                               target="_blank">{{$deci->created_at->format('d m Y')}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if(Auth::user()->advice === 3)
                                <div class="toggle-content text-center" id="tab3">
                                    <div style="width: 100%;">
                                        <h3>Ծնողական խորհուրդ</h3>
                                    </div>
                                    @foreach($decision as $deci)
                                        <div class="tabItem">
                                            <img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                                            <a href="{{url('decisions/pdfexport/' . $deci->id)}}"
                                               target="_blank">{{$deci->created_at->format('d m Y')}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if(Auth::user()->advice === 4)
                                <div class="toggle-content text-center" id="tab4">
                                    <div style="width: 100%;">
                                        <h3>Աշակերտական խորհուրդ</h3>
                                    </div>
                                    @foreach($decision as $deci)
                                        <div class="tabItem">
                                            <img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                                            <a href="{{url('decisions/pdfexport/' . $deci->id)}}"
                                               target="_blank">{{$deci->created_at->format('d m Y')}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="toggle-content text-center" id="tab5">
                                <div style="width: 100%;">
                                    <h3>Մեթոդմիավորում</h3>
                                </div>
                                @foreach($decision_5 as $deci_5)
                                    <div class="tabItem">
                                        <img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                                        <a href="{{url('decisions/pdfexport/' . $deci_5->id)}}"
                                           target="_blank">{{$deci_5->created_at->format('d m Y')}}</a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="toggle-content text-center" id="tab6">
                                <div style="width: 100%;">
                                    <h3>Դասղեկներ</h3>
                                </div>
                                @foreach($decision_6 as $deci_6)
                                    <div class="tabItem">
                                        <img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                                        <a href="{{url('decisions/pdfexport/' . $deci_6->id)}}"
                                           target="_blank">{{$deci_6->created_at->format('d m Y')}}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--                         <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="member-item">
                                                        <div class="thumb">
                                                            <img src="images/team/member-1.jpg" alt="տ">
                                                        </div>
                                                        <h4>տ</h4>
                                                        <span>տ</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="member-item">
                                                        <div class="thumb">
                                                            <img src="images/team/member-2.jpg" alt="տ">
                                                        </div>
                                                        <h4>տ</h4>
                                                        <span>տ</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="member-item">
                                                        <div class="thumb">
                                                            <img src="images/team/member-3.jpg" alt="տ">
                                                        </div>
                                                        <h4>տ</h4>
                                                        <span>տ</span>
                                                    </div>
                                                </div>
                                            </div> -->
                </div>

                {{--<div id="menu-2" class="services content">
                    <div class="row">
                        <ul class="tabs">
                            <li class="col-md-4 col-sm-4">
                                <a href="#tab44" class="icon-item">
                                    <i class="fa fa-cogs"></i>
                                </a>
                            </li>
                            <li class="col-md-4 col-sm-4">
                                <a href="#tab55" class="icon-item">
                                    <i class="fa fa-leaf"></i>
                                </a>
                            </li>
                            <li class="col-md-4 col-sm-4">
                                <a href="#tab66" class="icon-item">
                                    <i class="fa fa-users"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="col-md-12 col-sm-12">
                            <div class="toggle-content text-center" id="tab44">
                                <h3>text</h3>
                                <p>text</p>
                            </div>

                            <div class="toggle-content text-center" id="tab55">
                                <h3>text</h3>
                                <p>text</p>
                            </div>

                            <div class="toggle-content text-center" id="tab66">
                                <h3>text</h3>
                                <p>text</p>
                            </div>
                        </div>
                    </div>
                </div>--}}

                {{--<div id="menu-3" class="gallery content">
                    <div class="row">

                        <div class="col-md-4 col-ms-6">
                            <div class="g-item">
                                <img src="{{asset('assets/images/gallery/g1.jpg')}}" alt="">
                                <a data-rel="lightbox" class="overlay" href="images/gallery/g1.jpg">
                                    <span>+</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-6">
                            <div class="g-item">
                                <img src="{{asset('assets/images/gallery/g2.jpg')}}" alt="">
                                <a data-rel="lightbox" class="overlay" href="images/gallery/g2.jpg">
                                    <span>+</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-6">
                            <div class="g-item">
                                <img src="{{asset('assets/images/gallery/g3.jpg')}}" alt="">
                                <a data-rel="lightbox" class="overlay" href="images/gallery/g3.jpg">
                                    <span>+</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>--}}

                <div id="menu-4" class="contact content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="toggle-content2 text-center spacing">
                                <h3>Հետադարձ կապ</h3>
                                <p>Մ. Իշխանի անվան հ. 5 հիմնական դպրոց
                                    <br><br>
                                    <strong>Հասցե: </strong><a
                                        href="https://maps.google.com?q=Մուշեղ Իշխանի անվան թիվ 5 հիմնական դպրոց"
                                        target="_blank">ք. Երևան Փ. Բուզանդի 107</a>
                                    <br>
                                    <strong>Հեռախոս: </strong> <a href="tel:010538332">010-53-83-32</a> | <a
                                        href="tel:010533661">010-53-36-61</a>
                                    <br>
                                    <strong>Էլ․ փոստ: </strong> <a href="mailto:mishkhan5@mail.ru">mishkhan5@mail.ru</a>
                                    | <a href="mailto:mishkhan5@mail.ru">mishkhan5@yahoo.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- <div style="width: 100%"><iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=yerevan+(yerevan)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div> -->
                            <!-- <div class="google-map">
                            </div> --> <!-- /.google-map -->
                        </div>
                        <div class="col-md-12">
                            <div class="contact-form">
                                <div class="row">
                                    <!--                                     	<form action="#" method="post">
                                                                                <fieldset class="col-md-4">
                                                                                    <input id="name" type="text" name="name" placeholder="Name">
                                                                                </fieldset>
                                                                                <fieldset class="col-md-4">
                                                                                    <input type="email" name="email" id="email" placeholder="Email">
                                                                                </fieldset>
                                                                                <fieldset class="col-md-4">
                                                                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                                                                </fieldset>
                                                                                <fieldset class="col-md-12">
                                                                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                                                                </fieldset>
                                                                                <fieldset class="col-md-12">
                                                                                    <input type="submit" name="send" value="Send Message" id="submit" class="button">
                                                                                </fieldset>
                                                                            </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="sidebar-menu">
                <div class="logo-wrapper">
                    <h1 class="logo">
                        <!-- <a href="#"><img src="images/logo.png" alt=""> -->
                        <span>Կառավարում</span></a>
                    </h1>
                </div>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <!-- <li><a class="homebutton" href="#">Գլխավոր</a></li> -->
                        <li><a class="show-1" href="#">Խորհրդի մարմին</a></li>
                        <li>
                            <a href="http://yerevan5.schoolsite.am/wp-content/uploads/sites/1285/2021/09/%D5%86%D5%A5%D6%80%D6%84%D5%AB%D5%B6-%D5%A3%D5%B6%D5%A1%D5%B0%D5%A1%D5%BF%D5%B8%D6%82%D5%B4-2021%D5%A9..doc">Ներքին
                                գնահատում</a></li>
                        <!-- <li><a class="show-2" href="#">տ</a></li> -->
                        <!-- <li><a class="show-3" href="#">տ</a></li> -->
                        <li><a class="show-4" href="#" onclick="templatemo_map();">Հետադարձ կապ</a></li>
                        <li><a href="{{route('logout')}}">Ելք</a></li>
                    </ul>
                    <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    <div class="searchDiv">
                        <input type="text" name="search" class="searchInput"
                               placeholder="Փնտրել արձանագրություն համարով">
                        <div class="result">

                        </div>
                    </div>
                </div>
                <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 footer">
            <p id="footer-text">Copyright &copy; {{date('Y')}} <a href="#"></a></p>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
{{--<script src="{{asset('assets/js/vendor/jquery-1.10.1.min.js')}}"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery-1.10.1.min.js"><\/script>')}}') < /script>--}}
<script src="{{asset('assets/js/jquery.easing-1.3.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $.supersized({
            slide_interval: 10000, // Length between transitions
            transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 700, // Speed of transition
            slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: [ // Slideshow Images
                {
                    image: 'assets/images/templatemo-slide-3.jpg'
                }, {
                    image: 'assets/images/templatemo-slide-2.jpg'
                }
            ]
        });
    });
</script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('assets/js/vendor/jquery.gmap3.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".searchInput").on("input", function () {
            let search = $('.searchInput').val()
            $(".result").empty()
            $('.searchInput').css({
                "borderColor": "inherit"
            })
            if (search != "") {
                $.ajax({
                    type: 'get',
                    url: '{{ route('search') }}',
                    data: {search: search},
                    success: function (r) {
                        r = JSON.parse(r)
                        if (r.length) {
                            $(".result").fadeIn(250)
                            $('.searchInput').css({
                                "borderColor": "inherit"
                            })
                            r.forEach(function (element) {
                                const event = new Date(element.created_at);
                                let d = `${event.getDate()}/${event.getMonth() + 1}/${event.getFullYear()}`
                                $('.result').append(`
					<div class="resultDiv">
						<img src="{{asset('assets/images/pdf-file.png')}}" alt="">
                        <a href="decisions/pdfexport/${element['id']}" target="_blank">${d}</a>
					</div>
	        	`)
                            })
                        } else {
                            // $('.result').append(`<p>Արձանագրություն չի գտնվել</p>`)
                            $('.searchInput').css({
                                "borderColor": "red"
                            })
                        }
                    }
                })
            } else {
                $(".result").fadeOut(250)
            }
        })
    });
</script>
<script type="text/javascript">
    function templatemo_map() {
        $('.google-map').gmap3({
            marker: {
                address: '40.187239, 44.515216'
            },
            map: {
                options: {
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl: true
                }
            }
        });
    }
</script>
</body>
</html>
