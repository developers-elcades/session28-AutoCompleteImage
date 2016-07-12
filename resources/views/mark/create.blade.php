@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')



    <div class="row">
        <div class="col-md-4">
{!!Form::open(['route'=>'mark.store','method'=>'POST'])!!}

{!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
{!!form::submit('aceptar','') !!}
{!!Form::close()!!}
</div>
</div>
