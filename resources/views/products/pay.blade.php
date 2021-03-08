<x-app-layout>

    <div class="container py-12 grid grid-cols-12 gap-6">
        <div class="col-span-7">

            <article class="card">
                <div class="card-body">
                    <div class="flex">
                        <img class="w-48 h-28 object-cover" src="{{Storage::url($product->image)}}" alt="">
                        <div class="ml-4 flex justify-between items-center self-start flex-1">
                            <h1 class="text-gray-500 font-bold text-lg uppercase">{{$product->title}}</h1>
                            <p class="font-bold text-gray-500">{{$product->price}} USD</p>
                        </div>
                    </div>
                
                    <hr class="my-4">

                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi incidunt doloribus vel omnis minus blanditiis accusamus? Sed, tempora, autem quam quisquam  <a class="text-blue-500 font-bold" href="">Terminos y condiciones</a></p>
                </div>
            </article>

        </div>

        <div class="col-span-5">
            @livewire('product-pay', ['product' => $product])
        </div>
    </div>

</x-app-layout>