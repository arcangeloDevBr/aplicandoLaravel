  @extends('layouts.usuario')
  
  @section('title', 'Bem-vindo ao Projeto Laravel')
  
  @section('content')
  
  <div class="text-center p-4">
    <h1 class="text-4xl font-bold text-cyan-400 mb-8">Bem-vindo ao Projeto</h1>

    <div class="rounded-xl overflow-hidden shadow-lg border-4 border-cyan-500 max-w-md mx-auto">
      <img src="{{ Vite::asset('resources/img/meusite.png') }}" width="35%" alt="Pôster do Projeto" class="w-full">
    </div>

    <p class="mt-6 text-gray-300">Este é o início de algo incrível. Em breve, mais informações.</p>
  </div>
  @endsection