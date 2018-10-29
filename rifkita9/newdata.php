<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>regis</title>
  </head>
  <body>
    <form action="simpan.php" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama depan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Nama depan" name="namad">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama belakang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Nama belakang" name="namab">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan NIM" name="nim">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Kelas" name="kelas">
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-2">Genre film</div>
    <div class="col-sm-5">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="horor">
        <label class="form-check-label" for="gridCheck1">
          jazz
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="anime">
        <label class="form-check-label" for="gridCheck1">
          anime
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="action">
        <label class="form-check-label" for="gridCheck1">
          action
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="drama">
        <label class="form-check-label" for="gridCheck1">
          drama
        </label><br>

      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">Tempat Wisata</div>
    <div class="col-sm-5">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Bali">
        <label class="form-check-label" for="gridCheck1">
          Bali
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Tanjung solor">
        <label class="form-check-label" for="gridCheck1">
          Tanjung Selor
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Jakarta">
        <label class="form-check-label" for="gridCheck1">
          Jakarta
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="tw[]" value="Lombok">
        <label class="form-check-label" for="gridCheck1">
          Lombok
        </label><br>

      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </div>
  </div>
  <div class="card-body">
    <a href="dashboard.php" class="card-link">profil</a>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
