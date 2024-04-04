<div>
    
    <h1 class="text-3xl font-bold text-center">Register</h1>
    <form class=text-center action="/Register" method="POST" >

    <form class="/register" method="post">
        @csrf

        

        <div class= "space-y-10">
            <label for=""class=font-serif>Name</label>
            <input type="text" nombre="nombre">
            @error('nombre')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div class= "space-y-10">
            <label for="" class=font-serif>Email</label>
            <input type="text" nombre="email">
            @error('email')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div class="space-y-8">
            <label for="" class=font-serif>Password</label>
            <input type="password" nombre="password">
            @error('password')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div class= "space-y-8">
            <label for="" class=font-serif>Birthday</label>
            <input type="date" nombre="birthday">
            @error('birthday')
                <p>{{$message}} </p>
            @enderror
        </div>

        <button type="submit" class="text-xl border mt-5 p-4 font-serif">Register</button>
    </form>
</div>




