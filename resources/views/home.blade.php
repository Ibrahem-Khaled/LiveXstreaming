<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TVTimes</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaquery.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/bc3a1796c2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon"
        href="https://image.flaticon.com/icons/png/512/870/870910.ico'/> 
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <style>
        @import url("https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap");
        @import url("https://fonts.googleapis.com/css?family=Martel+Sans&display=swap");
        @import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");

        body {
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
            display: flex;
            font-family: "Roboto", sans-serif;
            background-color: rgba(8, 8, 8, 0.89);
        }

        .navbar {
            display: flex;
            flex-direction: row;
            position: relative;
            align-items: center;
            width: 100%;
            height: 50px;
            min-height: 100px;
            align-items: center;
            justify-content: space-between;
            background-color: transparent;
            align-self: center;
        }

        .navbar li {
            margin: 0 50px;
            list-style-type: none;
            display: flex;
            flex-direction: row;
        }

        .navbar li:nth-child(2) {
            margin-top: -10px;
            margin-right: 70px;
        }

        .logo img {
            width: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-self: center;
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-self: center;
        }

        .buttons {
            background-color: #e50914;
            padding: 7px 17px;
            color: white;
            display: flex;
            flex-direction: row;
            border-radius: 3px;
        }

        .main {
            width: 100%;
            margin-top: -100px;
            background-size: cover;
            align-items: center;
            overflow-x: hidden;
            justify-content: center;
            display: flex;
            background-position: center;
            min-height: 710px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url(https://assets.nflxext.com/ffe/siteui/vlv3/a1dc92ca-091d-4ca9-a05b-8cd44bbfce6a/f9368347-e982-4856-a5a4-396796381f28/RS-en-20191230-popsignuptwoweeks-perspective_alpha_website_large.jpg);
        }

        .area {
            color: white;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 70px;
        }

        .area h1 {
            font-size: 60px;
            word-spacing: 15px;
            line-height: 75px;
        }

        .area h3 {
            margin-top: -30px;
            font-size: 27px;
            font-weight: normal;
        }

        .search {
            width: 150%;
            background-color: none;
            min-height: 80px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            text-align: left;
            margin-top: 10px;
        }

        .box {
            width: 100%;
            min-height: 65px;
        }

        .try {
            display: inline-flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #e50914;
            min-height: 70px;
            width: 70%;
            font-size: 30px;
            text-transform: uppercase;
        }

        .area h4 {
            margin-top: 10px;
            font-weight: normal;
        }

        .container1 {
            width: 100%;
            min-height: 460px;
            background-color: black;
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            text-align: center;
        }

        .container1 img {
            display: flex;
            justify-content: center;
            flex-direction: column;
            object-fit: contain;
            object-position: center;
            align-self: center;
            max-width: 100%;
            height: 350px;
        }

        .container1 .image {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            align-self: center;
            object-fit: contain;
        }

        .text {
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-self: center;
            align-content: center;
        }

        .text p {
            font-size: 1.5rem;
            margin-top: 5px;
        }

        .text h1 {
            font-size: 3.125rem;
        }

        .question {
            width: 100%;
            min-height: 950px;
            background-color: #000;
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            text-align: center;
        }

        .question h1 {
            text-align: center;
            color: white;
            margin-bottom: 50px;
            text-align: center;
            font-size: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .quest {
            width: 51%;
            min-height: 75px;
            background-color: #303030;
            color: white;
            align-items: center;
            justify-content: space-between;
            display: flex;
            text-align: left;
            flex-direction: row;
            margin: 5px 0;
        }

        .quest .textbox {
            display: flex;
            text-align: left;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            justify-items: center;
            align-self: center;
            font-size: 25px;
            margin: 0 30px;
            word-spacing: 5px;
            text-align: left;
        }

        .quest i {
            margin: 0 30px;
            font-size: 40px;
            color: rgb(255, 255, 255);
        }

        .quest:focus {
            background-color: red;
        }

        .search1 {
            width: 50%;
            background-color: none;
            min-height: 80px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            text-align: left;
            margin-top: 10px;
        }

        .box1 {
            width: 100%;
            min-height: 65px;
        }

        .try1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #e50914;
            min-height: 70px;
            width: 70%;
            color: white;
            font-size: 30px;
            margin: 50px 0;
            text-transform: uppercase;
        }

        .question h4 {
            color: white;
            margin-top: -20px;
            padding-bottom: 40px;
        }

        .footer {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 375px;
            background-color: black;
            margin-top: 10px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-around;
        }

        .footercon {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 50px;
            background-color: transparent;
        }

        .footer .flex1 {
            color: #999;
            ;
            justify-content: space-around;
            align-items: flex-start;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            font-size: 17px;
            min-height: 30px;
        }

        .footer .flex1 h5 {
            align-self: flex-start;
        }

        .list1 {
            color: white;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-items: flex-start;
            align-self: center;
            justify-content: center;
            min-height: 50px;
            font-size: 13px;
            padding: 0px 70px;
            text-align: left;
        }

        .list1 li {
            font-size: 13px;
            margin: 7px -10px;
            list-style-type: none;
            text-align: left;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-items: center;
            align-self: flex-start;
            justify-content: center;
        }

        .list1 li a {
            color: #999;
            text-decoration: none;
            font-size: 14px;
        }

        li a {
            font-size: 13px;
            text-align: center;
            color: #999;
        }

        .footertxt {
            color: white;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            justify-content: flex-end;
        }

        .end {
            width: 100%;
            min-height: 50px;
            background-color: black;
            justify-content: space-around;
            align-items: flex-start;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            color: #999;
            margin-top: -60px;
        }

        .end h2 {
            display: flex;
            flex-direction: row;
            font-size: 16px;
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

        .category {
            margin: 20px 0;
        }

        .category h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .channels {
            list-style-type: none;
            padding: 0;
        }

        .channels li {
            margin-bottom: 10px;
        }

        .channel img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 10px;
        }

        .channel {
            display: flex;
            align-items: center;
            justify-content: space-around
        }

        .carousel {
            display: flex;
            overflow-x: hidden;
            width: 80%;
            margin: auto;
            margin-top: 20px;
        }

        .carousel img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        @media (min-width: 250px) and (max-width: 980px) {
            body {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
            }

            .container1 {
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;
                align-self: center;
            }

            .area h1 {
                font-size: 40px;
                line-height: 60px;
            }

            .area h3 {
                margin-top: 10px;
            }

            .container1 img {
                width: 60%;
            }

            .navbar {
                display: flex;
                flex-direction: column;
                background-color: black;
                align-items: center;
                justify-content: center;
                padding: 0;
                min-height: 250px;
                margin-bottom: 30px;
            }

            .search {
                display: flex;
                flex-direction: column;
                margin: 30px;
                width: 50%;
                margin: 0 10px;
            }

            .box {
                width: 100%;
                margin-bottom: 20px;
                margin: 30px;
            }

            .try {
                width: 200px;
                margin: 0 10px;
                font-size: 17px;
                min-height: 50px;
            }

            .search1 {
                display: flex;
                flex-direction: column;
                margin: 30px;
                width: 50%;
                margin: 0 10px;
                margin-bottom: 40px;
            }

            h4 {
                color: white;
            }

            .box1 {
                width: 100%;
                margin-bottom: 20px;
                margin: 30px;
            }

            .try1 {
                width: 200px;
                margin: 0 10px;
                font-size: 17px;
                min-height: 50px;
            }

            .text {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                align-self: center;
                text-align: center;
                margin-left: 10px;
                margin-right: 10px;
            }

            .text h1 {
                font-size: 2rem;
                margin-left: 10px;
                margin-right: 10px;
            }

            .text p {
                font-size: 1.2rem;
                margin-left: 10px;
                margin-right: 10px;
            }

            .quest .textbox {
                font-size: 20px;
                margin-left: 10px;
                margin-right: 10px;
            }

            .quest {
                width: 80%;
                min-height: 75px;
                margin-left: 10px;
                margin-right: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <li class="logo"><img
                src="https://www.searchpng.com/wp-content/uploads/2019/02/Netflix-Logo-PNG-image-200x200.png"></li>
        <li class="buttons">TVTimes</li>
        <li class="buttons" id="sidebarToggle">الفئات</li>
        <li class="buttons" id="sidebarToggle">حمل تطبيق الاندرويد من هنا</li>
    </div>

    <div class="sidebar" id="sidebar">
        <span class="close-btn" id="closeSidebar">&times;</span>
        <h2>الفئات</h2>
        <ul>
            @foreach ($categories as $item)
                <li
                    style="align-items: center;display:flex; flex-direction:row-reverse;justify-content:space-between;align-self:center">
                    <a href="#">{{ $item->name }}</a><img src="{{ $item->image }}" alt="{{ $item->name }}"
                        width="20px" height="20px" />
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
        <div><img src="https://via.placeholder.com/800x300?text=Slide+1" alt="Slide 1"></div>
        <div><img src="https://via.placeholder.com/800x300?text=Slide+2" alt="Slide 2"></div>
        <div><img src="https://via.placeholder.com/800x300?text=Slide+3" alt="Slide 3"></div>
    </div>

    <div class="container1">
        <div class="text">
            <h1>الفئات وما بداخلها</h1>
        </div>
        @foreach ($categories as $item)
            <div class="category">
                <h2 class="end">{{ $item->name }}</h2>
                <ul class="channels">
                    @foreach ($item->channels as $channel)
                        <li class="channel">
                            <img src="{{ $channel->image }}" alt="{{ $channel->name }}" width="100px" height="100px" />
                            <span class="end">{{ $channel->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <div class="container1" id="categoriesContainer">
        <!-- Categories and channels will be loaded here by JavaScript -->
    </div>

    <div class="end">
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
        });

        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });

        document.getElementById('closeSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.remove('show');
        });
    </script>
</body>

</html>
