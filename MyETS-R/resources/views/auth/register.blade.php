<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>

  <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Logo di tengah atas -->
    <div style="display: flex; justify-content: center; margin-bottom: 20px;">
      <img src="{{ asset('images/companylogo.png') }}" alt="Logo" style="width: 150px;">
    </div>

    <!-- Form Register -->
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Nama Lengkap -->
      <div>
        <x-input-label for="name" :value="__('Nama Lengkap')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <!-- Email Address -->
      <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Phone Number -->
      <div class="mt-4">
        <x-input-label for="phone_number" :value="__('Nomor Telepon')" />
        <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <!-- Button Daftar -->
      <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
          {{ __('Anda memiliki akun?') }}
        </a>

        <x-primary-button class="ms-3">
          {{ __('Daftar') }}
        </x-primary-button>
      </div>
    </form>
  </x-guest-layout>

  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
