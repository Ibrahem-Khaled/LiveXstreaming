<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TVTimes - IPTV Player</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Video.js CSS -->
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <style>
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url(https://assets.nflxext.com/ffe/siteui/vlv3/a1dc92ca-091d-4ca9-a05b-8cd44bbfce6a/f9368347-e982-4856-a5a4-396796381f28/RS-en-20191230-popsignuptwoweeks-perspective_alpha_website_large.jpg);
            background-size: cover;
            background-position: center;
            min-height: 600px;
            padding: 20px;
        }

        .main .area {
            max-width: 1200px;
            width: 100%;
            margin: 20px;
        }

        .main .area .video-js {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .main .area h1 {
            font-size: 40px;
            line-height: 1.2;
            margin-bottom: 20px;
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

        p {
            text-align: center;
            margin: 10px;
        }
    </style>
</head>

<body>

    @include('layouts.navbar')

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
            <video id="my-video" class="video-js vjs-default-skin" controls preload="auto"
                data-setup='{"fluid": true}'>
                <source src="{{ $channel->link }}" type="application/x-mpegURL">
                متصفحك لا يدعم عنصر الفيديو.
            </video>
            <h1>{{ $channel->name }}</h1>
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

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Video.js JS -->
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#sidebarToggle').click(function() {
                $('#sidebar').toggleClass('show');
            });

            $('#closeSidebar').click(function() {
                $('#sidebar').removeClass('show');
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HUiIbX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
