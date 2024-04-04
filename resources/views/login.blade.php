<x-layout>
    <h1 class="text-3xl font-bold text-center font-fuente">Log In</h1>
    <form class=text-center action="/login" method="POST">
   
        
        @csrf

    <div class="space-y-10">

        <x-input title="Email" type="text" nombre="email"/>
        @error('email')
            <p>{{$message}}</p>
         @enderror
        </div>

        <div class="space-y-8">
            <x-input  title="Password" type="password" nombre="password"/>
            @error('password')
                <p>{{$message}} </p>
            @enderror
        </div>

        <button type="submit" class="text-xl border mt-5 p-4 font-serif">Log in</button>
        
    </form>
</x-layout>
