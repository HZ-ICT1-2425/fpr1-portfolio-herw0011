<section class="blog-section">
    <article class="blog-article">
        <a class="blog-date">{!! $post->created_at !!}</a>
        <a class="blog-title" href={{route("blogs.show", $post)}}>{!! $post->title !!} </a>
        <p class="blog-slug">{!! $post->slug !!}</p>
    </article>
</section>
