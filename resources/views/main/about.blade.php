<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/main/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About us</title>
</head>
<body>
<div class="fix">
    <div class="headerTop">

        <div>
            <a href="{{route('login.create')}}" class="login"><i class="fa fa-user-circle-o" aria-hidden="true"></i>LogIn or Register</a>

        </div>
    </div>
    <div class="headerBottom">
        <div>
            <h2><a href="{{route('indexPage')}}">DEMENTIA</a></h2>
        </div>
        <div>
            <ul class="menu">
                <li><a href="{{route('indexPage')}}">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">About Dementia  <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                        <div class="dropdown-content">
                            <a href="{{route('whatIsDementia')}}">What is Dementia?</a>
                            <a href="{{route('signs')}}">Signs of Dementia</a>
                            <a href="{{route('types')}}">Types of Dementia</a>
                        </div>
                    </div>
                </li>

                <li><a href="{{route('about')}}">About Us</a></li>

            </ul>
        </div>
    </div>
</div>
</div>
<div class="text1">
    <div class="header1">
        <div class="about">
            <div>
                <h1>There is one reason why
                    we' re doing what we're doing!
                    A very personal one! </h1>
                <p>“Watching people we cared for succumb to memory loss left us with the belief that there must be something we can do to help the ones we love. Why weren’t there any tools to help care for those with Dementia and keep caregivers sane?”</p>
            </div>
            <div>
                <img src="{{asset('assets/main/img/about.jpg')}}">
            </div>
        </div>
    </div>
{{--    <div class="secondPart">--}}
{{--        <h1 >OUR CAREGIVERS</h1>--}}
{{--    </div>--}}
{{--    <div id="container1">--}}
{{--        <div id="slider-container">--}}
{{--            <span onclick="slideRight()" class="btn1"></span>--}}
{{--            <div id="slider">--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car1.jpg')}}"><h4>Anna-Maria <p>38 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car2.jpg')}}"><h4>Emma<p>27 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car9.jpg')}}"><h4>William <p>30 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car4.jpg')}}"><h4>Mia <p>26 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car7.jpg')}}"><h4>Lucas <p>38 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car3.jpg')}}"><h4>Ani <p>29 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car8.jpg')}}"><h4>Arthur <p>30 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car10.jpg')}}"><h4>Katrin <p>24Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car5.jpg')}}"><h4>Lucy <p>28 Years old</p></h4></div>--}}
{{--                <div class="slide"><img src="{{asset('assets/admin/img/car6.jpg')}}"><h4>David <p>35 Years old</p></h4></div>--}}
{{--            </div>--}}
{{--            <span onclick="slideLeft()" class="btn1"></span>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="header1">


        <h1>Creating a Cycle of Connection</h1>
        <p>Our site empowers people with memory loss and their teams to stay engaged and connected. The mobile app helps teams establish routines and rituals that have been shown to reduce troubling symptoms, enhance wellbeing and spark cognition.</p>

    </div>
    <div class="typesOfCaregivers">
        <div class="firstRow">
            <div class="firstColumn">
                <img src="{{asset('assets/main/img/patient.jpg')}}">
                <h3>Person with Dementia</h3>
                <p>Getting involved can help people with dementia direct and personalize their own care through curating memories, photos, music playlists, and preferences.</p>
            </div>
            <div class="secondColumn">
                <img src="{{asset('assets/main/img/family.jpg')}}">
                <h3>Primary Family Caregiver</h3>
                <p>The GC App helps the primary caregiver learn new skills, keep others involved, and better support professionals that help with respite care.</p>
            </div>
        </div>
        <div class="secondRow">
            <div class="firstColumn">
                <img src="{{asset('assets/main/img/caregiver.jpg')}}">
                <h3>Professional Caregivers</h3>
                <p>Professional caregivers are equipped with a tool for making connections, facilitating comforting experiences, and building trust.</p>
            </div>
            <div class="secondColumn">
                <img src="{{asset('assets/main/img/friend.jpg')}}">
                <h3>Family & Friends</h3>
                <p>Near or far, families can be involved in their loved one’s life by staying connected and contributing their unique insights and memories via the GC App.</p>
            </div>
        </div>
    </div>

    <div class="opinion">

        <!-- <img src="img/patient.jpg"> -->
        <div class="title">
            <div class="image1">
                <img src="{{asset('assets/main/img/patient.jpg')}}">
            </div>
            <h3>Connie Shultz</h3>
            <h6>Professional Caregiver | Visiting Angels York, PA </h6>
            <i>"I have been with my client for years, and his family is so supportive. They’re actively involved and helped support me every step of the way. And even though his memory has declined over the years, we use the GC app to stay active and connected through his love of family and country music. We have developed a truly special bond and it is an honor to care for him."</i>
        </div>


    </div>
</div>

<div class="footer">
    <div class="footer1">
        <p class="firstFooter">STAY CONNECTED</p>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div class="footer2" id="3">
        <p class="firstFooter">BE OUR FRIEND</p>
        <form>
            <input type="text" placeholder="Enter your email here*"><br>
            <button>Subscribe Now</button>
        </form>

    </div>
    <div class="footer3" id="2">
        <p class="firstFooter">NEED ASSISTANCE?</p>
        <p><a href="tel:123-456-7890">123-456-7890</a></p>
        <p><a href="mailto:info@mysite.com">info@mysite.com</a></p>
    </div>

</div>

</body>
<script src="../js/js.js"></script>
</html>
