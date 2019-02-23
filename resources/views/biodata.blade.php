<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container text-center" style="margin-top: 2em;margin-bottom: 2em;">
      <h1>Biodata</h1>
    </div>
    <div class="container" style="margin-bottom: 2em;">
      <h2>Input Data</h2>
      <div class="row" style="margin-top: 2em;">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="Nama" placeholder="Nama Lengkap" class="form-control" id="input_nama">
          </div>
          <div class="form-group">
            <input type="text" name="Nomor" placeholder="Nomor Induk Penduduk" class="form-control" id="input_nip">
          </div>
          <div class="form-group">
            <input type="text" name="TTL" placeholder="Tempat Tanggal Lahir" class="form-control" id="input_ttl">
          </div>
          <div class="form-group">
            <input type="text" name="Kelamin" placeholder="Jenis Kelamin" class="form-control" id="input_kelamin">
          </div>
          <div class="form-group">
            <input type="text" name="Pekerjaan" placeholder="Pekerjaan" class="form-control" id="input_pekerjaan">
          </div>
          <div class="form-group">
            <input type="text" name="Pendidikan" placeholder="Pendidikan" class="form-control" id="input_pendidikan">
          </div>
          <button type="submit" class="btn btn-primary btn-block" onclick="biodata()">Submit</button>
        </div>
      </div>
    </div>
    <div class="container">
      <h2>Result</h2>
      <div class="table-responsive" style="margin-top: 2em;">
        <table class="table">
          <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>NIP</th>
              <th>TTL</th>
              <th>Jenis Kelamin</th>
              <th>Pekerjaan</th>
              <th>Pendidikan</th>
            </tr>
          </thead>
          <tbody id="result">
            
          </tbody>
        </table>
      </div>
    </div>

    <script>
      function biodata(){
        var inama = document.getElementById('input_nama').value;
        var inip = document.getElementById('input_nip').value;
        var ittl = document.getElementById('input_ttl').value;
        var ikelamin = document.getElementById('input_kelamin').value;
        var ipekerjaan = document.getElementById('input_pekerjaan').value;
        var ipendidikan = document.getElementById('input_pendidikan').value;
        var tresult = '<tr> <td>' + inama + '</td> <td>' + inip + '</td> <td>' + ittl + '</td> <td>' + ikelamin + '</td> <td>' + ipekerjaan + '</td> <td>' + ipendidikan + '</td> </tr>'
        document.getElementById('result').innerHTML = tresult;
      }
    </script>

  </body>
</html>