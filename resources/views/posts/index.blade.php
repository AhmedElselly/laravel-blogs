<x-layout>
    <x-header/>
    @foreach($posts as $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <p>{{$post->user->name}}</p>
    @endforeach
</x-layout>