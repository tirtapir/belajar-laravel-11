@foreach($books as $book)
    <h2>{{$book->judul}}</h2>
    <p>{{$book->penulis}}</p>
    <p>{{$book->penerbit}}</p>
    <p>{{$book->stok}}</p>

    <a href="{{route('books.edit', $book->id)}}">Edit</a>
@endforeach