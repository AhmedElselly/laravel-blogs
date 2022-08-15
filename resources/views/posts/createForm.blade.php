<x-layout>
    <div class="form-container">
        <h1 class="text-lg">form</h1>
        <form action="/create" method="POST" class="flex flex-col form" enctype="multipart/form-data">
            @csrf
            <input class="input" type="text" name="title" placeholder="Title">
            <input class="input" type="text" name="description" placeholder="Description">
            <button class="btn">Submit</button>
        </form>
    </div>
</x-layout>