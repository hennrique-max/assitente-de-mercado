<x-layout>
   <mains class="py-10">
    <h1 class="text-3xl font-bold mb-4 text-center">
        dashboard
    </h1>

   <a href="{{route('compra.create')}}" clas="border-2 border-green-100">
    registra na lista de compra
   </a>

   @session('sucess')
   <div class="flex">
        <p>
        {{session('sucess')}}
        </p>
    </div>
    @endsession
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
              {{ $item->number}}-{{ $item->name }}
              
              
            </p>
            <p>
                ({{$item->compralog->count()}})
            </p>
            <form action="{{route('compra.destroy', $item)}}" method="POST">
                
                @csrf
                @method('DELETE')
            <button class="bg-red-500 tex-white p-1 hover:opacity-50">
            <x-icons.trash/>   
            </button>
        </form>
        </div>
        </li>
        @empty
            <p>
                sem compras para fazer
            </p>
            <a href="/compra/cadastrar" class="text-blue-500 hover:text-blue-700">
                 fazer uma lista de compra
            </a>
  @endforelse
    </ul>
    </mains>
</x-layout>