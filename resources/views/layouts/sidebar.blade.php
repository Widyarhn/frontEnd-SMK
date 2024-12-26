<nav class="pc-sidebar" style="background:white;">
    <div class="navbar-wrapper">
        <div class="m-header text-center">
            <a href="" class="b-brand text-primary">
                <img src="{{asset('assets')}}/images/logoapp.png" alt="img" style="width: 45px;"/></a>
                <h5 class="fw-bold" style="padding-left:10px;">SMK-PAU</h5>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="/dashboard" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Master Data</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-regular fa-map"></i>
                        </span>
                        <span class="pc-mtext">Wilayah</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="/provinsi">Provinsi</a></li>
                        <li class="pc-item"><a class="pc-link" href="/kota">Kota</a></li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="/kbli" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="pc-mtext">KBLI</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/nomor-sk" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-file-lines"></i>
                        </span>
                        <span class="pc-mtext">No. Berita Acara</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/penandatangan" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-signature"></i>
                        </span>
                        <span class="pc-mtext">Penandatangan</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-book"></i>
                        </span>
                        <span class="pc-mtext">Element</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="/element-smk/list">Element SMK</a></li>
                        <li class="pc-item"><a class="pc-link" href="/element-pemantauan/list">Element Pemantauan</a></li>
                    </ul>
                </li>

                <li class="pc-item pc-caption">
                    <label>Administrasi</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/user-manajemen" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-users"></i>
                        </span>
                        <span class="pc-mtext">User Manajemen</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/hak-akses" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-key"></i>
                        </span>
                        <span class="pc-mtext">Hak Akses</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Perusahaan</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/perusahaan" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-buildings"></i>
                        </span>
                        <span class="pc-mtext">Perusahaan</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Pengaturan Aplikasi</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/pengaturan" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-cogs"></i>
                        </span>
                        <span class="pc-mtext">Pengaturan</span>
                    </a>
                </li>
            </ul>
            <hr>
            <p class="text-center">internal</p>
            <hr>
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="/dashboard-internal" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Perusahaan</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/perusahaan" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-buildings"></i>
                        </span>
                        <span class="pc-mtext">Perusahaan</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Pengaturan Akun</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/pengaturan" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-cogs"></i>
                        </span>
                        <span class="pc-mtext">Pengaturan</span>
                    </a>
                </li>
            </ul>
            <hr>
            <p class="text-center">Company</p>
            <hr>
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="/dashboard-company" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Perusahaan</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/perusahaan" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-buildings"></i>
                        </span>
                        <span class="pc-mtext">Perusahaan</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Pengaturan Akun</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/pengaturan" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-cogs"></i>
                        </span>
                        <span class="pc-mtext">Pengaturan</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
