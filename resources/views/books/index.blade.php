@include('header')
<div class='container-sm border' style="background-color:white; margin-top:50px; padding-top:20px; padding-bottom: 20px">
    <div>
        <h3> Index </h3>
    </div>
    @foreach($books as $books)
    <div class="row">
        <div class="col-2"> 
            <a href="/books/{{$books->id}}">{{$books->title}}</a>
        </div>
        <div class="col-2"> {{$books->author}} </div>
        <div class="col-2"> {{$books->publicationYear}}</div>
        <div class="col-2"> {{$books->genre}}</div>
        <div class="col-2"> <a href="/books/{{$books->id}}/edit" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Edit Book</a></div>
        <div class="col-2"> 
            <form action="{{ route('books.destroy', $books->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="col-2" style="margin-top:10px"> <a href="/create" class="btn btn-success btn-sm" role="button">New Book</a></div>
</div>
@include('footer')
