@props(['post'])
<article class="mb-8 bg-white rounded-lg shadow-lg">
    <img class="object-cover object-center w-full h-72" src="{{Storage::url($post->image->url)}}" alt="imagen blog">
    <div class="px-6 py-4">
        <h1 class="mb-2 font-bold-text-xl">
            <a href="{{route('posts.show',$post)}}">
                {{$post->name}}</a>
        </h1>
        <div class="text-base text-gray-700">
            {{$post->extract}}
        </div>
    </div>
    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag )
        <a href="{{route('post.tag',$tag)}}"
            class="inline-block px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-full">{{$tag->name}}</a>
        @endforeach
    </div>
</article>