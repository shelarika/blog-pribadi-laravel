@extends('layouts.app')

@section('content')

<style>

body{
    background:#F8F7FC;
    font-family:'Poppins',sans-serif;
}

/* Header */

.header-box{
    background:linear-gradient(135deg,#FDE2F3,#E9D5FF,#D8F3DC);
    border-radius:25px;
    padding:30px;
    margin-bottom:30px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.header-box h2{
    color:#8E7CC3;
    font-weight:bold;
    margin:0;
}

/* Form */

.form-card{
    background:white;
    border-radius:25px;
    padding:35px;
    max-width:700px;
    margin:auto;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

label{
    font-weight:600;
    color:#666;
}

.form-control{
    border-radius:15px;
    border:1px solid #E5D4FF;
    padding:12px;
}

.form-control:focus{
    border-color:#C084FC;
    box-shadow:0 0 10px rgba(192,132,252,.3);
}

/* Button */

.btn-update{
    background:#A5D8FF;
    color:white;
    border:none;
    border-radius:30px;
    padding:10px 25px;
    font-weight:600;
}

.btn-update:hover{
    background:#74C0FC;
    color:white;
}

.btn-back{
    background:#D8B4FE;
    color:white;
    border:none;
    border-radius:30px;
    padding:10px 25px;
    font-weight:600;
}

.btn-back:hover{
    background:#C084FC;
    color:white;
}

</style>

<div class="container py-4">

    <div class="header-box">

        <h2>🌸 Edit Kategori</h2>

        <p class="text-muted mt-2">
            Perbarui data kategori dengan mudah.
        </p>

    </div>

    <div class="form-card">

        <form action="{{ route('categories.update',$category->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>📂 Nama Kategori</label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name',$category->name) }}"
                    required>

            </div>

            <div class="mb-4">

                <label>📝 Deskripsi</label>

                <textarea
                    name="description"
                    class="form-control"
                    rows="5">{{ old('description',$category->description) }}</textarea>

            </div>

            <button type="submit" class="btn btn-update">
                ✨ Update
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-back ms-2">
                ⬅️ Kembali
            </a>

        </form>

    </div>

</div>

@endsection