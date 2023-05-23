<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKTA</title>
    <style>
        /* table tr .text{
            text-align: right;
        } */
        table tr .person{
           font-style: italic;
        }
        table tr .sipil{
            text-align: center;
            font-size: 16px;
        }
        table tr .regis{
            text-align: center;
            font-size: 14px;
            font-style: italic;
        }
        table tr .wrg{
            font-size: 12px;
        }
        table tr .nation{
            font-size: 12px;
            font-style: italic;
        }
        table tr .akta{
            text-align: center;
            font-size: 16px;
        }
        table tr .bird{
            text-align: center;
            font-size: 14px;
            font-style: italic;
        }
        table tr .nama{
            text-align: center;
            font-size: 20px;
        }
        table tr .font{
            font-size: 15px;
        }
        table tr .ortu{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <center>
        <table>
            <tr>
                <td width="160"><u>Nomor Induk Kependudukan</u></td>
                <td class="font" width="200"><strong>{{ $akta->nik }}</strong></td>
                <td class="text" width="150">No.<strong> AL 6270477579</strong></td>
            </tr>
            <tr>
                <td class="person">Personnel Registration Number</td>
            </tr>
        </table>
        <br>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td><img src="logo.jpg" width="80px" height="80px"></td>
            </tr>
        </table>
        <br>
        <table style="margin-left:auto;margin-right:auto" >
            <tr>
                <td class="sipil"><strong><u>PENCATATAN SIPIL</u></strong></td>
            </tr>
        </table>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td class="regis">RIGISTRY OFFICE</td>
            </tr>
        </table>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td class="wrg"><strong><u>WARGA NEGARA</u></strong></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td class="wrg"><strong>INDONESIA</strong></td>
            </tr>
        </table>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td class="nation">NATIONALITY</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td class="nation"><strong>INDONESIAN</strong></td>
            </tr>
        </table>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td class="akta"><strong><u>KUTIPAN AKTA KELAHIRAN</u></strong></td>
            </tr>
        </table>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td class="bird">EXCERPT OF BIRTH CERTIFICATE</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td width="220"><u>Berdasarkan Akta Kelahiran Nomor</u></td>
                <td class="font" width="200"><strong>3205.LT.0412013-0168</strong></td>
            </tr>
            <tr>
                <td class="person">By Virtue Of Birth Certificate Number</td>
            </tr>
        </table>
        <table  width="661">
            <tr>
                <td><u>menurut stbld</u></td>
            </tr>
            <tr>
                <td class="person">in accordance with state gazette</td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="60"><u>bahwa di</u></td>
                <td class="font" width="210"><strong>{{ $akta->tmp_lahir }}</strong></td>
                <td width="80"><u>pada tanggal</u></td>
                <td class="font" width="80"><strong>{{ $akta->tgl_lahir }}</strong></td>
            </tr>
            <tr>
                <td class="person">that in</td>
                <td></td>
                <td class="person">on date</td>
            </tr>
        </table>
        <table>
            <tr>
                <td><u width="60">tahun</u></td>
                <td class="font" width="200"><strong>{{ $akta->thn_lahir }}</strong></td>
                <td><u>telah lahir</u></td>
            </tr>
            <tr>
                <td class="person">on year</td>
                <td></td>
                <td class="person">was born</td>
            </tr>
        </table>
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td class="nama"><strong>{{ $akta->nama }}</strong></td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="40"><u>anak ke</u></td>
                <td class="font" width="30"><strong>{{ $akta->anak }}</strong></td>
                <td class="font" width="80"><strong>{{ $akta->gender }}</strong></td>
                <td class="ortu" width="70"><strong>DARI AYAH</strong></td>
                <td class="font" width="130"><strong>{{ $akta->nm_ayah }}</strong></td>
                <td class="ortu" width="50"><strong>DAN IBU</strong></td>
                <td class="font" width="130"><strong>{{ $akta->nm_ibu }}</strong></td>
            </tr>
            <tr>
                <td class="person">child no</td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="260"></td>
                <td width="120"><u>Kutipan ini dikeluarkan</u></td>
                <td width="187" class="font"><strong>DI KAB.BANGGAI LAUT</strong></td>
            </tr>
            <tr>
                <td></td>
                <td class="person">The excerpt is issued</td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="260"></td>
                <td width="80"><u>pada tanggal</u></td>
                <td class="font" width="187"><strong>{{ \Carbon\Carbon::now()->format('d M Y') }}</strong></td>
            </tr>
            <tr>
                <td></td>
                <td class="person">on date</td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="260"></td>
                <td width="50"><u>Kepala</u></td>
                <td class="font" width="170" align="center"><strong>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</strong></td>
            </tr>
            <tr>
                <td></td>
                <td class="person">Head Of</td>
            </tr>
        </table>
        <br><br><br>
        <table>
            <tr>
                <td width="300"></td>
                <td class="font" align="center" width="200"><strong><u>KAMRAN B. TANGIA, SE</u> <br>NIP. 196304122000121003</strong></td>
            </tr>
        </table>
    </center>
</body>
</html>