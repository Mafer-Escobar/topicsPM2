<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

    <form action="/register" method="post">
        @csrf
        <h1>Register</h1>

         <div>
            <label for="">Name</label>
            <input type="text" namr="name">
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="">Password</label>
             <input type="password" name="password">
        </div>

         <div>
            <label for="">Birthday</label>
            <input type="date" name="birthday">
        </div>

        <button type="submit">Send</button>
    </form>
</div>
