<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/main/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Flex site</title>
</head>
<body>

<div class="fix">


    <div class="headerTop">
         <div>
             <a href="{{route('login.create')}}" class="login"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Login or Register</a>
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
<div class="fon">
    <div class="center">
        <h1>Together We Can</h1>
        <a href="{{route('register.create')}}"><button>Register for your walk</button></a>
    </div>
</div>
<div class="fonBottom">

</div>
<div class="centerText">
    <h3>What Is Dementia?</h3>
    <p>____</p>
    <h3>Dementia is the loss of cognitive functioning</h3>
</div>
<div class="images">
    <div class="image">
        <div class="img">
            <img src="{{asset('assets/main/img/index1.jpeg')}}" width="300px" height="370px">;
        </div>
        <button>
            <a href="#" class="a1">SIGNS OF DEMENTIA</a>
            <a href="{{route('signs')}}" class="a2">View Details</a>
        </button>
    </div>
    <div class="image">
        <div class="img2">
            <img src="{{asset('assets/main/img/index3.webp')}}" width="300psx" height="300px">
            <div class="sale">
                <h3>Our Caregivers will help you</h3>
            </div>
        </div>
    </div>
    <div class="image">
        <div class="img">
            <img src="{{asset('assets/main/img/index2.jpg')}}" width="320px" height="300px">
        </div>
        <button>
            <a href="#" class="a1">TYPES OF DEMENTIA</a>
            <a href="{{route('types')}}" class="a2">View Details</a>
        </button>
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

    </div>
    <div class="footer3" id="2">
        <p class="firstFooter">NEED ASSISTANCE?</p>
        <p><a href="tel:123-456-7890">123-456-7890</a></p>
        <p><a href="mailto:info@mysite.com">info@mysite.com</a></p>
    </div>

</div>



</div>
</body>
</html>
