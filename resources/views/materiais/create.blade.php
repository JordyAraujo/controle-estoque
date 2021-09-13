@extends('layout')

@section('cabecalho')
    Adicionar Material
@endsection

@section('conteudo')
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input id="nome" type="text"
                       name="nome" class="form-control">
            </div>
            <button class="btn btn-primary">Adicionar</button>
        </form>
@endsection
