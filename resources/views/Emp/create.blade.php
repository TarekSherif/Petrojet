

@extends('layouts.index')

@section('CoreContent')
               
<form action="{{url('/')}}/Emp" method="post">
    @csrf
    @include('Emp.form')
</form>

@endsection
