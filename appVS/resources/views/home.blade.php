@extends('layouts.admin')
@section('title','')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="login-logo">
                <img src="../img/logo.png" width="350" class="center-block img-responsive">
                </div><!-- /.login-logo -->

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                 <h1 class="text-center">Victor Sinclair Fine Cigars</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
