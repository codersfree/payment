<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 lg:px-8 py-12">
        @foreach ($articles as $article)
            <article class="card mb-6">

                <img class="h-72 w-full object-cover object-center" src="{{Storage::url($article->image)}}" alt="">

                <div class="card-body">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('articles.show', $article)}}">{{$article->title}}</a>
                    </h1>

                    <div class="text-gray-700">
                        {{$article->extract}}
                    </div>
                </div>
            </article>
        @endforeach

        {{$articles->links()}}
    </div>

</x-app-layout>