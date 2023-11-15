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
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Beranda") ? 'active' : '' }}" style="font-size: 15px" href="/">Beranda</a>
            </li>
            <li class="nav-item navs pr-5">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Profil") ? 'active' : '' }}" style="font-size: 15px" href="/profil">Profil Kelurahan</a>
            </li>
            <li class="nav-item navs pr-5">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Berita") ? 'active' : '' }}" style="font-size: 15px" href="/berita">Berita</a>
            </li>
            <li class="nav-item navs pr-5">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Peta") ? 'active' : '' }}" style="font-size: 15px" href="/peta">Peta Kelurahan</a>
            </li>
            <li class="nav-item navs pr-5">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Lembaga") ? 'active' : '' }}" style="font-size: 15px" href="/lembaga">Lembaga Kelurahan</a>
            </li>
            <li class="nav-item navs pr-5">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Statistik") ? 'active' : '' }}" style="font-size: 15px" href="/statistik">Statistik Kelurahan</a>
            </li>
            <li class="nav-item navs pr-5">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Regulasi") ? 'active' : '' }}" style="font-size: 15px" href="/regulasi">Regulasi</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Galeri") ? 'active' : '' }}" style="font-size: 15px" href="/galeri">Galeri</a>
            </li>
            </ul>
        </div>
    </div>
</nav>