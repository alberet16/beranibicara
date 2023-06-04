@if($kadislaporan)

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Surat Perjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <h1 style="text-align: center">SURAT LAPORAN PERJALANAN DINAS</h1>
      <table class="mt-5 fw-medium">
        <tr>
          <td>Kepada Yth</td>
          <td>:</td>
          <td>Kepala Dinas Pemberdayaan Masyarakat, Desa, Perempuan, dan Perlindungan Anak Kab. Toba</td>
        </tr>

        <tr>
          <td>Dari</td>
          <td>:</td>
          <td>{{ $kadislaporan->nama }}, dkk</td>
        </tr>

        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td>{{ $kadislaporan->tanggal }}</td>
        </tr>

        <tr>
          <td>Perihal</td>
          <td>:</td>
          <td>Laporan Hasil Pelaksanaan Perjalanan Dinas</td>
        </tr>
        <tr>
        <hr>
        </tr>
      </table>
      
    
      <div>
        <table>
          <tr>
            <td>I</td>
            <td>Dasar</td>
            <td >:</td>
            <td>{{ $kadislaporan->dasar }}</td>
          </tr>

          <tr>
            <td>II</td>
            <td>Maksud Perjalanan Dinas</td>
            <td >:</td>
            <td>{{ $kadislaporan->maksud }}</td>
          </tr>

          <tr>
            <td>III</td>
            <td>Isi Laporan</td>
            <td >:</td>
            <td>{{ $kadislaporan->isi }}</td>
          </tr>

          <tr>
            <td>IV</td>
            <td>Penutup</td>
            <td >:</td>
            <td>Demikian Laporan ini disampaikan kepada bapak untuk maklum dan mohon petunjuk selanjutnya.</td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td >{{ $kadislaporan->pelapor }}</td>
          </tr>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

@endif