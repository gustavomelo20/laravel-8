
<h1>Cadastrar novo post</h1>


<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
  
  @include('admin.posts._partials.form')
 
</form>