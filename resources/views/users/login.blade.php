<x-layout>
    <div class="register-container">
        <h1 class="register-header">Login</h1>
        <form action="/login/user" method="POST">
            @csrf
            <input type="text" name='email' placeholder="email">
            <input type="password" name='password' placeholder="***********">
            <button class="btn">Login</button>
        </form>
    </div>
</x-layout>