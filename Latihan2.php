<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
        body {
            background: rgb(228, 94, 67);
        }
    </style>
  </head>
  <body>
  <div class="container mt-5">
        <h1>LAtihan 2</h1>
        <form>
            <div class="form-group">
                <label for="angkaInput">Input Pertama Angka:</label>
                <input type="number" class="form-control" id="angkaInput" placeholder="Masukkan angka">
            </div>
            <div class="form-group">
                <label for="dropdownInput">Input Kedua</label>
                <select class="form-control" id="dropdownInput">
                    <option value="opsi1">uooo</option>
                    <option value="opsi2">eaaaa</option>
                    <option value="opsi3">SIUUUUU</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" id="hitungButton">Hitung</button>
        </form>
    </div>
  </body>
</html>