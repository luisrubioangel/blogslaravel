<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="mb-2 text-lg text-gray-500">
            {{$post->extract}}
        </div>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="md:col-span-2">
                <figure>
                    <img class="object-cover object-center w-full h-80" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>
                <div class="mt-4 text-base text-gray-500">
                    {{$post->body}}

                </div>

            </div>
            <aside>
                <h1 class="mb-4 font-bold text-gray-600 text-2x1">Mas en  x{{$post->catergory->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li>
                            <a href="{{route('posts.show',$similar)}}" class="flex">
                               <img class="object-cover object-center h-20 w-36" src="<?php echo "http://localhost"?>{{Storage::url($similar->image->url)}}" alt="" srcset="">
                               <span class=""ml-2 text-gray-600>{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>

</x-app-layout>
