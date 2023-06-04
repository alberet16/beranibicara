<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Surat Perjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <style>
      .container {
        max-width: 800px;
        margin: 0 auto;
      }

      h1 {
        text-align: center;
      }

      table {
        margin-top: 30px;
      }

      table tr td:first-child {
        width: 40px;
      }

      table tr td:nth-child(2) {
        width: 80px;
      }

      table tr td:nth-child(2) {
        width: 120px; /* Mengatur lebar kolom Dasar */
      }

      hr {
        border-top: 1px solid #ccc;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>

      @foreach($kadislaporan as $data)
      <div class="container">
      <h1>SURAT LAPORAN PERJALANAN DINAS</h1>
      <table class="mt-5 fw-medium">
        <tr>
          <td width="80%">Kepada Yth</td>
          <td>:</td>
          <td>Kepala Dinas Pemberdayaan Masyarakat, Desa, Perempuan, dan Perlindungan Anak Kab. Toba</td>
        </tr>
        <tr>
          <td>Dari</td>
          <td>:</td>
          <td>{{ $data->nama }}, dkk</td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td>{{ $data->tanggal }}</td>
        </tr>
        <tr>
          <td>Perihal</td>
          <td>:</td>
          <td>Laporan Hasil Pelaksanaan Perjalanan Dinas</td>
        </tr>
        <tr>
          <td colspan="3"><hr></td>
        </tr>
      </table>

      <div>
        <table>
          <tr>
            <td>I</td>
            <td>Dasar</td>
            <td>:</td>
            <td>{{ $data->dasar }}</td>
          </tr>
          <tr>
            <td>II</td>
            <td>Maksud Perjalanan Dinas</td>
            <td>:</td>
            <td>{{ $data->maksud }}</td>
          </tr>
          <tr>
            <td>III</td>
            <td>Isi Laporan</td>
            <td>:</td>
            <td>{{ $data->isi }}</td>
          </tr>
          <tr>
            <td>IV</td>
            <td>Penutup</td>
            <td>:</td>
            <td>Demikian Laporan ini disampaikan kepada bapak untuk maklum dan mohon petunjuk selanjutnya.</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $data->pelapor }}</td> 
          </tr>
        </table>
      </div>
      @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
