<x-layout>
   <mains class="py-10">
    <h1 class="text-3xl font-bold mb-4 text-center">
        dashboard
    </h1>

   <a href="{{route('compra.create')}}">
    crie uma nova lista de compra
   </a>
    
    <p>
        bem vindo, {{ auth()->user()->name }}!
    </p>

    <H2 class="text-xl mt-4">
        lista de produtos
    </H2>
    <ul>
        @forelse($compra as $item) 
        <li class="pl-4">
            <div class="flex gap-2 item-center">
            <p class="font-bold text-xl ">
              -{{ $item->name }}
            </p>
            <p>
                ({{$item->compralog->count()}})
            </p>
        </div>
        </li>
        @empty
            <p>
                sem compras para fazer
            </p>
            <a href="/compra/cadastrar">
                 fazer uma lista de compra
            </a>
  @endforelse
    </ul>
    </mains>
</x-layout>