<?php

$arr = $data['result'];
$max = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i]["count"] > $max) {
        $max = $arr[$i]["count"];
        $idx = $i;
    }
   
}



?>

<html>

<head>
    <title> KOP SURAT </title>
    <style type="text/css">
        body {
            font-family: "Times New Roman", Times, serif;
            
        }

      

        .tabel-kop {
            border-bottom: 5px solid #000;
            padding: 2px
        }

        .tengah {
            text-align: center;
            line-height: 10px;
        }

        .paragraph {
            font-size: 13pt;
            line-height: 25px;
            text-align: justify;
            text-indent: 1cm;
        }

        p {
            text-align: justify;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="rangkasurat">
        <table width="100%" class="tabel-kop">
            <tr>
                <td> <img src="{{ asset('assets-be/images/logo.png') }}" width="140px"> </td>
                <td class="tengah">
                    <h2>PANITIA PEMILIHAN PERBEKEL DESA AKAH</h2>
                    <h2>KECAMATAN KLUNGKUNG</h2>
                    <h2>PEMERINTAH KABUPATEN KLUNGKUNG</h2>
                    <p class="center">Alamat : Jl. Raya Besakih Desa Akah, Telp. 0366 - 23824 <br><br> Kode Pos 80176,
                        Email:
                        kantorperbekeldesaakah@gmail.com</p>
                </td>
            </tr>
        </table>
        <br>
        <center>
            <b>BERITA ACARA <br> REKAPITULASI HASIL PENGHITUNGAN SUARA <br> Nomor: ..../.... </b>
        </center>

        <p class="paragraph">Pada hari ini minggu tanggal dua puluh empat bulan oktober tahun dua ribu dua puluh tiga,
            kami Panitia pemilihan Perbekel Desa Akah, Kecamatan Klungkung, Kabupaten Klungkung, berdasarkan laporan dan
            Berita Acara Hasil perhitungan suara pada masing masing KPPS, telah mengadakan Rekapitulasi perhitungan
            suara pada pemilihan Perbekel desa Akah, Kecamatan Klungkung Kabupaten klungkung</p>

        <p>Dari hasil Rekapitulas perhitungan suara yang telah dilaksanakan diperoleh sebagai berikut: </p>

        <table>
            <tr>
                <td>I.</td>
                <td>Pemilih</td>
            </tr>
            <tr>
                <td></td>
                <td>a. Jumlah Pemilih</td>
                <td>:</td>
                <td>{{ count($data['pemilih']) }} Orang</td>
            </tr>
            <tr>
                <td></td>
                <td>b. Hak Suara Terpakai </td>
                <td>:</td>
                <td>{{ count($data['result']) }} Suara</td>
            </tr>
            <tr>
                <td></td>
                <td>c. Hak Suara Tidak Terpakai</td>
                <td>:</td>
                <td>{{ count($data['pemilih']) - count($data['result']) }} Suara</td>
            </tr>
        </table>

        <br>



        <table>
            <tr>
                <td>II.</td>
                <td>Perolehan Suara</td>
            </tr>
            <tr>
                <td></td>
                <td>a. Suara Sah Masing Masing Calon</td>
                <td>:</td>
                <td></td>
                <td></td>
            </tr>
            <?php $i = 1; ?>
            @foreach ($data['result'] as $key)
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $key['nomor_urut'] }}. {{ $key['name'] }}</td>
                    <td>:</td>
                    <td>{{ $key['count'] }} Suara</td>
                </tr>
            @endforeach
        </table>


        <p>Berdasarkan hasil perhitungan suara tersebut diatas maka Sdr. <b>{{ $data["result"][$idx]["name"] }}</b> dengan nomor urut
            <b>{{ $data["result"][$idx]["nomor_urut"] }}</b> telah memperoleh suara sah terbanyak, sehingga telah memenuhi syarat untuk diajukan kepada badan
            permusyawaratan Desa Akah, kecamatan klungkung Kabupaten klungkung untuk diterapkan sebagai Calon perbekel
            terpilih .
        </p>

        <p class="paragraph">
            Demikian berita acara ini dibuat dengan sebenarnya dan dapat dipergunakan seperlunya
        </p>

        <p class="right" style="margin-right: 2cm;">
            Desa Akah, 24 Oktober 2023
        </p>

        <br>

        <table width="100%" border="1">
            <tr>
                <td class="center">
                    KETUA PANITIA
                    <br><br><br>
                    (WAWAN SUNIATA)
                </td>
                <td class="center">
                    SEKRETARIS
                    <br><br><br>
                    (INI WAYAN MULYANI)
                </td>
            </tr>

        </table>
    </div>

</body>

</html>
