<div style= "display: flex; justify-content: center; aling-items: center; height 100vh;">
    <form action="/Register" method="post" style="background-color #ecfdf5; padding: 20px; border-radius: 10px; width: 400px">
    @csrf
    <div style= "margin-botton: 15px; text-aling: center;">
            <label for= "name" style="color: #fffbeb; display: block; margin-bottom: 5px; font-size: 20px" >Name:</label>
            <input type="text" name="name" style="width: 100%; padding: 8px; margin-botoom: 8px; borde: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 20px;">
            @error('name')
                <p style="color: #f0fdf4; margin-top: -8px; margin-botton 8px; font-size: 20px;"> {{$message}}</p>
            @enderror
        </div>

    <div style= "margin-botton: 15px; text-aling: center;">
            <label for="email"style="color: #fffbeb; display: block; margin-bottom: 5px; font-size: 20px" >Email:</label>
            <input type="text" name="email"  style="width: 100%; padding: 8px; margin-botoom: 8px; borde: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 20px;">
            @error('email')
                <p>{{$message}} </p>
            @enderror
        </div>

     <div style= "margin-botton: 15px; text-aling: center;" >
            <label for="password" style="color: #fffbeb; display: block; margin-bottom: 5px; font-size: 20px">Password:</label>
            <input type="password" name="password" style="width: 100%; padding: 8px; margin-botoom: 8px; borde: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 20px;">
            @error('password')
                <p "color: #f0fdf4; margin-top: -8px; margin-botton 8px; font-size: 20px;>{{$message}} </p>
            @enderror
        </div>

     <div style= "margin-botton: 15px; text-aling: center;" >
            <label for="birthday" style="color: #fffbeb; display: block; margin-bottom: 5px; font-size: 20px">Birthday:</label>
            <input type="date" name="birthday" style="width: 100%; padding: 8px; margin-botoom: 8px; borde: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 20px;" >
            @error('birthday')
                <p>{{$message}} </p>
            @enderror
        </div>

    <div style= "text-align: center;">
        <button type="submit" class="background-color: #fffbeb; color: red; font-size: 18px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; ">Register</button>
    </form>
</div>




