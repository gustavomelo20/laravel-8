@extends('admin.layouts.app')

@section('title', 'Listagem dos posts')


@section('content')
 
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Criar novo post</a>

    @if(session('message') != '')
    
      <p>{{ session('message') }}</p> 

    @endif

    <form action="{{ route('posts.search') }}" method="post">
      @csrf
      <input type="text" name="search" placeholder="Filtrar">
      <button type="submit">Enviar</button>
    </form>

    @foreach($posts as $post)

    <p>{{ $post->title }}  - 
        
        [ <a href="{{ route('posts.show', $post->id) }}">
        Ver Detalhes</a> ] 
                |
        [ <a href="{{ route('posts.edit', $post->id) }}">
            Atualizar</a>  ]


    </p>


    @endforeach

    <hr>
    @if (isset($filters))
          {{ $posts->appends($filters)->links() }}
    @else
          {{ $posts->links() }}
    @endif

@endsection