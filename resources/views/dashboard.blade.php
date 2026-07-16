@extends('layouts.app')

@section('content')

<style>

body{
    background:linear-gradient(180deg,#FFF8FC 0%,#F7F5FF 50%,#F8FCFF 100%);
    font-family:'Poppins',sans-serif;
}

/* HERO */

.hero{
    background:linear-gradient(135deg,#FFE1EC,#EAD7FF,#D8F3DC,#DFF6FF);
    border-radius:35px;
    padding:55px;
    margin-bottom:40px;
    position:relative;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(170,160,255,.20);
}

.hero::before{
    content:'';
    position:absolute;
    width:240px;
    height:240px;
    border-radius:50%;
    background:#FFD5E5;
    top:-80px;
    right:-70px;
    opacity:.5;
}

.hero::after{
    content:'';
    position:absolute;
    width:180px;
    height:180px;
    border-radius:50%;
    background:#D9F7E7;
    bottom:-60px;
    left:-60px;
    opacity:.8;
}

.hero h2{
    font-size:42px;
    font-weight:700;
    color:#7B5CB8;
}

.hero h4{
    color:#444;
    font-weight:600;
}

.hero p{
    color:#666;
    font-size:17px;
    line-height:30px;
}

/* CARD */

.dashboard-card{
    border:none;
    border-radius:28px;
    overflow:hidden;
    transition:.35s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    height:100%;
}

.dashboard-card:hover{
    transform:translateY(-10px);
    box-shadow:0 18px 35px rgba(0,0,0,.12);
}

.card-blue{
    background:#E8F4FF;
}

.card-green{
    background:#E6FAEF;
}

.card-pink{
    background:#FFEAF2;
}

.icon-circle{
    width:70px;
    height:70px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:auto;
    font-size:30px;
    background:white;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.number{
    font-size:46px;
    font-weight:700;
    margin-top:18px;
}

.blue{
    color:#6C8CFF;
}

.green{
    color:#47B881;
}

.pink{
    color:#F472B6;
}

/* QUICK MENU */

.quick-menu{
    margin-top:30px;
}

.quick-card{
    background:#fff;
    border:none;
    border-radius:22px;
    padding:25px;
    text-align:center;
    text-decoration:none;
    color:#555;
    display:block;
    transition:.3s;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.quick-card:hover{
    transform:translateY(-8px);
    text-decoration:none;
    color:#7B5CB8;
    box-shadow:0 15px 30px rgba(0,0,0,.12);
}

.quick-card .icon{
    font-size:45px;
    margin-bottom:12px;
}

.quick-card h5{
    font-weight:700;
}

.quick-card p{
    font-size:14px;
    color:#777;
}

/* OVERVIEW */

.overview{
    background:white;
    border-radius:30px;
    padding:40px;
    margin-top:40px;
    box-shadow:0 12px 30px rgba(0,0,0,.08);
}

.overview h3{
    color:#7B5CB8;
    font-weight:bold;
}

.overview p{
    color:#666;
    line-height:30px;
}

/* QUOTE */

.quote{
    margin-top:25px;
    background:linear-gradient(135deg,#FFF0F8,#F2EBFF);
    padding:25px;
    border-radius:20px;
    border-left:6px solid #D8B4FE;
    color:#666;
}

/* DATE */

.today{
    margin-top:20px;
    color:#888;
    font-size:15px;
}

/* ICON */

.hero-icon{
    font-size:120px;
    position:relative;
    z-index:2;
}

</style>

<div class="container py-4">

    <!-- Hero -->

    <div class="hero">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <span class="badge bg-light text-dark rounded-pill px-3 py-2 mb-3">
                    ✨ Dashboard
                </span>

                <h2>🏠 Dashboard Administrator</h2>

                <h4 class="mt-3">
                    Selamat Datang di Dashboard Administrator
                </h4>

                <p class="mt-3">
                    Dashboard ini merupakan pusat pengelolaan aplikasi Blog Bertema
                    Teknologi. Melalui halaman ini administrator dapat mengelola
                    artikel, kategori, mempublikasikan artikel, serta memantau
                    perkembangan konten blog dengan mudah, cepat, dan terstruktur.
                </p>

            </div>

            <div class="col-lg-4 text-center">

                <div class="hero-icon">
                    🚀👩‍💻
                </div>

            </div>

        </div>

    </div>
        <!-- Statistik Dashboard -->

    <div class="row">

        <!-- Total Artikel -->

        <div class="col-md-4 mb-4">

            <div class="card dashboard-card card-blue">

                <div class="card-body text-center">

                    <div class="icon-circle">
                        📄
                    </div>

                    <div class="number blue">
                        {{ \App\Models\Article::where('user_id',auth()->id())->count() }}
                    </div>

                    <h5 class="mt-3 fw-bold">
                        Total Artikel
                    </h5>

                    <small class="text-muted">
                        Artikel yang telah dibuat
                    </small>

                </div>

            </div>

        </div>

        <!-- Total Kategori -->

        <div class="col-md-4 mb-4">

            <div class="card dashboard-card card-green">

                <div class="card-body text-center">

                    <div class="icon-circle">
                        📂
                    </div>

                    <div class="number green">
                        {{ \App\Models\Category::where('user_id',auth()->id())->count() }}
                    </div>

                    <h5 class="mt-3 fw-bold">
                        Total Kategori
                    </h5>

                    <small class="text-muted">
                        Semua kategori yang tersedia
                    </small>

                </div>

            </div>

        </div>

        <!-- Artikel Dipublikasikan -->

        <div class="col-md-4 mb-4">

            <div class="card dashboard-card card-pink">

                <div class="card-body text-center">

                    <div class="icon-circle">
                        🌍
                    </div>

                    <div class="number pink">
                        {{ \App\Models\Article::where('user_id',auth()->id())->where('status','published')->count() }}
                    </div>

                    <h5 class="mt-3 fw-bold">
                        Artikel Dipublikasikan
                    </h5>

                    <small class="text-muted">
                        Artikel yang telah dipublikasikan
                    </small>

                </div>

            </div>

        </div>

    </div>

    <!-- Quick Access -->

    <div class="quick-menu">

        <h3 class="text-center mb-4" style="color:#7B5CB8;font-weight:bold;">
            🚀 Menu Cepat
        </h3>

        <div class="row">

            <div class="col-md-4 mb-4">

                <a href="{{ route('articles.index') }}" class="quick-card">

                    <div class="icon">📄</div>

                    <h5>Kelola Artikel</h5>

                    <p>
                        Tambahkan, ubah, lihat, dan hapus artikel blog dengan mudah.
                    </p>

                </a>

            </div>

            <div class="col-md-4 mb-4">

                <a href="{{ route('categories.index') }}" class="quick-card">

                    <div class="icon">📂</div>

                    <h5>Kelola Kategori</h5>

                    <p>
                        Atur kategori agar artikel tersusun lebih rapi dan terorganisir.
                    </p>

                </a>

            </div>

            <div class="col-md-4 mb-4">

                <a href="{{ route('blog.index') }}" class="quick-card">

                    <div class="icon">🌐</div>

                    <h5>Lihat Blog</h5>

                    <p>
                        Buka halaman blog publik dan lihat tampilan artikel yang telah dipublikasikan.
                    </p>

                </a>

            </div>

        </div>

    </div>
        <!-- Dashboard Overview -->

    <div class="overview">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <h3>📊 Ringkasan Dashboard</h3>

                <p class="mt-3">

                    Dashboard Administrator merupakan pusat pengelolaan aplikasi
                    <strong>Blog Bertema Teknologi</strong>. Melalui halaman ini,
                    administrator dapat memantau jumlah artikel, kategori, serta
                    artikel yang telah dipublikasikan. Dashboard juga menyediakan
                    akses cepat menuju halaman pengelolaan artikel, kategori, dan
                    blog publik sehingga proses administrasi menjadi lebih efisien.

                </p>

                <div class="quote">

                    <h5>💡 Motivasi Hari Ini</h5>

                    <p class="mb-0 mt-2">

                        <i>
                            "Setiap artikel yang dipublikasikan bukan hanya
                            menyampaikan informasi, tetapi juga dapat menjadi
                            sumber ilmu dan inspirasi bagi banyak orang."
                        </i>

                    </p>

                </div>

                <div class="today">

                    📅 Hari ini :
                    {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}

                </div>

            </div>

            <div class="col-lg-4 text-center">

                <div style="font-size:130px;">
                    💻
                </div>

                <h4 class="mt-3 text-secondary fw-bold">

                    Blog Bertema Teknologi

                </h4>

                <p class="text-muted">

                    Kelola artikel dan bagikan informasi seputar
                    Web Development, Cyber Security, Database,
                    Cloud Computing, dan Artificial Intelligence
                    kepada para pengunjung.

                </p>

                <div class="mt-4">

                    <span class="badge bg-primary rounded-pill px-3 py-2">
                        📄 Artikel
                    </span>

                    <span class="badge bg-success rounded-pill px-3 py-2">
                        📂 Kategori
                    </span>

                    <span class="badge bg-danger rounded-pill px-3 py-2">
                        🌍 Published
                    </span>

                </div>

            </div>

        </div>

    </div>
    </div>

@endsection
