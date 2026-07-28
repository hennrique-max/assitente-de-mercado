<x-layout>
    <main class="py-10">
        <x-navbar/>
    <h1 class="text-3xl font-bold mb-4 text-center">
         configurações
        </h1>

        <a href="{{ route('compra.create') }}" class="border-2 border-green-100 p-2 inline-block mb-4">
            registrar na lista de compra
        </a>

        @session('sucess')
            <div class="flex">
                <p>
                    {{ session('sucess') }}
                </p>
            </div>
        @endsession


        <h2 class="text-xl mt-4 mb-2">
            lista de produtos
        </h2>

        <ul>
             @forelse($compra as $item) 
                <li class="compra-shadow-lg flex items-center justify-between mb-2 p-2 border rounded">
                   
                
                        
                        <p class="font-bold text-xl">
                            {{ $item->number ?? '' }} - {{ $item->name }}
                        </p>
                        
                        <p class="text-gray-500">
                            ({{ $item->compralog->count() }})
                        </p>
                    </form>

                    
                    <form action="{{ route('compra.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button class="bg-red-500 text-white p-1 hover:opacity-50 rounded">
                            <x-icons.trash/>   
                        </button>
                    </form>

                </li>
            @empty
                <p>
                    sem compras para fazer
                </p>
            @endforelse
        </ul>
    </main>
</x-layout>
