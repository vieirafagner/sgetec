@extends('adminlte::page')
@section('title','Cadastro de Estagiarios')
@section('content_header')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Estagiário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('estagiarios.update',$estagiario->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="{{$estagiario->nome}}" class="form-control" id="nome" placeholder="Digite o nome">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" value="{{$estagiario->cpf}}" name="cpf" onBlur="ValidarCPF(form1.cpf);"
                           onKeyPress="MascaraCPF(form1.cpf);" maxlength="14">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{$estagiario->email}}" class="form-control" id="email" placeholder="Digite o Email">
                </div>
                <div class="form-group">
                    <label for="setor">Instituição</label>
                    <?php $setor=$estagiario->setor ?>
                    <select id="setor" name="setor"  class="form-control">
                        <option value="Laboratório"@if($setor==="Laboratório")selected>{{$estagiario->setor = 'Laboratório'}}</option>
                        <option value="Asilo lar de Jesus" @elseif($setor==='Asilo lar de Jesus')selected>{{$estagiario->setor='Asilo lar de Jesus'}}</option>
                        <option value="Asilo João XXIII" @elseif($setor==='Asilo João XXIII')selected>{{$estagiario->setor='Asilo João XXIII'}}</option>
                        <option value="Pequeno Davi" @elseif($setor==='Pequeno Davi')selected>{{$estagiario->setor='Pequeno Davi'}}</option>
                        <option value="PSF" @elseif($setor==='PSF')selected>{{$estagiario->setor='PSF'}}</option>
                        <option value="Viva Vida" @elseif($setor==='Viva Vida')selected>{{$estagiario->setor='Viva Vida'}}</option>
                        <option value="Hospital" @elseif($setor==='Hospital')selected @endif>{{$estagiario->setor='Hospital'}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" value="{{$estagiario->telefone}}" class="form-control" id="telefone" placeholder="Digite o Telefone">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection
@stop
