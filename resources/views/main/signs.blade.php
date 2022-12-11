<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/main/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Signs of Dementia</title>
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
<div class="text1">
    <div class="header1">
        <h1>Signs of Dementia</h1>
        <p>Signs and symptoms of dementia result when once-healthy neurons, or nerve cells, in the brain stop working, lose connections with other brain cells, and die. While everyone loses some neurons as they age, people with dementia experience far greater loss.</p>
        <p>The symptoms of dementia can vary and may include:</p>
    </div>
    <div class="sign">

        <ul>

            <li>Difficulty speaking, understanding and expressing thoughts, or reading and writing</li>
            <li>Wandering and getting lost in a familiar neighborhood</li>
            <li>Trouble handling money responsibly and paying bills</li>
            <li>Repeating questions</li>
            <li>Using unusual words to refer to familiar objects</li>
            <li>Taking longer to complete normal daily tasks</li>
            <li>Losing interest in normal daily activities or events</li>
            <li>Hallucinating or experiencing delusions or paranoia</li>
            <li>Acting impulsively</li>
            <li>Not caring about other people’s feelings</li>
            <li>Losing balance and problems with movement</li>
        </ul>
        <img src="{{asset('assets/main/img/index1.jpeg')}}">
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
</body>
</html>
