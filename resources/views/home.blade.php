<php?

@extends('layouts.main-layout')

@section('content')

<div class="text-center">
    <h1>Movies</h1>
    <ul>
        @foreach ($students as $student)
        <li>
            {{ $student -> title}}
            
        </li>
        @endforeach
    </ul>
</div>

@endsection

?>