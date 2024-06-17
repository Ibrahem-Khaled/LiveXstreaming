<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TVTimes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            font-family: "Cairo", sans-serif;
            background-color: rgba(8, 8, 8, 0.89);
            color: white;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .navbar .logo img {
            width: 50px;
        }

        .navbar .btn {
            cursor: pointer;
            text-align: center;
            flex: 1;
            margin: 10px;
            max-width: 200px;
            align-self: center;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url(https://assets.nflxext.com/ffe/siteui/vlv3/a1dc92ca-091d-4ca9-a05b-8cd44bbfce6a/f9368347-e982-4856-a5a4-396796381f28/RS-en-20191230-popsignuptwoweeks-perspective_alpha_website_large.jpg);
            background-size: cover;
            background-position: center;
            min-height: 600px;
        }

        .main .area h1 {
            font-size: 60px;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .main .area h3 {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .carousel {
            width: 80%;
            margin: 20px auto;
        }

        .carousel img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .container1 {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }

        .category {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .box1 {
            background-color: #333;
            border-radius: 15px;
            margin: 10px;
            padding: 20px;
            width: 200px;
            text-align: center;
        }

        .box1 img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .about {
            background-color: #222;
            padding: 40px;
            margin: 20px auto;
            width: 80%;
            text-align: right;
            border-radius: 15px;
        }

        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: rgba(0, 0, 0, 0.9);
            color: white;
            overflow-x: hidden;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 36px;
            cursor: pointer;
        }

        .sidebar h2 {
            margin: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 20px;
            border-bottom: 1px solid #333;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
        }

        .sidebar ul li img {
            width: 20px;
            height: 20px;
            margin-left: 10px;
        }
        p{
            text-align: center;
            margin: 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TVTimes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <div class="btn btn-danger">حمل تطبيق الاندرويد من هنا</div>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-danger" href="{{ route('contact-us') }}">للشكاوي والمقترحات</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-danger" href="{{ route('login') }}">
                        @guest
                            تسجيل الدخول
                        @else
                            {{ Auth::user()->name }}
                        @endguest
                    </a>
                </li>

                <li class="nav-item">
                    <button id="sidebarToggle" class="btn btn-danger">الفئات</button>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">البحث</button>
            </form>
        </div>
    </nav>

    <div class="sidebar" id="sidebar">
        <span class="close-btn" id="closeSidebar">&times;</span>
        <h2>الفئات</h2>
        <ul>
            @foreach ($categories as $item)
                <li>
                    <a href="#">{{ $item->name }}</a>
                    <img src="{{ $item->image }}" alt="{{ $item->name }}" />
                </li>
            @endforeach
        </ul>
    </div>

    <div class="main">
        <div class="area">
            <h1>أفلام وتلفزيون بلا حدود <br>العروض، وأكثر من ذلك.</h1>
            <h3>شاهد في أي مكان، ويمكنك الإلغاء في أي وقت.</h3>
        </div>
    </div>

    <!-- Slideshow -->
    <div class="carousel">
        @foreach ($sliders as $slider)
            <div><img src="{{ $slider->image }}" alt="Slide"></div>
        @endforeach
    </div>

    <div class="container1">
        <div class="text">
            <h1>احدث الافلام والمسلسلات</h1>
        </div>
        <div class="category">
            @foreach ($channels as $channel)
                <div class="box1">
                    <img src="{{ $channel->image }}" alt="{{ $channel->name }}">
                    <div class="text">
                        <h4>{{ $channel->name }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- About Us Section -->
    <div class="about">
        <h2 class="text-center" style="color: red">من نحن</h2>
        <p>
            مرحبًا بكم في TVTimes، وجهتكم الأولى لمتابعة أحدث الأفلام والمسلسلات التلفزيونية. نسعى جاهدين لتقديم أفضل
            تجربة مشاهدة ممكنة، حيث يمكنك العثور على مجموعة واسعة من المحتويات الترفيهية التي تناسب جميع الأذواق.
        </p>
        <p>
            تأسس موقع TVTimes بهدف توفير وصول سهل وسريع إلى الأفلام والمسلسلات المفضلة لديكم، مع إمكانية المشاهدة في أي
            وقت ومن أي مكان. نحن نعمل باستمرار على تحسين خدماتنا لتلبية توقعاتكم وضمان رضاكم.
        </p>
        <p>
            شكراً لاختياركم TVTimes. نتمنى لكم مشاهدة ممتعة!
        </p>
    </div>

    <div class="footer">
        <h2>TVTimes</h2>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            $('#sidebarToggle').click(function() {
                $('#sidebar').toggleClass('show');
            });

            $('#closeSidebar').click(function() {
                $('#sidebar').removeClass('show');
            });
        });
    </script>
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HUiIbX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
