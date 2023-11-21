@include('header')
<div class="container">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update book</h3>
      <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
          <label for="body">Author</label>
          <textarea class="form-control" id="author" name="author" required>{{ $book->author }}</textarea>
        </div>
        <div class="form-group">
          <label for="body">Year Published</label>
          <textarea class="form-control" id="publicationYear" name="publicationYear"  required>{{ $book->publicationYear }}</textarea>
        </div>
        <div class="form-group">
          <label for="body">Genre</label>
          <textarea class="form-control" id="genre" name="genre" required>{{ $book->genre }}</textarea>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
      </form>
    </div>
  </div>
</div>
@include('footer')