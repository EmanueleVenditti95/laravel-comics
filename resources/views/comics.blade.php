@extends('layouts.app')

@section('title')
    Pagina fumetti
@endsection

@section('content')
    <section>
        <ul>
            @foreach ($comics as $comic)
            <li>
                @foreach ($comic as $info)
                {{$info}}
                @endforeach
            </li>
            @endforeach
        </ul>    
    </section>
@endsection