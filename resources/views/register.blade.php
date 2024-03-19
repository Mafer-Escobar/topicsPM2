<div>
    <h1 class="font-serif"> Register</h1>

    <form class="/register" method="post">
        @csrf

        <div>
            <label for=""class=font-serif>Name</label>
            <input type="text" nombre="nombre">
            @error('nombre')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div>
            <label for="" class=font-serif>Email</label>
            <input type="text" nombre="email">
            @error('email')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div>
            <label for="" class=font-serif>Password</label>
            <input type="password" nombre="password">
            @error('password')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div>
            <label for="" class=font-serif>Birthday</label>
            <input type="date" nombre="birthday">
            @error('birthday')
                <p>{{$message}} </p>
            @enderror
        </div>

        <button type="submit">Send</button>
    </form>
</div>




