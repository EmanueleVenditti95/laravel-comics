@extends('layouts.app')

@section('title')
    Pagina fumetti
@endsection

@section('content')
    <section>
        @foreach ($comics as $comic)
            <ul>
                @foreach ($comic as $info)
                    <li>
                        {{$info}}
                    </li>
                @endforeach
            </ul>    
        @endforeach
    </section>
@endsection