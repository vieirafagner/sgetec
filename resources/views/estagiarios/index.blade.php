@extends('adminlte::page')
@section('title','Lista de Estagiarios')
@section('content_header')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Estagiários</h3>
                        <a class="btn btn-success pull-right" href="{{route('estagiarios.create')}}"><span class="glyphicon glyphicon-plus"><label style="font-family: Cambria;font-size: 12px">Adicionar</label></span> </a>
                </div>
                <div class="box-body">
                    <div class="row-fluid"></div>
                    <table class="table table-bordered table-hover table-striped table-condensed">
                        <tbody>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Instituição</th>
                            <th class="text-center">Telefone</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                        @foreach($a_estagiario as $estagiario)
                            <tr>
                                <td class="text-center">{{$estagiario->id}}</td>
                                <td class="text-center">{{$estagiario->nome}}</td>
                                <td class="text-center">{{$estagiario->email}}</td>
                                <td class="text-center"><span class="badge bg-blue-gradient">{{$estagiario->setor}}</span></td>
                                <td class="text-center">{{$estagiario->telefone}}</td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#janela"><span class="glyphicon glyphicon-edit"></span></button> </td>
                                <td>
                                    <form>
                                        @csrf

                                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box --><!-- /.box -->
        </div>
    </div>

    <!-- ***********************************************************-->
    <!-- Janela EDITAR-->

    <form action="{{route('estagiarios.update',$estagiario->id)}}" role="form" class="modal fade " id="janela" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4 class="modal-title"><label style="font-family:Cambria">Editar dados do Estagiário</label> </h4>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button  type="submit" class=" btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </form>

@endsection
@stop

