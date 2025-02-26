<x-layouts.layout>
<body>
<main>
    @foreach($posts as $post)
        <x-posts.post.list :post="$post"></x-posts.post.list>
    @endforeach
        <a class="button is-primary" href="{{route('blogs.create')}}">Create a New Blog Post</a>
</main>
</body>

</html>
    </x-layouts.layout>
