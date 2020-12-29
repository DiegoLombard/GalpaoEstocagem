@extends('layouts.app')

@section('content')
@if(Session::has('mensagem'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning">

                {{Session::get('mensagem')['msg']}}
            </div>
        </div>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Deletar Marca') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        
                   
                                    <h3>Deletar Marca</h3>
                                   
                                    <hr>
                                    
                                    <p style="color:red" > Tem certeza que deseja deletar <strong >{{$marca->nome}}?</strong></p>
                                    <a href="{{route('marcas.destroy', $marca->id)}}"><button class="btn btn-danger">Deletar</button></a>
                                        
                                        
                                            
                                         
                        </div>
                    </div>   
                                    
                               

                        
                        
                </div>
               
            </div>
            <br>
            <p><a href="{{ url()->previous()}}" class="btn btn-info">Voltar</a></p>
        </div>
    </div>
</div>
@endsection
