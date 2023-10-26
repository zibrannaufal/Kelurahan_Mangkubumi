<link rel="stylesheet" href="css/style.css">

<nav class="navbar navbar-expand-lg navbar-light text-white bg-primary">
    <div class="container my-1 mx-5 d-inline-block">
        <div class="d-inline-block" style="font-size: 12px">(0265)347111</div>
        <div class="d-inline-block mx-3" style="font-size: 12px">dev@tasik.id</div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container p-3 mx-5">
        <img style="width: 72px; height:83px" src="/images/logo.png" alt="logo" class="img-fluid">
        <a class="navbar-brand lh-2 pr-4" style="color: #31A8FF; font-weight: bold; margin-left: 20px; margin-right: 35px " href="/">KELURAHAN<br>MANGKUBUMI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bold">
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Beranda") ? 'active' : '' }}" href="/">Beranda</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Profil") ? 'active' : '' }}" href="/profil">Profil Kelurahan</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Berita") ? 'active' : '' }}" href="/berita">Berita</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Peta") ? 'active' : '' }}" href="/peta">Peta Kelurahan</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Lembaga") ? 'active' : '' }}" href="/lembaga">Lembaga Kelurahan</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Statistik") ? 'active' : '' }}" href="/statistik">Statistik Kelurahan</a>
            </li>
            <li class="nav-item navs">
                <a class="nav-link {{ ($title === "Kelurahan Mangkubumi | Galeri") ? 'active' : '' }}" href="/galeri">Galeri</a>
            </li>
            </ul>
        </div>
    </div>
</nav>