<x-guest-layout>

<div class="form-box">
        <h1>Forgot Password</h1>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


        <!-- Email Address -->
        <div class="input-field">
                    <i class='bx bx-envelope icon'></i>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="x-primary-button ms-4" style="background: linear-gradient(45deg, #ffafbd, #ffc3a0); color: white; font-size: 1em; font-weight: bold; padding: 10px 20px; border: none; border-radius: 25px; cursor: pointer; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden; text-align: center;">
                        <span>{{ __('Email Password Reset Link') }}</span>
                    </button>
                </div>
    </form>
</x-guest-layout>
