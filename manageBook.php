<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Books</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap-5.3.3/dist/css//bootstrap.min.css">

  <style>
    /* Styling untuk kotak */
    .box {
      border: 1px solid #000;
      padding: 20px;
      position: relative;
      margin-top: 20px;
      width: 90%;
      margin: auto;
    }

    /* Styling untuk judul di pojok kiri atas */
    .box-title {
      position: absolute;
      top: -15px;
      left: 10px;
      background-color: white;
      padding: 0 5px;
    }

    .icon-button {
      background: none;
      /* Menghilangkan latar belakang */
      border: none;
      /* Menghilangkan border */
      padding: 0;
      /* Menghilangkan padding */
      cursor: pointer;
      /* Menunjukkan bahwa ini adalah tombol */
    }
  </style>
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="box mt-5">
    <div class="box-title">Table Buku</div>

    <div class="div mt-3 mb-4">
      <button type="button" class="btn" style="background-color: #bee1fa;">ADD</button>
      <button type="button" class="btn" style="background-color: #bee1fa;">RECYCLE</button>
    </div>

    <table class="table table-bordered border-dark ">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kategori Buku</th>
          <th scope="col">Lokasi Rak</th>
          <th scope="col">Judul</th>
          <th scope="col">Pengarang</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Stok</th>
          <th scope="col">Settings</th>
        </tr>
      </thead>
       
      
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Anak-anak dan Remaja</td>
          <td>AR-BAA-AR1</td>
          <td>Cerita si Ipin</td>
          <td>Horasan</td>
          <td>Horasan Media</td>
          <td>2008</td>
          <td>Buku ini untuk anak-anak</td>
          <td>16</td>
          <td>
            <button type="button" class="icon-button" aria-label="Delete">
              <i class="bi bi-trash" style="font-size: 24px;"></i>
            </button>
            <button type="button" class="icon-button" aria-label="Edit">
              <i class="bi bi-pen" style="font-size: 23px;"></i>
            </button>
          </td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Anak-anak dan Remaja</td>
          <td>AR-BAA-AR1</td>
          <td>Cerita si Ipin</td>
          <td>Horasan</td>
          <td>Horasan Media</td>
          <td>2008</td>
          <td>Buku ini untuk anak-anak</td>
          <td>16</td>
          <td>
            <button type="button" class="icon-button" aria-label="Delete">
              <i class="bi bi-trash" style="font-size: 24px;"></i>
            </button>
            <button type="button" class="icon-button" aria-label="Edit">
              <i class="bi bi-pen" style="font-size: 23px;"></i>
            </button>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Anak-anak dan Remaja</td>
          <td>AR-BAA-AR1</td>
          <td>Cerita si Ipin</td>
          <td>Horasan</td>
          <td>Horasan Media</td>
          <td>2008</td>
          <td>Buku ini untuk anak-anak</td>
          <td>16</td>
          <td>
            <button type="button" class="icon-button" aria-label="Delete">
              <i class="bi bi-trash" style="font-size: 24px;"></i>
            </button>
            <button type="button" class="icon-button" aria-label="Edit">
              <i class="bi bi-pen" style="font-size: 23px;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Anak-anak dan Remaja</td>
          <td>AR-BAA-AR1</td>
          <td>Cerita si Ipin</td>
          <td>Horasan</td>
          <td>Horasan Media</td>
          <td>2008</td>
          <td>Buku ini untuk anak-anak</td>
          <td>16</td>
          <td>
            <button type="button" class="icon-button" aria-label="Delete">
              <i class="bi bi-trash" style="font-size: 24px;"></i>
            </button>
            <button type="button" class="icon-button" aria-label="Edit">
              <i class="bi bi-pen" style="font-size: 23px;"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php include 'footer.php' ?>

  <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.js"></script>
</body>

</html>