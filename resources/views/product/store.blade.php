@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')


   <div class="row">
     <div class="col-md-8">

       @include('partials.messages') 
        
        <br>
        <br>
        <br>

        <div class="panel panel-default">
      
            <table class="table table-bordered">
                <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
   
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->product}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->mark}}</td>
                    </tr>
                @endforeach
                </tbody>


            </table>
            <div class="text-center">
            </div>


        </div>


     </div>
   </div>
  
@endsection
