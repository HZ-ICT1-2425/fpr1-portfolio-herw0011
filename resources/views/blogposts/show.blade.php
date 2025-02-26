<x-layouts.layout>
<section class="blog-section">
    <article class="blog-article">
        <a class="blog-date">{!! $post->created_at !!}</a>
        <h3 class="blog-title">{!! $post->title !!}</h3>
        <p class="blog-slug">{!! $post->body !!}</p>
    </article>
    <a href="{{ route('blogs.edit', $post) }}">Edit this post</a>
</section>
    <form method="POST" action="{{route('blogs.destroy', $post)}}">
    @csrf
    @method('DELETE')
        <button type="submit">Delete Post</button>
    </form>
</x-layouts.layout>
