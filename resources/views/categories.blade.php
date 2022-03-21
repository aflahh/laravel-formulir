@extends('template')

@section('container')
    <h2> {{ $title }}</h2>
    <hr />
    @foreach ($categories as $category)
        <article class="mb-5">
            <ul>
                <li>
                    <h3>
                        <a href="/{{ $name }}/{{ $category->slug }}" class="text-decoration-none">
                            {{ $category->name }}
                        </a>
                    </h3>
                </li>
            </ul>
        </article>
    @endforeach
@endsection
