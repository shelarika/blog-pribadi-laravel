@extends('layouts.app')

@section('content')

<style>

body{
    background:linear-gradient(135deg,#FFF4F6,#F6F5FF,#EEF9FF);
    min-height:100vh;
    font-family:'Poppins',sans-serif;
}

.edit-card{
    background:white;
    border-radius:25px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

h2{
    color:#7c3aed;
    font-weight:700;
}

label{
    font-weight:600;
    margin-bottom:8px;
}

.form-control{
    border-radius:15px;
    padding:12px;
    border:1px solid #ddd;
}

.preview-img{
    width:200px;
    height:130px;
    object-fit:cover;
    border-radius:15px;
    margin-top:10px;
}

.btn-update{
    background:#a78bfa;
    color:white;
    border-radius:20px;
    padding:10px 25px;
    border:none;
}

.btn-update:hover{
    background:#8b5cf6;
    color:white;
}

.btn-back{
    background:#f9a8d4;
    color:white;
    border-radius:20px;
    padding:10px 25px;
    text-decoration:none;
}

.btn-back:hover{
    background:#ec4899;
    color:white;
}

</style>

<div class="container py-5">

<div class="edit-card">

<h2 class="mb-4">
✏️ Edit Artikel
</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('articles.update',$article->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-4">

<label>📌 Judul Artikel</label>

<input
type="text"
name="title"
class="form-control"
value="{{ old('title',$article->title) }}"
required>

</div>

<div class="mb-4">

<label>📂 Kategori</label>

<select
name="category_id"
class="form-control"
required>

@foreach($categories as $category)

<option value="{{ $category->id }}"
{{ old('category_id',$article->category_id)==$category->id ? 'selected' : '' }}>

{{ $category->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-4">

<label>📖 Konten Artikel</label>

<textarea
name="content"
rows="8"
class="form-control"
required>{{ old('content',$article->content) }}</textarea>

</div>

<div class="mb-4">

<label>🖼️ Thumbnail</label>

<input
type="file"
name="thumbnail"
class="form-control">

@if($article->thumbnail)

<div class="mt-3">

<p class="text-muted">Thumbnail Saat Ini</p>

<img src="{{ asset('storage/'.$article->thumbnail) }}"
class="preview-img">

</div>

@endif

</div>

<div class="mb-4">

<label>📢 Status</label>

<select
name="status"
class="form-control"
required>

<option value="draft"
{{ old('status',$article->status)=='draft'?'selected':'' }}>
📝 Draft
</option>

<option value="published"
{{ old('status',$article->status)=='published'?'selected':'' }}>
🚀 Published
</option>

</select>

</div>

<div class="d-flex justify-content-end gap-2">

<a href="{{ route('articles.index') }}"
class="btn btn-back">

⬅️ Kembali

</a>

<button
type="submit"
class="btn btn-update">

💾 Update Artikel

</button>

</div>

</form>

</div>

</div>

@endsection