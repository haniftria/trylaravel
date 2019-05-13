<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data buku</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">

    <br>
    <td><a href="./books/create" class="btn btn-info">Input</a></td>
    <br>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Penerbit</th>
        <th>Tahun terbit</th>
        <th>Pengarang</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($books as $book)
      <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['judul']}}</td>
        <td>{{$book['penerbit']}}</td>
        <td>{{$book['tahun_terbit']}}</td>
        <td>{{$book['pengarang']}}</td>
        
        <td><a href="{{action('BookController@edit', $book['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>