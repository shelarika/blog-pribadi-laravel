@extends('layouts.app')

@section('content')

<style>

body{
    background:linear-gradient(180deg,#FFF8FC 0%,#F7F4FF 50%,#F5FBFF 100%);
    min-height:100vh;
    font-family:'Poppins',sans-serif;
}

/* ================= HERO ================= */

.hero{

    background:linear-gradient(135deg,#FFE6F1,#F0E5FF,#DDF8EC,#EAF7FF);

    border-radius:35px;

    padding:60px;

    margin-bottom:40px;

    position:relative;

    overflow:hidden;

    box-shadow:0 15px 35px rgba(173,150,255,.20);

}

.hero::before{

    content:'';

    position:absolute;

    width:250px;

    height:250px;

    background:#FFD9EA;

    border-radius:50%;

    top:-90px;

    right:-90px;

    opacity:.5;

}

.hero::after{

    content:'';

    position:absolute;

    width:180px;

    height:180px;

    background:#DDF8EC;

    border-radius:50%;

    bottom:-60px;

    left:-60px;

}

.hero h1{

    color:#7E5DB8;

    font-size:48px;

    font-weight:bold;

}

.hero p{

    color:#666;

    font-size:18px;

    line-height:30px;

}

.hero .badge{

    background:white;

    color:#7E5DB8;

    font-size:15px;

    padding:10px 20px;

    border-radius:30px;

}

/* ================= SEARCH ================= */

.search-box{

    background:white;

    border-radius:25px;

    padding:30px;

    margin-bottom:45px;

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}

.form-control,
.form-select{

    border-radius:15px;

    border:2px solid #EFE6FF;

    padding:13px;

}

.form-control:focus,
.form-select:focus{

    border-color:#CFA7FF;

    box-shadow:none;

}

.btn-search{

    background:linear-gradient(135deg,#F7A8D5,#BFA2FF);

    color:white;

    border:none;

    border-radius:15px;

    font-weight:600;

    padding:13px;

}

.btn-search:hover{

    background:linear-gradient(135deg,#EF8EBF,#A784FF);

    color:white;

}

/* ================= CARD ================= */

.blog-card{

    border:none;

    border-radius:25px;

    overflow:hidden;

    background:white;

    box-shadow:0 10px 30px rgba(0,0,0,.08);

    transition:.4s;

    height:100%;

}

.blog-card:hover{

    transform:translateY(-10px);

    box-shadow:0 18px 40px rgba(180,160,255,.25);

}

.thumbnail{

    overflow:hidden;

    position:relative;

}

.thumbnail img{

    width:100%;

    height:250px;

    object-fit:cover;

    transition:.5s;

}

.blog-card:hover .thumbnail img{

    transform:scale(1.08);

}

.thumbnail::after{

    content:'';

    position:absolute;

    left:0;

    right:0;

    bottom:0;

    height:120px;

    background:linear-gradient(to top,rgba(0,0,0,.25),transparent);

}

.title{

    color:#7E5DB8;

    font-weight:bold;

    font-size:24px;

}

.badge-soft{

    background:#F3EBFF;

    color:#7E5DB8;

    border-radius:30px;

    padding:8px 15px;

    margin-right:6px;

    font-size:13px;

}

.read-btn{

    background:linear-gradient(135deg,#F6A6C9,#C8A2FF);

    color:white;

    border:none;

    border-radius:30px;

    padding:12px 25px;

    font-weight:600;

}

.read-btn:hover{

    background:linear-gradient(135deg,#EF7FB0,#AF8CFF);

    color:white;

}

.empty-card{

    background:white;

    border-radius:30px;

    padding:60px;

    text-align:center;

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}

</style>

<div class="container py-5">
    <div class="hero text-center">

    <span class="badge mb-3">

        ✨ Selamat Datang

    </span>

    <h1>

        📖 Blog Pribadi

    </h1>

    <p>

        Temukan berbagai artikel menarik, inspiratif,
        dan informatif. Jelajahi setiap tulisan dengan
        tampilan yang elegan, modern, dan nyaman dibaca.

    </p>

</div>

<div class="search-box">

    <form action="{{ route('blog.index') }}" method="GET">

        <div class="row g-3 align-items-center">

            <div class="col-lg-5">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="🔍 Cari artikel..."
                    value="{{ request('search') }}">

            </div>

            <div class="col-lg-4">

                <select
                    name="category"
                    class="form-select">

                    <option value="">

                        📂 Semua Kategori

                    </option>

                    @foreach($categories as $category)

                    <option
                        value="{{ $category->id }}"
                        {{ request('category') == $category->id ? 'selected' : '' }}>

                        {{ $category->name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="col-lg-3">

                <button class="btn btn-search w-100">

                    🔍 Cari Artikel

                </button>

            </div>

        </div>

    </form>

</div>

<div class="row">

    @forelse($articles as $article)
    <div class="col-lg-4 col-md-6 mb-4">

    <div class="card blog-card">

        @if($article->thumbnail)

        <div class="thumbnail">

            <img
                src="{{ asset('storage/'.$article->thumbnail) }}"
                alt="{{ $article->title }}">

            <div style="position:absolute;top:18px;left:18px;z-index:2;">

                <span class="badge-soft">

                    📂 {{ $article->category->name }}

                </span>

            </div>

        </div>

        @else

        <div class="thumbnail">

            <div style="height:250px;
                        background:linear-gradient(135deg,#FCE7F3,#E9D5FF,#DBEAFE);
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:70px;">

                📖

            </div>

        </div>

        @endif

        <div class="card-body p-4">

            <h4 class="title mb-3">

                {{ $article->title }}

            </h4>

            <div class="mb-3">

                <span class="badge-soft">

                    👤 {{ $article->user->name }}

                </span>

                <span class="badge-soft">

                    📅 {{ $article->created_at->format('d M Y') }}

                </span>

            </div>

            <p class="text-muted">

                {{ Str::limit(strip_tags($article->content),140) }}

            </p>

            <div class="d-flex justify-content-between align-items-center mt-4">

                <small class="text-muted">

                    ✨ Artikel Terbaru

                </small>

                <a
                    href="{{ route('blog.show',$article->slug) }}"
                    class="btn read-btn">

                    📖 Baca

                </a>

            </div>

        </div>

    </div>

</div>
@empty

<div class="col-12">

    <div class="empty-card">

        <div style="font-size:80px;">

            📚

        </div>

        <h2 class="mt-4" style="color:#7E5DB8;">

            Belum Ada Artikel

        </h2>

        <p class="text-muted mt-3">

            Saat ini belum ada artikel yang dipublikasikan.
            Yuk mulai membaca kembali nanti atau cari artikel lainnya.

        </p>

    </div>

</div>

@endforelse

</div>

</div>

@endsection