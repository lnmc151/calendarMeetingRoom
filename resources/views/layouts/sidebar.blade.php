{{-- <link rel="stylesheet" href="{{ asset('wwwroot/css/sidebar.css') }}"> --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>แดชบอร์ด</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('room') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>จองห้องประชุม</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>ผู้ใช้งาน</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>การตั้งค่า</p>
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>

