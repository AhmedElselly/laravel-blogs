<x-layout>
    <div class="register-container">
        <h1 class="register-header">Register</h1>
        <form action="/register/user" method="POST">
            @csrf
            <input type="text" name='email' placeholder="email">
            <input type="text" name='name' placeholder="name">
            <input type="password" name='password' placeholder="***********">
            <input type="password" name='confirmPassword' placeholder="***********">
            <button class="btn">Signup</button>
        </form>
    </div>
</x-layout>