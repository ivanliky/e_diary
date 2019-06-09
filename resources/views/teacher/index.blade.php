@extends('layouts.app')

@section('content')

<h1>Teacher Dashboard</h1>
<h2>Students</h2>

@foreach ($students as $student)

     {{ $student->first_name }} {{ $student->last_name }}

@endforeach

@endsection
