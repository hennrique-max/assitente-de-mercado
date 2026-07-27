
<x-layout>
   <mains class="py-10">
    <h1 class="flex text-3x1">
        Bem-vindo à página principal!</h1>
    </mains>



    @auth
        <p>
            bem vindo, {{ auth()->user()->name }}!
        </p>
    @endauth
</x-layout>