@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">


                @if ($post->image)

                    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">


                @else

                <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/12/13/16/21/stork-5828727_960_720.jpg" alt="">


                @endif

                <div class="px-6 py-4 ">
                    <h1 class="font-bold text-xl mb-2 ">
                        <a href="{{route('posts.show', $post)}}"> {{$post->name}} </a>
                    </h1>

                    <div class="text-gray-700 text-base">

                        {!!$post->extract!!}

                    </div>
                </div>

                <div class="px-6 pt-4 pb-2">

                    @foreach($post->tags as $tag)

                        <a class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full" href="{{route('posts.tag',$tag)}}"> {{$tag->name}} </a>

                    @endforeach
                
                </div>



            </article>