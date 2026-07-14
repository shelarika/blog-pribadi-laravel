<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Login | Blog Pribadi</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:30px;

background:linear-gradient(135deg,#FFF7FB,#FDF2F8,#ECFDF5);

overflow-x:hidden;
overflow-y:auto;

position:relative;

}

/* Background Glow */

body::before{

content:"";

position:absolute;

width:420px;
height:420px;

background:#F9A8D4;

border-radius:50%;

filter:blur(170px);

top:-120px;
left:-120px;

opacity:.28;

}

body::after{

content:"";

position:absolute;

width:420px;
height:420px;

background:#A7F3D0;

border-radius:50%;

filter:blur(170px);

bottom:-120px;
right:-120px;

opacity:.28;

}

/* Card */

.login-container{

width:1320px;

max-width:100%;

background:rgba(255,255,255,.55);

backdrop-filter:blur(25px);

border-radius:35px;

overflow:hidden;

display:flex;

box-shadow:0 25px 70px rgba(0,0,0,.12);

position:relative;

z-index:10;

}

/* Kiri */

.left{

width:45%;

padding:60px;

display:flex;

justify-content:center;

align-items:center;

background:linear-gradient(
135deg,
#FFFDFE 0%,
#FFF6FB 45%,
#F0FDF4 100%
);

position:relative;

}

.left::before{

content:"";

position:absolute;

width:240px;

height:240px;

background:#FBCFE8;

border-radius:50%;

filter:blur(130px);

top:-70px;

left:-70px;

opacity:.30;

}

.left::after{

content:"";

position:absolute;

width:220px;

height:220px;

background:#BBF7D0;

border-radius:50%;

filter:blur(120px);

bottom:-70px;

right:-70px;

opacity:.25;

}

.form-box{

width:100%;

max-width:430px;

position:relative;

z-index:5;

}

.welcome{

display:inline-block;

padding:10px 22px;

border-radius:30px;

background:#FCE7F3;

color:#EC4899;

font-size:14px;

font-weight:600;

margin-bottom:25px;

}

.logo{

font-size:58px;

font-weight:700;

line-height:60px;

margin-bottom:15px;

background:linear-gradient(90deg,#EC4899,#6EE7B7);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;

}

.desc{

font-size:18px;

color:#666;

line-height:34px;

margin-bottom:35px;

}

.input-group{

margin-bottom:22px;

}

.input-group label{

display:block;

font-weight:600;

margin-bottom:10px;

color:#444;

}

.input{

width:100%;

height:58px;

padding:0 20px;

border-radius:18px;

border:2px solid #F3F4F6;

font-size:15px;

background:white;

transition:.35s;

outline:none;

}

.input:focus{

border-color:#EC4899;

box-shadow:0 0 0 5px rgba(236,72,153,.12);

}
.btn-login{

width:100%;

height:58px;

border:none;

border-radius:18px;

background:linear-gradient(90deg,#EC4899,#6EE7B7);

color:white;

font-size:18px;

font-weight:700;

cursor:pointer;

transition:.35s;

box-shadow:0 15px 35px rgba(236,72,153,.25);

}

.btn-login:hover{

transform:translateY(-3px);

box-shadow:0 20px 40px rgba(236,72,153,.35);

}

.row-between{

display:flex;

justify-content:space-between;

align-items:center;

margin:25px 0;

font-size:15px;

}

.row-between a{

text-decoration:none;

color:#EC4899;

font-weight:600;

}

.btn-register{

display:block;

margin-top:22px;

text-align:center;

text-decoration:none;

padding:15px;

border-radius:18px;

border:2px solid #FBCFE8;

background:white;

color:#EC4899;

font-weight:700;

transition:.3s;

}

.btn-register:hover{

background:#FDF2F8;

}

/* Bagian kanan */

.right{

width:55%;

padding:60px;

display:flex;

flex-direction:column;

justify-content:center;

align-items:center;

text-align:center;

background:linear-gradient(160deg,#EC4899,#F472B6,#6EE7B7);

position:relative;

overflow:hidden;

color:white;

}

.right::before{

content:"";

position:absolute;

width:260px;

height:260px;

background:rgba(255,255,255,.15);

border-radius:50%;

top:-90px;

right:-90px;

}

.right::after{

content:"";

position:absolute;

width:220px;

height:220px;

background:rgba(255,255,255,.15);

border-radius:50%;

bottom:-80px;

left:-80px;

}

.hero-image{

width:380px;

max-width:100%;

height:auto;

margin-bottom:30px;

border-radius:20px;

box-shadow:0 25px 45px rgba(0,0,0,.18);

animation:float 4s ease-in-out infinite;

}

@keyframes float{

0%{transform:translateY(0);}
50%{transform:translateY(-12px);}
100%{transform:translateY(0);}

}

.badge-title{

padding:10px 24px;

background:rgba(255,255,255,.18);

border-radius:30px;

font-size:13px;

letter-spacing:2px;

margin-bottom:20px;

backdrop-filter:blur(10px);

}
.right h2{

font-size:64px;

font-weight:800;

line-height:72px;

margin:20px 0;

text-shadow:0 5px 15px rgba(0,0,0,.15);

}

.right p{

font-size:19px;

line-height:34px;

max-width:470px;

margin-bottom:35px;

opacity:.95;

}

.tech{

display:flex;

flex-wrap:wrap;

justify-content:center;

gap:14px;

max-width:520px;

}

.tech span{

background:rgba(255,255,255,.20);

padding:12px 22px;

border-radius:30px;

font-weight:600;

backdrop-filter:blur(12px);

transition:.3s;

cursor:pointer;

box-shadow:0 8px 20px rgba(0,0,0,.10);

}

.tech span:hover{

background:white;

color:#EC4899;

transform:translateY(-5px);

}

.footer{

margin-top:28px;

font-size:14px;

color:#888;

text-align:center;

}

.footer span{

color:#EC4899;

font-weight:700;

}

input:focus{

border-color:#EC4899!important;

box-shadow:0 0 0 5px rgba(236,72,153,.15);

}

@media(max-width:1100px){

.login-container{

flex-direction:column;

width:96%;

margin:25px auto;

}

.left,

.right{

width:100%;

padding:45px;

}

.right h2{

font-size:46px;

line-height:55px;

}

.hero-image{

width:300px;

}

.tech{

max-width:100%;

}

}

@media(max-width:600px){

.left,

.right{

padding:25px;

}

h1{

font-size:42px;

}

.right h2{

font-size:36px;

line-height:45px;

}

.hero-image{

width:230px;

}

.row-between{

flex-direction:column;

align-items:flex-start;

gap:10px;

}

}
</style>
<body>

<div class="login-container">

    <!-- KIRI -->
    <div class="left">

        <div class="form-box">

            <div class="welcome">
                👋 SELAMAT DATANG KEMBALI
            </div>

            <h1>
                <span style="color:#EC4899;">Blog</span>
                <span style="color:#6EE7B7;">Pribadi</span>
            </h1>

            <p class="desc">
                Masuk untuk mengelola artikel,
                membagikan wawasan,
                dan membuat konten menarik
                dengan tampilan yang modern
                dan elegan.
            </p>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <label>Email</label>

                <input
                    class="input"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    placeholder="Masukkan email">

                @error('email')
                    <div style="color:red;font-size:14px;margin-top:5px;">
                        {{ $message }}
                    </div>
                @enderror


                <label style="margin-top:18px;">
                    Password
                </label>

                <input
                    class="input"
                    type="password"
                    name="password"
                    required
                    placeholder="Masukkan password">

                @error('password')
                    <div style="color:red;font-size:14px;margin-top:5px;">
                        {{ $message }}
                    </div>
                @enderror


                <div class="row-between">

                    <label>

                        <input
                            type="checkbox"
                            name="remember">

                        Remember Me

                    </label>

                    @if(Route::has('password.request'))

                        <a href="{{ route('password.request') }}">

                            Lupa Password?

                        </a>

                    @endif

                </div>

                <button
                    class="btn-login"
                    type="submit">

                    🚀 Login

                </button>

                @if(Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="btn-register">

                        👤 Daftar Akun

                    </a>

                @endif

            </form>

            <div class="footer">

                © 2026 Blog Pribadi.
                All Rights Reserved.
                <span>❤</span>

            </div>

        </div>

    </div>


    <!-- KANAN -->

    <div class="right">

        <img
            src="{{ asset('images/login.jpeg') }}"
            class="hero-image"
            alt="Login">

        <div class="badge-title">

            BLOG PRIBADI

        </div>

        <h2>

            Code.<br>
            Learn.<br>
            Create.

        </h2>

        <p>

            Bangun website modern,
            pelajari pemrograman,
            tingkatkan kreativitas,
            dan bagikan pengetahuanmu
            kepada semua orang.

        </p>

        <div class="tech">

            <span>💻 Web Development</span>

            <span>📱 Responsive Design</span>

            <span>🗄 Database</span>

            <span>🔐 Cyber Security</span>

            <span>🤖 Artificial Intelligence</span>

            <span>☁ Cloud Computing</span>

        </div>

    </div>

</div>

</body>

</html>