@extends('layout')

@section('cabecalho')
    Materiais
@endsection

@section('conteudo')
    <a href="/materiais/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($materiais as $material)
            <li class="list-group-item">
                {{ $material->nome }}
            </li>
        @endforeach
    </ul>
@endsection
