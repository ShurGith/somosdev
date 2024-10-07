
<div class="flex flex-col rounded-2xl w-96 bg-[#ffffff] shadow-xl">
    <figure class="flex justify-center items-center rounded-2xl bg-gray-100">
        <img src="{{ asset('images/somosdevslogo.png') }}" alt="Card Preview" class="rounded-t-2xl">
    </figure>
    <div class="flex flex-col p-8">
        <div class="text-2xl font-bold   text-[#374151] pb-6">{{ $post->title }}</div>
        <div class=" text-sm   text-[#374151]">{{ $post->user->name }}</div>
        <div class="flex justify-end pt-6">
            <button class="bg-[#7e22ce] text-[#ffffff]  font-bold text-base  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Leer Artículo</button>
        </div>
    </div>
</div>
