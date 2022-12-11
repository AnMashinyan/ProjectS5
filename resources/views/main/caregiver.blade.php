<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/main/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">'
    <title>List</title>
</head>
<body>

<div class="headerTop">
    <div>
        <input type="text" placeholder="Search...">
    </div>
    <div>
        <a href="{{route('login.create')}}" class="login"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Log In</a>
        <a href="#">Choose Caregiver</a>
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
                        <a href="index_whatIsDementia.html">What is Dementia?</a>
                        <a href="index_signs.html">Signs of Dementia</a>
                        <a href="index_types.html">Types of Dementia</a>
                    </div>
                </div>
            </li>

            <li><a href="{{route('about')}}">About Us</a></li>

        </ul>
    </div>
</div>
<div class="chooseCaregiver">
    <h1>Choose your Caregiver</h1>
    <p>After choosing your Caregiver,he/she will open your page and you will start woriking together.</p>
</div>

<div class="row">
    <div class="card">
        <img src="{{asset('assets/main/img/car1.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>
    <div class="card">
        <img src="{{asset('assets/main/img/car2.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>

    <div class="card">
        <img src="{{asset('assets/main/img/car3.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>
</div>
<div class="row2">
    <div class="card">
        <img src="{{asset('assets/main/img/car4.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>

            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>

    <div class="card">
        <img src="{{asset('assets/main/img/car5.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>

    <div class="card">
        <img src="{{asset('assets/main/img/car6.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>
</div>


<div class="row3">
    <div class="card">
        <img src="{{asset('assets/main/img/car7.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>

    <div class="card">
        <img src="{{asset('assets/main/img/car8.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
    </div>

    <div class="card">
        <img src="{{asset('assets/main/img/car9.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_list">
            <h4>John Doe</h4>
            <div class="first">
                <p>100% Job Success</p>
                <div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="second">
                <p>
                    Throughout the years of my experience I have managed to hone skills that are very close to my personality and that I consider essential to quality customer service, such as patience, clarity, positive attitude, time management, empathy, calmness, reliable.
                </p>
            </div>
            <div class="third">
                <p>I have 1 free place,you can select me by clicking this button</p>
                <i class="fa fa-check-square" aria-hidden="true"></i>
            </div>

        </div>
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

</div>
</div>


</body>
</html>
