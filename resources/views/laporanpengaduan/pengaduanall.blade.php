@foreach($cetakpdf as $pengaduan)

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surat</title>
  </head>
  <body>
    <h3 style="text-align: center">LEMBAR PENGADUAN<br />DPMDPPA KABUPATEN TOBA<br />JALAN SILIWANGI N0.1 BALIGE<br />BALIGE</h3>

    <table border="1">
      <tr>
        <td width="200px">No. Registrasi</td>
        <td width="800px"></td>
      </tr>

      <tr>
        <td>Tanggal Pelaporan</td>
        <td></td>
      </tr>

      <tr>
        <td>Tanggal Kejadian</td>
        <td>{{ $pengaduan->tanggal_terjadi }}</td>
      </tr>

      <tr>
        <td>Kategori Lokasi Kasus</td>
        <td></td>
      </tr>

      <tr>
        <td>Alamat TKP</td>
        <td></td>
      </tr>

      <tr>
        <td>Provinsi</td>
        <td></td>
      </tr>

      <tr>
        <td>Kota/Kabupaten</td>
        <td></td>
      </tr>
    </table>

    <h4>A. FORM DATA PELAPOR</h4>
    <table border="1">
      <tr>
        <td width="200px">NIK</td>
        <td width="800px"> {{ $pengaduan->nik_pelapor }}
          <tr>
            <td>Nama</td>
            <td>{{ $pengaduan->nama_pelapor }}</td>
          </tr>

          <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td></td>
          </tr>

          <tr>
            <td>Usia</td>
            <td>{{ $pengaduan->usia_pelapor }}</td>
          </tr>

          <tr>
            <td>Alamat</td>
            <td>{{ $pengaduan->alamat_pelapor }}</td>
          </tr>

          <tr>
            <td>Jenis Kelamin</td>
            <td>{{ $pengaduan->jenis_kelamin_pelapor }}</td>
          </tr>

          <tr>
            <td>Agama</td>
            <td></td>
          </tr>

          <tr>
            <td>No. Telepon</td>
            <td>{{ $pengaduan->nomor_telepon }}</td>
          </tr>

          <tr>
            <td>Pendidikan</td>
            <td></td>
          </tr>

          <tr>
            <td>Pekerjaan</td>
            <td></td>
          </tr>

          <tr>
            <td>Keterangan Lainnya</td>
            <td></td>
          </tr>
        </td>
      </tr>
    </table>

    <h4>B. FORM DATA KORBAN</h4>
    <table border="1">
      <tr>
        <td >NIK</td>
        <td width="800px">{{ $pengaduan->nik_korban }}</td>
      </tr>

      <tr>
        <td>Nama</td>
        <td>{{ $pengaduan->nama_korban }}</td>
      </tr>

      <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td></td>
      </tr>

      <tr>
        <td>Usia</td>
        <td>{{ $pengaduan->usia_korban }}</td>
      </tr>

      <tr>
        <td >Alamat</td>
        <td >
          <table border="1">
            <tr>
              <td width="800px">.</td>
            </tr>
          </table>
          <table border="1">
            <tr>
              <td width="400px">Kelurahan :</td>
              <td width="400px">Kecamatan :</td>
            </tr>
            <tr>
              <td width="400px">Kota/Kab :</td>
              <td width="400px">Provinsi :</td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $pengaduan->jenis_kelamin_korban }}</td>
      </tr>
      <tr>
        <td>Agama</td>
        <td></td>
      </tr>

      <tr>
        <td>No. Telepon</td>
        <td></td>
      </tr>

      <tr>
        <td>Pendidikan</td>
        <td></td>
      </tr>

      <tr>
        <td>Pekerjaan</td>
        <td></td>
      </tr>

      <tr>
        <td>Status Perkawinan</td>
        <td>{{ $pengaduan->status_perkawinan }}</td>
      </tr>

      <tr>
        <td>Difabel</td>
        <td></td>
      </tr>

      <tr>
        <td>Tindak Kekerasan yang Dialami</td>
        <td>{{ $pengaduan->tindakan_kekerasan }}</td>
      </tr>

      <tr>
        <td>Kategori Trafficking</td>
        <td></td>
      </tr>

      <tr>
        <td>Keterangan Lainnya</td>
        <td></td>
      </tr>
    </table>

    <p></p>

    <table style="margin-left: auto; margin-right: auto">
      <tr>
        <td style="padding: 100px">
          <div style="border: 1px solid; padding: 10px">
            <p style="text-align: center">Penerima Pengaduan</p>
            <div style="height: 50px"></div>
            <p style="text-align: center">(...................)</p>
          </div>
        </td>

        <td>
          <div style="border: 1px solid; padding: 10px">
            <p style="text-align: center">Penerima Pengaduan</p>
            <div style="height: 50px"></div>
            <p style="text-align: center">(...................)</p>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>

@endforeach