<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{url('dashboard')}}"><img src="{{url("logo_dpr.png")}}" alt="Logo" srcset="" style="width: 100px; height: 100px; ">Sekretariat DPR Papua</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{url("dashboard")}}" class='sidebar-link'>
                        <i class="bi bi-house"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('dashboard/disposisi*') ? 'active' : '' }} ">
                    <a href="{{route('dispo.create')}}" class='sidebar-link'>
                        <i class="bi bi-newspaper"></i>
                        <span>Lembar Disposisi</span>
                    </a>
                </li>

                <li class="sidebar-item  {{ Request::is('dashboard/KodeArsip*') ? 'active' : '' }} ">
                    <a href="{{route('arsip.index')}}" class='sidebar-link'>
                        <i class="bi bi-card-list"></i>
                        <span>Kode Klasifikasi Arsip</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
