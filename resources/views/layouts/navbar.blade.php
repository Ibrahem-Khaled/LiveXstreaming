<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">TVTimes</a>
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
