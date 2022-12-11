<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/main/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Types of Dementia</title>
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
        <h1>Types of dementia</h1>
        <div class="headerImg">
            <p>
                Around 19 out of 20 people with dementia have one of four main types. Dementia affects everyone 	differently, however each type has some common early symptoms.
                A person may also have mixed dementia where they have symptoms of more than one type.
            </p>
            <img src="{{asset('assets/main/img/index2.jpg')}}">
        </div>
    </div>
    <div class="type">
        <h2>Alzheimer’s disease</h2>
        <p>Alzheimer’s disease is the most common type of dementia. For most people, the first signs of Alzheimer’s are problems with their memory, thinking, language or perception.</p>
        <h2>Vascular dementia</h2>
        <p>Vascular dementia is the second most common type of dementia. Common early signs of vascular dementia include problems with planning or organising, making decisions or solving problems.</p>
        <h2>Dementia with Lewy bodies (DLB)</h2>
        <p>Dementia with Lewy bodies (DLB) is caused by Lewy body disease. Symptoms of DLB include having difficulties staying focused, experiencing delusions, and problems with movement and sleep. </p>
        <h2>Frontotemporal dementia (FTD)</h2>
        <p>Frontotemporal dementia (FTD) is one of the less common types of dementia. It is sometimes called Pick's disease or frontal lobe dementia.</p>
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
