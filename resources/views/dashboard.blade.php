<x-layout>
    <main class="py-10">
        <x-navbar/>
    <h1 class="text-3xl font-bold mb-4 text-center">
            dashboard
        </h1>

        @session('sucess')
            <div class="flex">
                <p>
                    {{ session('sucess') }}
                </p>
            </div>
        @endsession

        <p>
            bem vindo, {{ auth()->user()->name }}!
        </p>

        <h2 class="text-xl mt-4 mb-2">
            lista de produtos
        </h2>

        <ul>
            @forelse($compra as $item) 

            
            
                <li class="compra-shadow-lg flex items-center justify-between mb-2 p-2 border rounded">
                   
                   
                    <form action="{{ route('compra.toggle', $item->id) }}"
                     method="POST" 
                     id="form-{{ $item->id }}" 
                    class="flex gap-2 items-center">
                        @csrf

                        <input 
                            type="checkbox" 
                            class="w-5 h-5 cursor-pointer" 
                            {{$item->is_completed ? 'checked' : ''}}
                            {{ $item->wasCompletedToday() ? 'checked' : '' }} 
                            onchange="document.getElementById('form-{{ $item->id }}').submit()"
                        />
                        
                        <p class="font-bold text-xl">
                            {{ $item->number ?? '' }} - {{ $item->name }}
                        </p>
                        
                        <p class="text-gray-500">
                            ({{ $item->compralog->count() }})
                        </p>
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