<link rel="stylesheet" href="css/style.css">

<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm p-3 mb-1 bg-body rounded">
    <div class="container-fluid mx-5">
            <img style="width: 65px; height:76px" src="/images/logo.png" alt="logo" class="img-fluid">
            <a class="navbar-brand lh-2 pr-4" style="color: #31A8FF; font-weight: bold; margin-left: 20px; margin-right: 35px; font-size:18px;" href="/">KELURAHAN<br>MANGKUBUMI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bold">
            <li class="nav-item navs pr-5" style="padding-left: 60px">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Beranda") ? 'active' : '' }}" style="font-size: 13px" href="/">BERANDA</a>
            </li>
            <div class="dropdown">
                <li class="nav-item navs pr-5">
                    <a class="nav-link dropbtn {{ ($title === "Kelurahan Mangkubumi | Profil") ? 'active' : '' }}" style="font-size: 13px" href="/profil">PROFIL KELURAHAN</a>
                    <div class="dropdown-content" style="font-size: 12px; font-weight: 300 ">
                        <a href="#">SEJARAH KELURAHAN</a>
                        <a href="#">DEMOGRAFI</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li class="nav-item navs pr-5">
                    <a class="nav-link dropbtn {{ ($title === "Kelurahan Mangkubumi | Berita") ? 'active' : '' }}" style="font-size: 13px" href="/berita">BERITA</a>
                    <div class="dropdown-content" style="font-size: 12px; font-weight: 300">
                        <a href="#">BERITA</a>
                        <a href="#">ARTIKEL</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li class="nav-item navs pr-5">
                    <a class="nav-link dropbtn" style="font-size: 13px" href="#">INFORMASI</a>
                    <div class="dropdown-content" style="font-size: 12px; font-weight: 300">
                        <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Regulasi") ? 'active' : '' }}" href="/regulasi">REGULASI</a>
                        <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Galeri") ? 'active' : '' }}" href="/galeri">GALERI</a>
                        <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Peta") ? 'active' : '' }}" href="/peta">PETA KELURAHAN</a>
                    </div>
                </li>   
            </div>
            <div class="dropdown">
                <li class="nav-item navs pr-5">
                    <a class="nav-link dropbtn {{ ($title === "Kelurahan Mangkubumi | Lembaga") ? 'active' : '' }}" style="font-size: 13px" href="/lembaga">LEMBAGA KELURAHAN</a>
                    <div class="dropdown-content" style="font-size: 12px; font-weight: 300">
                        <a href="#">PEMERINTAH KELURAHAN</a>
                        <a href="#">LEMBAGA KEMASYARAKATAN KELURAHAN</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li class="nav-item navs pr-5">
                    <a class="nav-link dropbtn {{ ($title === "Kelurahan Mangkubumi | Statistik") ? 'active' : '' }}" style="font-size: 13px" href="/statistik">STATISTIK KELURAHAN</a>
                    <div class="dropdown-content" style="font-size: 12px; font-weight: 300">
                        <a href="#">PEKERJAAN</a>
                        <a href="#">PENDIDIKAN</a>
                        <a href="#">STATUS KAWIN</a>
                        <a href="#">GOLONGAN DARAH</a>
                        <a href="#">AGAMA</a>
                        <a href="#">KELAS SOSIAL</a>
                    </div>
                </li>
            </div>
            <li class="nav-item navs pr-5">
                <a class="nav-link" style="font-size: 13px" href="https://ppid.tasikmalayakota.go.id/">PPID</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link" style="font-size: 13px" href="https://www.lapor.go.id/">SP4N LAPOR</a>
            </li>
            </ul>
        </div>
    </div>
</nav>