<x-app-layout>

        <h1>Lista users</h1>

        @foreach ($users as $user)

            <p>{{$user->name}} - {{$user->email}}</p>
        
        @endforeach
</x-app-layout>
