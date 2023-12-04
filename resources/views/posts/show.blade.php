<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="mb-2 text-lg text-gray-500">
            {{$post->extract}}
        </div>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="md:col-span-2">
                <figure>
                    @if ($post->image)
                    <img class="object-cover object-center w-full h-80" src="{{Storage::url($post->image->url)}}"
                        alt="">
                    @else
                    <img class="object-cover object-center w-full h-72"
                        src=" https://cdn.pixabay.com/photo/2023/11/09/07/40/house-8376550_1280.jpg" alt="imagen blog">

                    @endif

                </figure>
                <div class="mt-4 text-base text-gray-500">
                    {{$post->body}}

                </div>

            </div>
            <aside>
                <h1 class="mb-4 font-bold text-gray-600 text-2x1">Mas en x{{$post->catergory->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                    <li>
                        <a href="{{route('posts.show',$similar)}}" class="flex">
                            @if ($post->image)
                            <img class="object-cover object-center w-full h-80"
                                src="{{Storage::url($post->image->url)}}" alt="">
                            @else
                            <img class="object-cover object-center w-full h-72"
                                src=" https://cdn.pixabay.com/photo/2023/11/09/07/40/house-8376550_1280.jpg"
                                alt="imagen blog">

                            @endif
                            <span class="" ml-2 text-gray-600>{{$similar->name}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>

</x-app-layout>