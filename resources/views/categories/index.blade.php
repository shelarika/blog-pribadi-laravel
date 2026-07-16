@extends('layouts.app')

@section('content')

<style>

body{
    background:linear-gradient(to bottom,#FFF8FC,#F8F7FF);
    font-family:'Poppins',sans-serif;
}

/* Banner */

.banner{
    background:linear-gradient(135deg,#FFD6E8,#E9D5FF,#CFFAFE);
    padding:35px;
    border-radius:25px;
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.banner h2{
    color:#6D4C9F;
    font-weight:bold;
}

.banner p{
    color:#555;
    margin-bottom:0;
}

/* Card */

.card-custom{
    background:white;
    border:none;
    border-radius:25px;
    padding:25px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

/* Tombol */

.btn-add{
    background:#C084FC;
    color:white;
    border:none;
    border-radius:30px;
    padding:10px 22px;
    font-weight:600;
}

.btn-add:hover{
    background:#A855F7;
    color:white;
}

.btn-edit{
    background:#93C5FD;
    color:white;
    border:none;
    border-radius:20px;
}

.btn-edit:hover{
    background:#60A5FA;
    color:white;
}

.btn-delete{
    background:#F9A8D4;
    color:white;
    border:none;
    border-radius:20px;
}

.btn-delete:hover{
    background:#EC4899;
    color:white;
}

/* Table */

.table{
    border-collapse:separate;
    border-spacing:0 10px;
}

.table thead th{
    background:#E9D5FF;
    color:#6B46C1;
    border:none;
    text-align:center;
}

.table tbody tr{
    background:#fff;
    box-shadow:0 4px 10px rgba(0,0,0,.05);
}

.table tbody td{
    vertical-align:middle;
    border:none;
}

.table tbody tr:hover{
    transform:scale(1.01);
    transition:.3s;
    background:#FFF5FB;
}

.badge-slug{
    background:#DBEAFE;
    color:#2563EB;
    padding:8px 15px;
    border-radius:20px;
}

</style>

<div class="container py-4">

<div class="banner d-flex justify-content-between align-items-center">

<div>

<h2>📂 Manajemen Kategori</h2>

<p>
Selamat datang di halaman kategori.
Kelola kategori agar artikelmu lebih rapi, terstruktur, dan mudah ditemukan.
</p>

</div>

<a href="{{ route('categories.create') }}" class="btn btn-add">

➕ Tambah Kategori

</a>

</div>

@if(session('success'))

<div class="alert alert-success rounded-4 shadow-sm">

{{ session('success') }}

</div>

@endif

<div class="card-custom">

<table class="table align-middle">

<thead>

<tr>

<th>No</th>

<th>📂 Nama Kategori</th>

<th>🔗 Slug</th>

<th>📝 Deskripsi</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@forelse($categories as $category)

<tr>

<td class="text-center">{{ $loop->iteration }}</td>

<td><strong>{{ $category->name }}</strong></td>

<td>

<span class="badge-slug">

{{ $category->slug }}

</span>

</td>

<td>{{ $category->description }}</td>

<td class="text-center">

<a href="{{ route('categories.edit',$category->id) }}"
class="btn btn-edit btn-sm">

✏️ Edit

</a>

<form
action="{{ route('categories.destroy',$category->id) }}"
method="POST"
style="display:inline;">

@csrf
@method('DELETE')

<button
class="btn btn-delete btn-sm"
onclick="return confirm('Yakin ingin menghapus kategori ini?')">

🗑️ Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center py-5">

🌼 Belum ada kategori

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

@endsection