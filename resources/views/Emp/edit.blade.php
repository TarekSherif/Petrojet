

@extends('layouts.index')

@section('CoreContent')

               
<form action="{{ route('Emp.update',[$emp->EmpID]) }}" method="post">
    @csrf
    @method('PUT');
    @include('Emp.form')
</form>

@endsection
