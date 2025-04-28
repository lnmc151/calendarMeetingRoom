<style>
    .navbar {
        background: linear-gradient(90deg, #0062E6, #33AEFF);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1050;
    }


    .navbar-brand {
        color: #FFF;
        font-size: 22px;
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        width: 60px;
        height: 60px;
        margin-right: 10px;
    }

    .navbar-brand:hover {
        color: #FFF;
        text-decoration: none;
    }

    .navbar-right {
        display: flex;
        align-items: center;
    }

    .navbar-right a {
        color: #FFF;
        text-decoration: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        background-color: #1E90FF;
        transition: background-color 0.3s;
    }

    .navbar-right a:hover {
        background-color: #4682B4;
    }
</style>

<nav class="navbar">
    <a class="navbar-brand" href="index.php">
        <img src="{{ asset('wwwroot/img/logo-hrm.png') }}" alt="Logo">
        <strong>ระบบจองห้องประชุมออนไลน์</strong>
    </a>


    <div class="navbar-right">
        @if (session()->has('full_name'))
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ session('full_name') }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">ออกจากระบบ</a></li>
                </ul>
            </div>
        @else
            <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
        @endif
    </div>

</nav>
