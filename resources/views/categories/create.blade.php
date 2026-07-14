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
    border-radius:25px;
    padding:35px;
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

/* Form */

.form-card{
    background:#fff;
    border:none;
    border-radius:25px;
    padding:35px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

label{
    font-weight:600;
    color:#666;
}

.form-control{
    border-radius:15px;
    border:2px solid #F1E4FF;
    padding:12px;
}

.form-control:focus{
    border-color:#C084FC;
    box-shadow:0 0 12px rgba(192,132,252,.25);
}

/* Button */

.btn-save{
    background:#C084FC;
    color:white;
    border:none;
    border-radius:30px;
    padding:10px 25px;
    font-weight:600;
}

.btn-save:hover{
    background:#A855F7;
    color:white;
}

.btn-back{
    background:#A7F3D0;
    color:#333;
    border:none;
    border-radius:30px;
    padding:10px 25px;
    font-weight:600;
}

.btn-back:hover{
    background:#6EE7B7;
}

</style>

<div class="container py-4">

    <div class="banner">
        <h2>➕ Tambah Kategori</h2>
        <p>
            Tambahkan kategori baru agar artikel lebih rapi dan mudah dikelompokkan.
        </p>
    </div>

    <div class="form-card">

        <form action="{{ route('categories.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label>📂 Nama Kategori</label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                    required>

            </div>

            <div class="mb-4">

                <label>📝 Deskripsi</label>

                <textarea
                    name="description"
                    class="form-control"
                    rows="5">{{ old('description') }}</textarea>

            </div>

            <button type="submit" class="btn btn-save">
                💾 Simpan
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-back ms-2">
                ⬅️ Kembali
            </a>

        </form>

    </div>

</div>

@endsection