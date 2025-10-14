@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<a href="" class="login__button">logout</a>
@endsection

@section('content')
<div class="admin__content">
      <div class="admin__heading">
        <h2>Admin</h2>
      </div>
      <table>
        
      </table>
    </div>
@endsection