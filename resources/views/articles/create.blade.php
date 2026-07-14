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
    margin-top:10px;
    opacity:.95;
}

.form-card{
    background:white;
    border-radius:25px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

label{
    font-weight:600;
    color:#555;
    margin-bottom:8px;
}

.form-control{
    border-radius:15px;
    border:2px solid #E9D5FF;
    padding:12px;
}

.form-control:focus{
    border-color:#A855F7;
    box-shadow:0 0 15px rgba(168,85,247,.2);
}

.btn-save{
    background:linear-gradient(135deg,#EC4899,#8B5CF6);
    color:white;
    border:none;
    border-radius:30px;
    padding:12px 30px;
    font-weight:600;
}

.btn-save:hover{
    color:white;
}

.btn-back{
    background:#D1FAE5;
    color:#333;
    border:none;
    border-radius:30px;
    padding:12px 30px;
    font-weight:600;
}

.alert{
    border-radius:15px;
}

</style>

<div class="container py-4">

<div class="banner">

<h2>📝 Tambah Artikel</h2>

<p>
Buat artikel baru dengan tampilan yang menarik dan profesional.
</p>

</div>

<div class="form-card">

@if ($errors->any())

<div class="alert alert-danger">

<ul class="mb-0">

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<form action="{{ route('articles.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="mb-4">

<label>📰 Judul Artikel</label>

<input
type="text"
name="title"
class="form-control"
value="{{ old('title') }}"
placeholder="Masukkan judul artikel..."
required>

</div>

<div class="mb-4">

<label>📂 Kategori</label>

<select
name="category_id"
class="form-control"
required>

<option value="">-- Pilih Kategori --</option>

@foreach($categories as $category)

<option value="{{ $category->id }}"
{{ old('category_id') == $category->id ? 'selected' : '' }}>

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
placeholder="Tulis isi artikel di sini..."
required>{{ old('content') }}</textarea>

</div>

<div class="mb-4">

<label>🖼️ Thumbnail</label>

<input
type="file"
name="thumbnail"
class="form-control">

<small class="text-muted">
Format JPG, JPEG, PNG (Opsional)
</small>

</div>

<div class="mb-4">

<label>📢 Status</label>

<select
name="status"
class="form-control"
required>

<option value="">-- Pilih Status --</option>

<option value="draft"
{{ old('status') == 'draft' ? 'selected' : '' }}>

📝 Draft

</option>

<option value="published"
{{ old('status') == 'published' ? 'selected' : '' }}>

🚀 Published

</option>

</select>

</div>

<div class="d-flex gap-2">

<button
type="submit"
class="btn btn-save">

💾 Simpan Artikel

</button>

<a
href="{{ route('articles.index') }}"
class="btn btn-back">

⬅️ Kembali

</a>

</div>

</form>

</div>

</div>

@endsection