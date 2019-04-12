@extends('layouts.master')

@section('title')
    Performance Comercial
@endsection

@section('content')

    <!--Grid column-->
    <div class="col-lg-12 col-md-12 mb-4">

        <div class="card">

        <div class="card-header">Por Consultor</div>

        <!--Card content-->
        <div class="card-body">

            <div class="text-left mb-5">
                <div>
                    Per&iacute;odo
                </div>
                {{ Form::select('mes_desde',$meses, null, array('name'=>'mes-desde', 'class' => 'browser-default custom-select col-lg-2')) }}            
                {{ Form::select('ano_desde',$anos, null, array('name'=>'ano-desde', 'class' => 'browser-default custom-select col-lg-2')) }}            
                a
                {{ Form::select('mes_hasta',$meses, null, array('name'=>'mes-hasta', 'class' => 'browser-default custom-select col-lg-2')) }}            
                {{ Form::select('ano_hasta',$anos, null, array('name'=>'ano-hasta', 'class' => 'browser-default custom-select col-lg-2')) }}            
            </div>

            {{ Form::open() }}

            <div>
                Consultores
            </div>
            {{ Form::select('consultores',$consultores, null, array('multiple'=>'multiple','name'=>'consultores[]', 'id'=>'box-left', 'class' => 'custom-select col-lg-5')) }}

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary btn-sm" id="bleft"><<</button>
                <button type="button" class="btn btn-primary btn-sm" id="bright">>></button>
            </div>

            {{ Form::select('consultores_selected', [], null, array('multiple'=>'multiple','name'=>'consultores_selected[]', 'id'=>'box-right', 'class' => 'custom-select col-lg-5')) }}

            <div class="row">
                <br>
            </div>

            <div class="btn-group btn-group-lg mb-4 text-center" role="group">
                <button type="button" class="btn btn-primary btn-sm p-demo-3 waves-effect waves-light">
                    <i class="fab fa-instagram fa-sm pr-2" aria-hidden="true"></i>
                    Relatorio
                </button>
                <button type="button" class="btn btn-primary btn-sm p-demo-3 waves-effect waves-light">
                    <i class="fab fa-instagram fa-sm pr-2" aria-hidden="true"></i>
                    Grafico
                </button>
                <button type="button" class="btn btn-primary btn-sm p-demo-3 waves-effect waves-light">
                    <i class="fab fa-instagram fa-sm pr-2" aria-hidden="true"></i>
                    Pizza
                </button>
            </div>    

            {{ Form::close() }}            
        </div>

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->
    
@endsection()

@section('script-footer')
    <script>
        $(document).ready(function(){
            $('#bright').click(function(){
                var $options = $("#box-left option:selected").map(function(){ 
                    var $option = $('<option></option>').attr('value', this.value).text(this.text).prop('selected', true);
                    $('#box-right').append($option).change();
                    $('#box-left option:selected').remove();
                });
            })
            $('#bleft').click(function(){
                var $options = $("#box-right option:selected").map(function(){ 
                    var $option = $('<option></option>').attr('value', this.value).text(this.text).prop('selected', true);
                    $('#box-left').append($option).change();
                    $('#box-right option:selected').remove();
                });
            })            
        })
    </script>
@endsection()