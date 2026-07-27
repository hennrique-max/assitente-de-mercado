<x-layout>
   <mains class="py-10">
<h1>registrar  nova compra</h1>

<form action="{{route('compra.store')}}" method="POST" class=gap-2>
   @csrf

     @csrf
            <div>
            <label for="name">
                nome do produto
            </label>
             <input 
             type="text" 
             name="name" 
             placeholder="ex: leite" 
             class="w-full px-3 py-2 border rounded @error('name') border-red-500 @enderror"> 
            @error('name')
             <p class="flex text-red-500 text-xs mt-1">
                {{ $message }}
             </p>
            @enderror
            </div>
            <div>

            <label for="number">
                nome do produto
            </label>
             <input 
             type="number" 
             name="number" 
             placeholder="1" 
             class="w-full px-3 py-2 border rounded @error('number') border-red-500 @enderror"> 
            @error('number')
             <p class="flex text-red-500 text-xs mt-1">
                {{ $message }}
             </p>
            @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
               registrar
            </button>
</form>
</mains>
</x-layout>