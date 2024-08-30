@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Profissional')
@php
    if (!empty($dado->id)) {
        $route = route('profissional.update', $dado->id);
    } else {
        $route = route('profissional.store');
    }
@endphp

<div class="bg-stone-100 rounded-md">
<div class="rounded-lg  items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-1 lg:px-8">

<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Formulario de Profissional</h2>
<dt class="font-medium text-red-700">Informe os dados para a criação de um anuncio personalizado para o seu veiculo!</dt>
<form action="{{ $route }}" method="post" enctype="multipart/form-data">



    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>

    <label for="">Especialidade</label><br>
    <select name="marca_id" class="form-select">
        @foreach ($especialidade as $item)
            <option value="{{ $item->id }}">{{ $item->nome }}</option>
        @endforeach
    </select><br>

    <label for="">Contato</label><br>
    <input type="text" name="contato" class="form-control"
        value="@if (!empty($dado->contato)) {{ $dado->contato }}@elseif (!empty(old('contato'))){{ old('contato') }}@else{{ '' }} @endif"><br>

    <label for="">Descricao</label><br>
    <input type="text" name="descricao" class="form-control"
        value="@if (!empty($dado->descricao)) {{ $dado->descricao }}@elseif (!empty(old('descricao'))){{ old('descricao') }}@else{{ '' }} @endif"><br>




    <div class="  lg:mt-0 lg:w-full lg:max-w-lgg lg:flex-shrink-0 grid ">
        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">

          <button type="submit" class="mt-2 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Salvar</button>
            <a href="{{ url('profissional') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Voltar</a>
            <p class="mt-6 text-xs leading-5 text-gray-600">Todas as suas transações são protegidas com cryptografia de ponta.<br> Todos os direitos reservados JaguncoLTDA</p>
          </div>
        </div>
      </div>
    </div>




</form>



</div>

@stop
