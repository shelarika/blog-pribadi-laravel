@extends('layouts.app')

@section('content')

<style>

body{
    background:linear-gradient(135deg,#FFF5FB,#F3E8FF,#E0F7FA);
    font-family:'Poppins',sans-serif;
}

/* Banner */

.banner{
    background:linear-gradient(135deg,#F9A8D4,#C4B5FD,#93C5FD);
    border-radius:30px;
    padding:40px;
    margin-bottom:30px;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
    color:white;
}

.banner h2{
    font-weight:700;
    margin-bottom:10px;
}

.banner p{
    margin:0;
    opacity:.95;
}

/* Card */

.table-card{
    background:white;
    border-radius:25px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

/* Tombol */

.btn-add{
    background:linear-gradient(135deg,#EC4899,#8B5CF6);
    color:white;
    border:none;
    border-radius:30px;
    padding:10px 25px;
    font-weight:600;
    transition:.3s;
}

.btn-add:hover{
    color:white;
    transform:translateY(-2px);
    box-shadow:0 10px 20px rgba(139,92,246,.3);
}

/* Table */

.table{
    border-radius:20px;
    overflow:hidden;
}

.table thead{
    background:linear-gradient(135deg,#C084FC,#8B5CF6);
    color:white;
}

.table th{
    text-align:center;
    border:none;
}

.table td{
    vertical-align:middle;
    text-align:center;
}

.table tbody tr:hover{
    background:#FDF4FF;
    transition:.3s;
}

/* Thumbnail */

.thumb{
    width:90px;
    height:70px;
    object-fit:cover;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

/* Badge */

.badge-publish{
    background:#DCFCE7;
    color:#166534;
    padding:8px 18px;
    border-radius:30px;
    font-weight:600;
}

.badge-draft{
    background:#FEF3C7;
    color:#92400E;
    padding:8px 18px;
    border-radius:30px;
    font-weight:600;
}

/* Tombol aksi */

.btn-detail{
    background:#60A5FA;
    color:white;
    border-radius:20px;
    border:none;
}

.btn-edit{
    background:#FBBF24;
    color:white;
    border-radius:20px;
    border:none;
}

.btn-delete{
    background:#F87171;
    color:white;
    border-radius:20px;
    border:none;
}

.btn-detail:hover,
.btn-edit:hover,
.btn-delete:hover{
    color:white;
}

</style>

<div class="container py-4">

@if(session('success'))
<div class="alert alert-success shadow-sm">
    {{ session('success') }}
</div>
@endif

<div class="banner">

<h2>📰 Daftar Artikel</h2>

<p>
Kelola artikel dengan tampilan yang lebih modern dan menarik.
</p>

</div>

<div class="table-card">

<div class="d-flex justify-content-between align-items-center mb-4">

<h4 class="fw-bold text-secondary">
📚 Semua Artikel
</h4>

<a href="{{ route('articles.create') }}" class="btn btn-add">
➕ Tambah Artikel
</a>

</div>

<div class="table-responsive">

<table class="table align-middle">

<thead>

<tr>

<th>No</th>

<th>Thumbnail</th>

<th>Judul</th>

<th>Kategori</th>

<th>Status</th>

<th width="250">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($articles as $article)

<tr>

<td>{{ $loop->iteration }}</td>

<td>

@if($article->thumbnail)

<img src="{{ asset('storage/'.$article->thumbnail) }}" class="thumb">

@else

Tidak Ada

@endif

</td>
<td class="fw-semibold">
    {{ $article->title }}
</td>

<td>
    {{ $article->category->name }}
</td>

<td>

@if($article->status=='published')

<span class="badge-publish">
    ✅ Published
</span>

@else

<span class="badge-draft">
    📝 Draft
</span>

@endif

</td>

<td>

<a href="{{ route('articles.show',$article->id) }}"
   class="btn btn-detail btn-sm me-1">

👁 Detail

</a>

<a href="{{ route('articles.edit',$article->id) }}"
   class="btn btn-edit btn-sm me-1">

✏ Edit

</a>

<form action="{{ route('articles.destroy',$article->id) }}"
      method="POST"
      class="d-inline">

    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="btn btn-delete btn-sm"
        onclick="return confirm('Yakin ingin menghapus artikel ini?')">

        🗑 Hapus

    </button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" class="text-center py-5">

<h1 style="font-size:70px;">📄</h1>

<h4 class="text-secondary">
Belum Ada Artikel
</h4>

<p class="text-muted">
Silakan tambahkan artikel pertama kamu.
</p>

<a href="{{ route('articles.create') }}"
   class="btn btn-add">

➕ Tambah Artikel

</a>

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

@endsection