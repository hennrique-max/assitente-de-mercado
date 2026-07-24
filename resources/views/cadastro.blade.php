
<x-layout>
<mains class="py-10">
    <h1 class="text-3xl font-bold mb-4">
        Registrece-se
    </h1>

    <p class="text-gray-600 text-center">
    prencha o formulario abaixo para criar sua conta
</p>

    <form action="{{ route('site.cadastro') }}" method="POST" class="w-full max-w-sm mx-auto mt-6">
    
            @csrf
            <div>
            <label for="name">
                NOME:
            </label>
             <input 
             type="text" 
             name="name" 
             placeholder="Seu nome" 
             class="w-full px-3 py-2 border rounded @error('name') border-red-500 @enderror"> 
            @error('name')
             <p class="flex text-red-500 text-xs mt-1">
                {{ $message }}
             </p>
            @enderror
            </div>
            
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

            
            <label for="password_confirmation">
                confirme a senha:
                </label>
            <div class="flex flex-col gap-2 mb-4">
                <input 
             type="password" 
             name="password_confirmation" 
             placeholder="******" 
             class="w-full px-3 py-2 border rounded @error('password') border-red-500 @enderror"> 
            @error('password')
             <p class="flex text-red-500 text-xs mt-1">
                {{ $message }}
                </p>
            @enderror
            </div>

            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                cadastrar     
            </button>
            <p class="text-center mt-4">
            ja tem tem uma conta? <a href="{{ route('site.login') }}" class="text-blue-500 hover:text-blue-700">Entrar</a>

         </p> 
        </form>
</mains>
</x-layout>