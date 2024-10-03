<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Create</h2>

<form action="{{route('books.update', $book->id)}}" method='post'>
    @csrf
    <label for="judul">Judul</label><br>
    <input type="text" id="judul" name="judul" value="{{$book->judul}}"><br>

    <label for="penulis">Penulis</label><br>
    <input type="text" id="penulis" name="penulis" value="{{$book->penulis}}"><br>

    <label for="penerbit">Penerbit</label><br>
    <input type="text" id="penerbit" name="penerbit" value="{{$book->penerbit}}"><br>

    <label for="stok">Stok</label><br>
    <input type="number" id="stok" name="stok" value="{{$book->stok}}"><br><br>

    <input type="submit" value="Submit">
</form> 

<form action="{{route('books.destroy', $book->id)}}" method='post'>
     @csrf   
<input type="submit" value="Delete">
</form>

</body>
</html>