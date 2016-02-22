@extends('layouts.master')

@section('content')
<div id="div-center">
<div class="well bs-component col-sm-8" align="center">
          <form class="form-horizontal" method="POST">
            <fieldset>
              <legend>Inscreva-se e concorra!</legend>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label class="col-md-2 control-label">Nome</label>
                    <div class="col-md-10">
                        <input type="text" name="name" placeholder="Nome" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Data de Nascimento</label>
                    <div class="col-md-10">
                        <input type="date" name="birthday" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Genero</label>
                    <div class="col-md-10">
                        <select name="gender" class="form-control">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-primary">Inscrever !</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>
@endsection

