<x-app-layout>
   
        <h1>Lista2</h1>

        <form action="{{ route('users.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">nome</label>
                <input type="text"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            
            <div class="form-group">
                <label for="email">email</label>
                <input type="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            

            <div class="form-group">
                <label for="password">password</label>
                <input type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    value="{{ old('password') }}"
                >
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn">Criar utilizador</button>


        </form>
   
</x-app-layout>
