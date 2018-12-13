@extends('adminlte::page')
@section('title','Cadastro de Professores')
@section('content_header')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro de Professores</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('professores.store')}}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" onBlur="ValidarCPF(form1.cpf);"
                           onKeyPress="MascaraCPF(form1.cpf);" maxlength="14" placeholder="Digite o CPF">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite o Email">
                </div>
                <div class="form-group">
                    <label for="setor">Instituição de Serviço</label>
                    <select id="setor" name="setor" class="form-control">
                        <option selected>Laboratório</option>
                        <option>Asilo Lar de Jesus</option>
                        <option>Asilo João XXIII</option>
                        <option>Pequeno Davi</option>
                        <option>PSF</option>
                        <option>Viva Vida</option>
                        <option>Hospital</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o Telefone">
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