@extends('layouts.admin')
@section('title','')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-2">
            <div class="">


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>





@endsection
