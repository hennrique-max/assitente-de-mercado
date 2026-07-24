<x-layout>
   <mains class="py-10">
    <h1 class="text-3xl font-bold mb-4">
        dashboard
    </h1>

    <p>
        bem vindo, {{ auth()->user()->name }}!
    </p>
    </mains>
</x-layout>