<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - TVTimes</title>

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

        .contact-form {
            background-color: #222;
            padding: 40px;
            margin: 20px auto;
            width: 80%;
            border-radius: 15px;
            text-align: left;
        }

        .contact-form h2 {
            color: red;
        }

        .contact-form label {
            display: block;
            margin-top: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333;
            color: white;
        }

        .contact-form button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: red;
            color: white;
            cursor: pointer;
        }

        .contact-info {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }

        .contact-info h2 {
            color: red;
        }

        .contact-info p {
            margin: 10px 0;
        }

        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .map {
            width: 80%;
            margin: 20px auto;
        }

        .map iframe {
            width: 100%;
            border: none;
            border-radius: 15px;
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
                    <a class="btn btn-danger" href="{{ route('login') }}">
                        @guest
                            تسجيل الدخول
                        @else
                            {{ Auth::user()->name }}
                        @endguest
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">البحث</button>
            </form>
        </div>
    </nav>

    <div class="main">
        <div class="area">
            <h1>تواصل معنا</h1>
            <h3>نحن هنا لمساعدتك!</h3>
        </div>
    </div>

    <div class="contact-form">
        <h2>أرسل لنا رسالة</h2>
        <form action="{{ route('contact-us.store') }}" method="POST">
            @csrf
            <label for="name">الاسم</label>
            <input type="text" id="name" name="name" required>

            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">رقم الهاتف</label>
            <input type="phone" id="phone" name="phone" required>

            <label for="message">رسالة</label>
            <textarea id="message" name="subject" rows="5" required></textarea>

            <button type="submit">إرسال</button>
        </form>
    </div>

    <div class="contact-info">
        <h2>معلومات الاتصال</h2>
        <p>البريد الإلكتروني: contact@tvtimes.com</p>
        <p>رقم الهاتف: 123-456-7890</p>
        <p>العنوان: شارع التلفزيون، المدينة، الدولة</p>
    </div>

    <div class="footer">
        <h2>TVTimes</h2>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HUiIbX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
