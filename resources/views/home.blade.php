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

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            font-family: "Roboto", sans-serif;
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
            width: 150px;
        }

        .navbar .buttons {
            background-color: #e50914;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            flex: 1;
            margin: 0 5px;
            max-width: 200px;
            /* تحديد عرض أقصى لتجنب العرض الزائد */
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
    </style>
</head>

<body>

    <div class="navbar">
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/128/1023/1023521.png" alt="TVTimes Logo">
        </div>
        <div class="buttons" id="sidebarToggle">الفئات</div>
        <div class="buttons">حمل تطبيق الاندرويد من هنا</div>
    </div>

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
</body>

</html>
