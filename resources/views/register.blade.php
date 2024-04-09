<x-layout/>
<center>
<h1 class="place-content-center text-blue-700 mb-6 text-2xl font-bold pb-8 "> Register </h1>
</center>
<div style= "display: flex; justify-content: center; aling-items: center; height: 100vh;">
    <form action="/register" method="POST" style="background-color: #a2e7fc; padding: 15px; border-radius: 10px; width: 400px;">
        @csrf
        <div style= "margin-bottom: 15px; text-aling: center;">
            <label for= "name" style="color: hsl(303, 88%, 68%); display: block; margin-bottom: 6px; font-size: 20px;" >Name:</label>
            <input type="text" name="name" class="border border-[#cf0202]" style="width: 100%; padding: 9px; margin-botoom: 8px; rounded-md; box-sizing: border-box; font-size: 20px;">
            @error('name')
                <p style="color: #81ddd5; margin-top: -8px; margin-bottom: 8px; font-size: 20px;"> {{$message}}</p>
            @enderror
        </div>

         <div style= "margin-bottom: 15px; text-aling: center;">
            <label for="email"style="color: hsl(303, 88%, 68%); display: block; margin-bottom: 6px; font-size: 20px;" >Email:</label>
            <input type="text" name="email" class="border border-[#cf0202]" style="width: 100%; padding: 9px; margin-botoom: 8px; rounded-md; box-sizing: border-box; font-size: 20px;">
            @error('email')
                <p style="color: #17d321; margin-top: -8px; margin-bottom: 8px; font-size: 20px;"> {{$message}} </p>
            @enderror
        </div>

         <div style= "margin-bottom: 15px; text-aling: center;" >
            <label for="password" style="color: hsl(303, 88%, 68%); display: block; margin-bottom: 6px; font-size: 20px;">Password:</label>
            <input type="password" name="password" class="border border-[#cf0202]" style="width: 100%; padding: 9px; margin-botoom: 8px; rounded-md; box-sizing: border-box; font-size: 20px;">
            @error('password')
                <p style="color: #09c441; margin-top: -8px; margin-botton 8px; font-size: 20px;"> {{$message}} </p>
            @enderror
        </div>

         <div style= "margin-bottom: 15px; text-aling: center;" >
            <label for="birthday" style="color: hsl(303, 88%, 68%); display: block; margin-bottom: 6px; font-size: 20px;">Birthday:</label>
            <input type="date" name="birthday" class= "border border-[#cf0202]" style="width: 100%; padding: 9px; margin-botoom: 8px; rounded-md; box-sizing: border-box; font-size: 20px;" >
            @error('birthday')
                <p style="color: #19cf50; margin-top: -8px; margin-botton 8px; font-size: 20px;"> {{$message}} </p>
            @enderror
        </div>

         <div style= "text-align: center;">
        <button type="submit" class="background-color:#eb0505;  font-size: 18px; padding: 10px 20px; border border-xl none; rounded-md; cursor: pointer; ">Register</button>
    </form>
</div>
<x-layout/>




