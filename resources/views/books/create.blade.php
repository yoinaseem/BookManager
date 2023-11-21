@include('header')
<div class="container">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Add a Book</h3>
      <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
          <label for="body">Author</label>
          <textarea class="form-control" id="author" name="author" required></textarea>
        </div>
        <div class="form-group">
          <label for="body">Year Published</label>
          <textarea class="form-control" id="publicationYear" name="publicationYear" required></textarea>
        </div>
        <div class="form-group">
          <label for="body">Genre</label>
          <textarea class="form-control" id="genre" name="genre" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
    </div>
  </div>
</div>
@include('footer')