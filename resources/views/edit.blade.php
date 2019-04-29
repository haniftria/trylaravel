<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit buku perpustakaan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Buku</h2><br/>
      <form method="post" action="{{action('BookController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="judul">Judul buku:</label>
            <input type="text" class="form-control" name="judul" value="{{$book->judul}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="penerbit">Penerbit:</label>
              <input type="text" class="form-control" name="penerbit" value="{{$book->penerbit}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="tahun_terbit">Tahun terbit:</label>
            <input type="text" class="form-control" name="tahun_terbit" value="{{$book->tahun_terbit}}">
          </div>
        </div>
         
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="pengarang">Pengarang:</label>
            <input type="text" class="form-control" name="pengarang" value="{{$book->pengarang}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>