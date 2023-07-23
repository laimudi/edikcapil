<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KK</title>
    <style>
        div.landscape-parent {
            width: 296mm;
            height: 209mm;
        }

        div.landscape {
            width: 296mm;
            height: 209mm;
        }
        @media print {
        body {
            background: none;
        }
        /* div.page {
            width: 209mm;
            height: 296mm;
        } */
        /* div.landscape {
            transform: rotate(270deg) translate(-296mm, 0);
            transform-origin: 0 0;
        } */
        div.portrait,
        div.landscape,
        div.page {
            margin: 0;
            padding: 0;
            border: none;
            background: none;
        }
        }
        table tr .kk{
            font-size: 25px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="page landscape-parent">
        <div class="landscape">
          <div class="content">
            <center>
                @foreach ($kartukel as $data)
                <table>
                    <tr>
                        <td><img src="{{ asset('public/images/logo.png') }}" alt="" width="80" height="80"></td>
                        <td class="kk" width="700"><strong>KARTU KELUARGA</strong> <br><strong>NO. {{ $data->nomor_kk }}</strong></td>
                    </tr>
                </table>
                <table style="font-size: 14px; font-weight: bold;">
                    <tr>
                        <td width="150px">Nama Kepala Keluarga</td>
                        <td>:</td>
                        <td width="50%"><strong>{{ $data->nm_kl }}</strong></td>
                        <td>Desa/Kelurahan</td>
                        <td>:</td>
                        <td width="150">{{ $data->kelurahan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td width="255">{{ $data->alamat }}</td>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td width="180">{{ $data->kecamatan->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td>RT/RW</td>
                        <td>:</td>
                        <td width="255">{{ $data->rt }}</td>
                        <td>Kabupaten/Kota</td>
                        <td>:</td>
                        <td width="150">{{ $data->kabupaten }}</td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td>:</td>
                        <td width="255">{{ $data->kode_pos }}</td>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td width="150">{{ $data->provinsi }}</td>
                    </tr>
                </table>
                <table border="1" style="border-collapse: collapse; font-size: 12px; font-weight: bold;" width="90%">
                    <tr style="text-align: center">
                        <td width="10">No</td>
                        <td width="150">Nama Lengkap</td>
                        <td width="120">NIK</td>
                        <td width="50">Jenis Kelamin</td>
                        <td width="100">Tempat Lahir</td>
                        <td width="50">Tanggal Lahir</td>
                        <td width="40">Agama</td>
                        <td width="100">Pendidikan</td>
                        <td width="100">Jenis Pekerjaan</td>
                    </tr>
                    <tr align="center">
                        <td></td>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>(5)</td>
                        <td>(6)</td>
                        <td>(7)</td>
                        <td>(8)</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->tmp_lahir }}</td>
                        <td>{{ $data->tgl_lahir }}</td>
                        <td>{{ $data->agaman }}</td>
                        <td>{{ $data->pendidikan }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                    </tr>
                </table>
                <br>
                <table border="1" style="border-collapse: collapse; font-size: 12px; font-weight: bold;" width="90%">
                    <tr style="text-align: center">
                        <td rowspan="2" width="10">No</td>
                        <td rowspan="2" width="80">Status Perkawinan</td>
                        <td rowspan="2" width="100">Status Hubungan Dalam Keluarga</td>
                        <td rowspan="2" width="80">Kewarga Negaraan</td>
                        <td colspan="2">Dokumen Imigrasi</td>
                        <td colspan="2" width="180">Nama Orang Tua</td>
                    </tr>
                    <tr align="center">
                        <td>No. Paspor</td>
                        <td>No. KITAP</td>
                        <td>Ayah</td>
                        <td>Ibu</td>
                    </tr>
                    <tr align="center">
                        <td></td>
                        <td>(9)</td>
                        <td>(10)</td>
                        <td>(11)</td>
                        <td>(12)</td>
                        <td>(13)</td>
                        <td>(14)</td>
                        <td>(15)</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->status_kk }}</td>
                        <td>{{ $data->warga_negara }}</td>
                        <td>{{ $data->nomor_ps }}</td>
                        <td>{{ $data->nomor_kitap }}</td>
                        <td>{{ $data->nm_ayah }}</td>
                        <td>{{ $data->nm_ibu }}</td>
                    </tr>
                   
                </table>
                <br>
                <table style="font-size: 12px; font-weight: bold; margin-left: 10px; float: left;">
                    <tr>
                        <td width="120">Dikeluarkan Tanggal</td>
                        <td width="10">:</td>
                        <td></td>
                        <td>{{ \Carbon\Carbon::now()->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td>LEMBAR</td>
                        <td>:</td>
                        <td width="10">I.</td>
                        <td>Kepala Keluarga</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>II.</td>
                        <td>RT</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>III.</td>
                        <td>Desa/Kelurahan</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>IV.</td>
                        <td>Kecamatan</td>
                    </tr>
                </table>
                <table style="font-size: 12px; font-weight: bold; margin-top: 21px; margin-left: 130px; float: left;">
                    <tr align="center">
                        <td>KEPALA KELUARGA</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr align="center">
                        <td><u>{{ $data->nm_kl }}</u></td>
                    </tr>
                    <tr align="center">
                        <td>Tanda Tangan/Cap Jempol</td>
                    </tr>
                </table>
                @endforeach
                <table style="font-size: 12px; font-weight: bold; margin-top: 21px; margin-right: 100px; float: right;">
                    <tr align="center">
                        <td width="230">KEPALA DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr align="center">
                        <td><u>PERMADI SUPU, S.KOM., M.KOM</u></td>
                    </tr>
                    <tr align="center">
                        <td>Tanda Tangan/Cap Jempol</td>
                    </tr>
                </table>
            </center>
          </div>
        </div>
    </div>
</body>
</html>