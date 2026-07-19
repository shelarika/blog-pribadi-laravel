<x-guest-layout>

<style>

body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#FFF6FA,#F1FFF8);
}

form{

    background:white;

    padding:35px;

    border-radius:25px;

    box-shadow:0 15px 35px rgba(0,0,0,.08);

    border:2px solid #F9D5E5;

}

label{

    color:#EC4899 !important;

    font-weight:600;

}

input{

    border-radius:14px !important;

    border:1px solid #A7F3D0 !important;

    background:#FCFFFD !important;

}

input:focus{

    border-color:#6EE7B7 !important;

    box-shadow:0 0 0 .2rem rgba(110,231,183,.25) !important;

}

button{

    width:100%;

    background:linear-gradient(135deg,#F472B6,#6EE7B7)!important;

    color:white!important;

    border:none!important;

    border-radius:14px!important;

    padding:12px;

    font-size:15px;

    font-weight:600;

    transition:.3s;

}

button:hover{

    transform:translateY(-2px);

    box-shadow:0 10px 20px rgba(110,231,183,.30);

}

a{

    color:#EC4899!important;

    font-weight:600;

}

a:hover{

    color:#10B981!important;

}

.title{

    text-align:center;

    margin-bottom:25px;

}

.title h2{

    color:#EC4899;

    font-size:30px;

    font-weight:700;

}

.title p{

    color:#666;

}

</style>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="title">
        <h2>🤖 Registrasi Administrator</h2>
        <p>Silakan lengkapi data untuk membuat akun administrator.</p>
    </div>

    <!-- Nama -->
    <div>
        <x-input-label for="name" :value="__('Nama Lengkap')" />
        <x-text-input id="name"
            class="block mt-1 w-full"
            type="text"
            name="name"
            :value="old('name')"
            required
            autofocus
            autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Alamat Email')" />
        <x-text-input id="email"
            class="block mt-1 w-full"
            type="email"
            name="email"
            :value="old('email')"
            required
            autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Kata Sandi')" />

        <x-text-input id="password"
            class="block mt-1 w-full"
            type="password"
            name="password"
            required
            autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Konfirmasi Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />

        <x-text-input id="password_confirmation"
            class="block mt-1 w-full"
            type="password"
            name="password_confirmation"
            required
            autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-between mt-6">

        <a href="{{ route('login') }}">
            Sudah memiliki akun?
        </a>

        <x-primary-button class="ms-4">
            Daftar
        </x-primary-button>

    </div>

</form>

</x-guest-layout>