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

.comment-card{
    background:#ffffff;
    margin-top:35px;
    border-radius:25px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.comment-title{
    font-weight:700;
    color:#ec4899;
    margin-bottom:20px;
}

.form-control{
    border-radius:15px;
    padding:12px;
    border:1px solid #ddd;
}

.form-control:focus{
    box-shadow:none;
    border-color:#ec4899;
}

.btn-comment{
    background:linear-gradient(135deg,#EC4899,#34D399);
    color:white;
    border:none;
    border-radius:30px;
    padding:12px 30px;
    font-weight:600;
}

.btn-comment:hover{
    color:white;
}

.comment-item{
    background:#F9FAFB;
    border-left:5px solid #EC4899;
    padding:18px;
    border-radius:15px;
    margin-bottom:15px;
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
@if(session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif

<!-- FORM KOMENTAR -->
<div class="comment-card">

    <h4 class="comment-title">💬 Tinggalkan Komentar</h4>

    <form action="{{ route('comment.store', $article->id) }}" method="POST">

        @csrf

        <div class="mb-3">
            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Nama Anda"
                required>
        </div>

        <div class="mb-3">
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email Anda"
                required>
        </div>

        <div class="mb-3">
            <textarea
                name="comment"
                rows="5"
                class="form-control"
                placeholder="Tulis komentar..."
                required></textarea>
        </div>

        <button type="submit" class="btn btn-comment">
            Kirim Komentar
        </button>

    </form>

</div>

<!-- DAFTAR KOMENTAR -->

<div class="comment-card">

    <h4 class="comment-title">
        📝 Komentar ({{ $article->comments->count() }})
    </h4>

    @forelse($article->comments as $comment)

        <div class="comment-item">

            <h6 class="fw-bold mb-1">
                {{ $comment->name }}
            </h6>

            <small class="text-muted">
                {{ $comment->created_at->format('d M Y H:i') }}
            </small>

            <p class="mt-2 mb-0">
                {{ $comment->comment }}
            </p>

        </div>

    @empty

        <div class="alert alert-info">
            Belum ada komentar.
        </div>

    @endforelse

</div>

<hr class="my-4">

<div class="d-flex justify-content-between align-items-center flex-wrap">

    <div>

        <small class="text-muted">
            ✨ Terima kasih telah membaca artikel ini.
        </small>

    </div>

    <div class="mt-3 mt-md-0">

        <a href="{{ route('blog.index') }}" class="btn btn-back">

            ⬅️ Kembali ke Blog

        </a>

    </div>

</div>

</div>

</div>

</div>

@endsection