<x-layaout>
    <h1 class="text-xl font-bold-serif">Log In</h1>

    <form action="/login" method="POST" class=font-serif>
        @csrf
    <div>
        <x-input title="Email" type="text" nombre="email">
        @error('email')
            <p>{{$message}} </p>
         @enderror
        </div>
        <div>
            <x-input tittle="Password" type="password" nombre="password">
            @error('password')
                <p>{{$message}} </p>
            @enderror
        </div>
        <button type="submit" class="text-xx border p-1 font-serif">Log in</button>
    </form>
</x-layaout>
