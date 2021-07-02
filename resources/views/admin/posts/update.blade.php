<h1>Atulizar post</h1>


<form action="{{ route('posts.update',  $post->id) }}" method="post" enctype="multipart/form-data">
  
   @method('PUT')
   @include('admin.posts._partials.form')

</form>