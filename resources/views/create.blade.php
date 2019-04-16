<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Buku Baru</h2><br/>
      <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="judul">Judul buku:</label>
            <input type="text" class="form-control" name="judul">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="penerbit">Penerbit:</label>
              <input type="text" class="form-control" name="penerbit">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="tahun_terbit">Tahun terbit:</label>
            <input type="text" class="form-control" name="tahun_terbit">
          </div>
        </div>

         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="pengarang">Pengarang:</label>
            <input type="text" class="form-control" name="pengarang">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>