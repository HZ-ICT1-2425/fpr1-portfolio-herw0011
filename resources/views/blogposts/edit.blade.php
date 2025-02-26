<x-layouts.layout>
    <div class="box">
        <form action="{{ route('blogs.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <h1 class="title is-4">Create a New Blog Post</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please  fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="title" value="{{old('title', $post)}}"
                           class="input @error('title') is-danger @enderror">
                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control has-icons-right">
                    <input type="text" name="slug" value="{{old('slug', $post)}}"
                           class="input @error('slug') is-danger @enderror">
                    @error('slug')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('slug')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control has-icons-right">
                    <x-ui.wysiwyg name="body" rows="15" class="@error('body') is-danger @enderror"
                                  value="{{old('body', $post)}}"></x-ui.wysiwyg>
                    @error('body')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
                <div class="control">
                    <a type="button" href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                </div>
                <div class="control">
                    <button type="reset" class="button is-warning">Reset</button>
                </div>
            </div>
        </form>
    </div>
</x-layouts.layout>
