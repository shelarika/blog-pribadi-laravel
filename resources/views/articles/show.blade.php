@extends('layouts.app')

@section('content')

<style>

body{
    background:linear-gradient(135deg,#FFF5FB,#F3E8FF,#E0F7FA);
    font-family:'Poppins',sans-serif;
}

.banner{
    background:linear-gradient(135deg,#F9A8D4,#C4B5FD,#93C5FD);
    border-radius:30px;
    padding:40px;
    margin-bottom:30px;
    color:white;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.banner h2{
    font-weight:700;
}

.banner p{
    opacity:.9;
    margin-top:10px;
}

.article-card{
    background:#fff;
    border-radius:30px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.article-img{
    width:100%;
    max-height:450px;
    object-fit:cover;
}

.article-body{
    padding:35px;
}

.info{
    display:inline-block;
    margin:5px 8px 15px 0;
    background:#F3E8FF;
    color:#6D28D9;
    padding:8px 18px;
    border-radius:30px;
    font-weight:600;
}

.content-box{
    background:#FAFAFA;
    border-radius:20px;
    padding:25px;
    line-height:1.9;
    color:#444;
    margin-top:20px;
}

.btn-back{
    background:linear-gradient(135deg,#EC4899,#8B5CF6);
    color:white;
    border:none;
    border-radius:30px;
    padding:12px 30px;
    font-weight:600;
}

.btn-back:hover{
    color:white;
}

</style>

<div class="container py-4">

<div class="banner">

<h2>📖 Detail Artikel</h2>

<p>
Lihat informasi lengkap artikel yang telah dipublikasikan.
</p>

</div>

<div class="article-card">

@if($article->thumbnail)

<img
src="{{ asset('storage/'.$article->thumbnail) }}"
class="article-img">

@endif

<div class="article-body">

<h2 class="fw-bold mb-3">

{{ $article->title }}

</h2>

<span class="info">
📂 {{ $article->category->name }}
</span>

<span class="info">
👤 {{ $article->user->name }}
</span>

<span class="info">
📅 {{ $article->created_at->format('d F Y') }}
</span>

@if($article->status=='published')

<span class="info">
✅ Published
</span>

@else

<span class="info">
📝 Draft
</span>

@endif

<div class="content-box">

{!! nl2br(e($article->content)) !!}

</div>
<hr class="my-4">

<div class="d-flex justify-content-between align-items-center flex-wrap">

<div>

<small class="text-muted">
✨ Terima kasih telah membaca artikel ini.
</small>

</div>

<div class="mt-3 mt-md-0">

<a href="{{ route('articles.index') }}"
class="btn btn-back">

⬅️ Kembali ke Daftar Artikel

</a>

</div>

</div>

</div>

</div>

</div>

@endsection