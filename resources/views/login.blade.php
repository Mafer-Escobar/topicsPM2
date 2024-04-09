<x-layout>
    <div class="grid grid-cols-2 gap-4 place content-center py-8">
        <img class= "" src="https://i.pinimg.com/564x/5a/55/92/5a55924b45893cd7be1671df8a62a5d5.jpg" alt="">

        <div class="w-80 p-8 bg-red-200 rounded-lg shadow-md">

            <h1 class="text-3xl font-bold text-center">Log In</h1>
            <form class="text-center" action="/login" method="POST">
                @csrf

                <div class="space-y-10">
                    <x-input title="Email" type="text" nombre="email" />
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-8 ">
                    <x-input title="Password" type="password" nombre="password" />
                    @error('password')
                        <p>{{ $message }} </p>
                    @enderror
                </div>

                <button type="submit" class="text-xl border mt-8 p-6 font-serif">Log in</button>
            </form>
        </div>

    </div>
</x-layout>
