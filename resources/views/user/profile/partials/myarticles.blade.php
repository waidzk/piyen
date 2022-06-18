<div class="w-full px-10 mx-auto">
    <h1 class="text-xl text-gray-600 test-center ml-12 my-3">Jumlah artikel: {{ $articles->count() }}</h1>
    @foreach ($articles as $article)
    <div class="w-full grid grid-cols-3 mb-3 place-items-center border-2 gap-6 md:gap-none md:flex md:flex-row">
        <!-- <div class="bg-cover bg-center h-72 overflow-hidden" style="background-image: url('https://source.unsplash.com/random/100x150');"></div> -->
        <img src="https://source.unsplash.com/random/160x210/?articles" alt="" width="100px" class="bg-cover bg-center overflow-hidden h-52 w-40 place-items-start md:w-52">
        <div class="col-span-2 pr-4">
            <p class="text-sm text-gray-400">{{ $article->created_at }}</p>
            <h2 class="text-xl font-bold text-pink-500">{{ $article->title }}</h2>
            <h3 class="text-sm text-gray-600 mb-2">Author: {{ $article->user->name }}</h3>
            <p class="text-sm">{{ str()->of($article->body)->limit(150) }}</p>
        </div>
    </div>
    @endforeach
</div>


