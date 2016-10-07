@extends('layout.clean')

@section('bodyClass', 'login')

@section('content')
    <div class="container">
        <div class="row">
           <img src="<?php echo $google_2fa_url; ?>">
        </div>
    </div>
@stop
