@include('header')
<div class='container container-sm border border-primary padding' style="background-color:white; margin-top:50px; padding-top:20px; padding-bottom: 50px">
    <h3> {{$book->title}} </h3>

    <div class="row">
        <div class="col-6">
            Book ID: {{$book->id}}
        </div>
        <div>
            Written by {{$book->author}}
        </div>
        <div>
            Published in {{$book->publicationYear}}
        </div>
        <div>
            Genre: {{$book->genre}}
        </div>
    </div>
    <div class="row" style="margin-top:20px">
        <div class="col-sm">
            <a href="/books/{{$book->id}}/edit" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Edit Book</a>
        </div>
        <div class="col-sm">
            <form action="{{ route('books.destroy', $book->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>
</div>

@include('footer')