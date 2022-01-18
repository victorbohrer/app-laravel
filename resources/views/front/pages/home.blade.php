@extends('front.layout.master')

@section('title', 'Ballerini')

@section('main')
    <section class="container px-44 mx-auto flex">
      <div class="mt-24 mr-44">
        <h1 class="text-white text-4xl mb-8">
          Balle Bot
        </h1>
  
        <p class="text-base text-white mb-8">Deixe a sua comunidade segura de um jeito fácil</p>
  
        <a href="#" class="text-[#2F2325] bg-[#ECD6C4] p-2 rounded-lg shadow-lg">
          Me adicione!
        </a>
      </div>

      <img src="{{asset('assets/img/home/ballerini-img.png')}}" alt="character ballerini">
      
    </section>

    <div class="container px-44 mx-auto flex justify-center">
      <div class="bg-white h-px w-1/5"></div>
    </div>

    <section class="container px-44 mx-auto text-center text-white">
      <h2 class="pt-20 text-2xl">
        O que ela faz por você?
      </h2>
      
      <p class="text-lg">
        1. Cria um sistema de verificação capcha para novos membros garantirem que não são robôs
      </p>

      <p class="text-lg">
        2. Possui um sistema de banimento automático para links suspeitos que forem enviados na comunidade
      </p>

      <p class="text-lg mb-6">
        3. Sistema de avisos e banimento manual, para pessoas administradoras utilizarem
      </p>
    </section>
@endsection

