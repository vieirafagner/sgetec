@extends('adminlte::page')

@section('title', 'SGE - Sistema Gerenciador de Estágios')

@section('content_header')
    <div class="box-header with-border">
        <h3 class="box-title"><h3 style="font-family: Andalus; font-size: 40px" class="text-center">Cadastro Rápido</h3></h3>
    </div>

        <div class="box-group col-md-12" style="border: 30px solid #d6e9f9">
            <div align="center">
                <div class="col-md-8">
                   <a href="{{route('professores.create')}}"><img src="imagens/enfermeira.png"></a>
                    <br>
                    <h3>Professor</h3>
                </div>
                <div class="col-md-2" >
                    <a href="{{route('estagiarios.create')}}"><img src="imagens/estagiario.png"></a>
                    <br>
                    <h3>Estagiário</h3>
                </div>
                <div class="col-md-12" >
                    <a href="{{route('setores.create')}}"><img src="imagens/hospital.png"></a>
                    <br>
                    <h3>Instituição</h3>
                </div>
            </div>
        </div>

@stop

