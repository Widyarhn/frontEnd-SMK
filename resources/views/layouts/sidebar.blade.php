<nav class="pc-sidebar" style="background:white;">
    <div class="navbar-wrapper">
        <div class="m-header text-center">
            <a href="" class="b-brand text-primary">
                <img src="{{asset('assets')}}/images/logoapp.png" alt="img" style="width: 45px;"/></a>
                <h5 class="fw-bold" style="padding-left:10px;">v9.4.3</h5>
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
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-user-tie"></i>
                        </span>
                        <span class="pc-mtext">Satuan Kerja</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="/satuan-kerja">Satuan Kerja</a></li>
                        <li class="pc-item"><a class="pc-link" href="/nomor-sk">Nomor SK</a></li>
                        <li class="pc-item"><a class="pc-link" href="direktur-jendral">Direktur Jendral</a></li>
                    </ul>
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
                        <li class="pc-item"><a class="pc-link" href="/element-smk">Element SMK</a></li>
                        <li class="pc-item"><a class="pc-link" href="/element-pemantauan">Element Pemantauan</a></li>
                    </ul>
                </li>

                <li class="pc-item pc-caption">
                    <label>Administrator</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="/perusahaan" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-regular fa-building"></i>
                        </span>
                        <span class="pc-mtext">Perusahaan</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
