<x-guest-layout>


    <div class="form-box">
        <h1>Sign Up</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <div class="input-field">
                    <i class='bx bxs-user icon'></i>
                    <input type="text" name="name" id="name" placeholder="Name" :value="old('name')" required> 
                    <x-input-error :messages="$errors->get('name')"/> 
                </div>

                <div class="input-field">
                    <i class='bx bx-envelope icon'></i>
                    <input type="email" name="email" id="email" placeholder="Email" :value="old('email')" required> 
                    <x-input-error :messages="$errors->get('email')"/> 
                </div>

                <div class="input-field icon">
                    <i class='bx bxs-lock-alt icon'></i>
                    <input type="password" name="password" id="password" placeholder="Password" :value="old('password')" required>
                    <x-input-error :messages="$errors->get('password')" />
                </div>
  
                <div class="input-field icon">
                    <i class='bx bxs-lock-alt icon'></i>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password_Confirmation" :value="old('password_confirmation')" required>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already Registered?') }}
                    </a>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    <button class="x-primary-button ms-4" style="background: linear-gradient(45deg, #ffafbd, #ffc3a0); color: white; font-size: 1em; font-weight: bold; padding: 10px 20px; border: none; border-radius: 25px; cursor: pointer; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden; text-align: center;">
                        <span>{{ __('Register') }}</span>
                    </button>
                </div>
                
            </div>

            
            
        </form>
    </div>




        
    </form>
</x-guest-layout>
