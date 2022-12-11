<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/main/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>What is Dementia?</title>
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
        <h1>What is dementia? Symptoms, causes and treatments</h1>
        <p>The word 'dementia' describes a set of symptoms that over time can affect memory, problem-solving, language and behaviour. Alzheimer's disease is the most common type of dementia.</p>
    </div>
    <div class="aboutDementia">
        <h1>About dementia</h1>
        <p>Dementia is a group of symptoms. It’s caused by different diseases that damage the brain. The symptoms get worse over time and include:</p>
        <ul>
            <li>memory loss</li>
            <li>confusion and needing help with daily tasks</li>
            <li>problems with language and understanding </li>
            <li>changes in behaviour.</li>
        </ul>
        <p>Dementia is progressive, which means symptoms may be relatively mild at first, but they get worse over time. There are many types of dementia but Alzheimer’s disease is the most common. The next most common is vascular dementia. </p>
    </div>
    <div class="cause">
        <h1>What causes dementia?</h1>
        <p>Dementia is not a natural part of aging. It is caused when a disease damages nerve cells in the brain.
            Nerve cells carry messages between different parts of the brain, and to other parts of the body. As more nerve cells are damaged, the brain becomes less able to work properly.
            Dementia can be caused by many different diseases. These diseases affect the brain in different ways, resulting in different types of dementia.
        </p>
    </div>
    <div class="care">
        <h1>Dementia treatment and care</h1>
        <p>Treatment of dementia depends on its cause. In the case of most progressive dementias, including Alzheimer's disease, there is no cure, but one treatment — aducanumab (Aduhelm™) — is the first therapy to demonstrate that removing amyloid, one of the hallmarks of Alzheimer’s disease, from the brain is reasonably likely to reduce cognitive and functional decline in people living with early Alzheimer’s. Others can temporarily slow the worsening of dementia symptoms and improve quality of life for those living with Alzheimer's and their caregivers. The same medications used to treat Alzheimer's are among the drugs sometimes prescribed to help with symptoms of other types of dementias. Non-drug therapies can also alleviate some symptoms of dementia.
            Ultimately, the path to effective new treatments for dementia is through increased research funding and increased participation in clinical studies. Right now, volunteers are urgently needed to participate in clinical studies and trials about Alzheimer's and other dementias.</p>
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
</html>
