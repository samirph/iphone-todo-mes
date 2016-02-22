@extends('layouts.master')

@section('content')
<div id="div-center">
    <div class="well bs-component col-sm-8" align="center">
        <legend>Você foi inscrito com sucesso!</legend>
        <a href="{{route('main-page')}}" class="btn btn-primary">Voltar para a página inicial</a>
    </div>
</div>
@endsection
