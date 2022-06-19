@extends('layout')

@section('content')
    <main>
        <h1>FAQ</h1>
        <div>
            <h2><a href="{{ route('faq.create') }}">Create New FAQ</a></h2>
        </div>
        <ul>
            @foreach($faqs as $faq)
                <li>{{ $faq->question }}</li>
                {{ $faq->answer }}
                <h4><a href="{{ route('faq.edit', $faq) }}">Edit</a></h4>
                <hr>
            @endforeach
        </ul>
    </main>
@endsection