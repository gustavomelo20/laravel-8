<h1>{{ $post->title }} </h1>
<p>{{ $post->content }} </p>

<img src="{{ url("storage/{$post->image}") }}" alt="" srcset="">

<form action="{{ route('posts.destroy', $post->id ) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
     <button type="submit">Deletar</button>
</form>