
<x-layout>
    <mains class="py-10">
   
   
    <section class="bg-white max-w-[600px] mx-auto p-10 border-2 ">
         <h1 class="text-3xl font-bold mb-4">
        faça seu login
    </h1>
    
    <form method="POST" action="{{ route('site.authenticate') }}" class="w-full max-w-sm">
            @csrf
            <div>
            <label for="email">
                Email:
            </label>
             <input 
             type="email" 
             name="email" 
             placeholder="voce@email.com" 
             class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror"> 
            @error('email')
             <p class="flex text    -red-500 text-xs mt-1">
                {{ $message }}
             </p>
            @enderror
            </div>
        
            <label for="password">
                Senha:
                </label>
            <div class="flex flex-col gap-2 mb-4">
                <input 
             type="password" 
             name="password" 
             placeholder="******" 
             class="w-full px-3 py-2 border rounded @error('password') border-red-500 @enderror"> 
            @error('password')
             <p class="flex text-red-500 text-xs mt-1">
                {{ $message }}
                </p>
            @enderror
            </div>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Entrar</button>
        </form>
         <p class="text-center mt-4">
            Não tem uma conta? <a href="{{ route('site.cadastro') }}" class="text-blue-500 hover:text-blue-700">Cadastre-se</a>

         </p> 
</mains>
</x-layout>