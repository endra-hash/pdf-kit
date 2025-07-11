<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$imagePath = 'site_map.jpeg';
$imageData = base64_encode(file_get_contents($imagePath));
$imageSrc = 'data:image/jpeg;base64,' . $imageData;

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <title>Hot Work Permit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 9px;
        }

        table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 2px;
            vertical-align: top;
        }

        .header {
            /* background: #dc143c; */
            color: black;
            text-align: center;
            font-weight: bold;
            justify-content: center;
        }

        .section-title {
            background: #e0e0e0;
            font-weight: bold;
            text-align: left;
            padding-left: 5px;
        }

        .checkbox {
            display: inline-block;
            width: 10px;
            height: 10px;
            border: 1px solid black;
            margin-right: 4px;
            vertical-align: middle;
        }

        .checked {
            background-color: black;
        }

        .center {
            text-align: center;
        }

        .bottom {
            vertical-align: bottom;
        }

        .bg-merah {
            background: red;
            color: white;
            text-align: center;
        }

        .bg-grey {
            background: #e0e0e0;
        }

        .bg-blue {
            background: rgb(187, 223, 255);
            text-align: center;
        }

        .checkbox2 {
            width: 12px;
            height: 12px;
            border: 1px solid #000;
            display: inline-block;
        }

        td.checkbox-cell {
            text-align: center;
            vertical-align: middle;
        }

        .table-no-border td {
            border: none !important;
        }

        .border-none {
            border: none !important;
        }

        .left {
            text-align: left;
        }

        .top-align {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tr>
            <td rowspan="3" width="20%" class="header">LOGO <br> PERUSAHAAN</td>
            <td class="header">PERUSAHAAN BIOETANOL</td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td class="header">FORMULIR</td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td class="center">(HOT WORK / FLAME PERMIT) / HWP</td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td colspan="3" class="bg-merah">IZIN PEKERJAAN MENGGUNAKAN API / ENERGI PANAS</td>
        </tr>
        <tr>
            <td colspan="3" class="bg-merah">(HOT WORK / FLAME PERMIT) / HWP</td>
        </tr>
        <tr>
            <td colspan="3" class="bg-grey">Bila tanda bahaya berbunyi, hentikan pekerjaan, matikan peralatan atau mesin dan ikuti arah evakuasi untuk berkumpul di</td>
        </tr>
        <tr>
            <td colspan="3" class="bg-grey">area evakuasi (muster point) . Izin kerja berlaku kembali setelah semua kondisi kerja aman dan terkendali.</td>
        </tr>
    </table>
    <table width="100%" class="table-no-border">
        <tr>
            <td width="15%">Nama Pemohon</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td width="10%">Bagian</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td width="15%">Perusahaan</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td width="15%">Lokasi Pekerjaan</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td width="10%">Tanggal</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td width="15%">Nomor Ijin</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td width="15%">Jumlah Pekerja</td>
            <td width="1%">:</td>
            <td width="15%">.......... orang</td>
            <td width="10%">Jam</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td width="17%">Deskripsi Pekerjaan</td>
            <td width="1%">:</td>
            <td width="15%">....................</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Jenis Pekerjaan</td>
            <td>:</td>
            <td colspan="7">
                <span class="checkbox"></span>Welding &nbsp;&nbsp;&nbsp;
                <span class="checkbox"></span>Grinding &nbsp;&nbsp;&nbsp;
                <span class="checkbox"></span>Drilling &nbsp;&nbsp;&nbsp;
                <span class="checkbox"></span>Cutting &nbsp;&nbsp;&nbsp;
                <span class="checkbox"></span>Cutting &nbsp;&nbsp;&nbsp;
                <span class="checkbox"></span>....................
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table width="100%">
        <tr class="bg-blue">
            <td width="80%">Persiapan Pekerjaan</td>
            <td width="10%">YA</td>
            <td width="10%">TIDAK</td>
        </tr>
        <tr>
            <td>Apakah pekerja sudah diberi penjelasan secara detail pekerjaan yang akan dilakukan?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah pekerja sudah diberi penjelasan tentang bahaya yang ada / dapat terjadi pada pekerjaannya?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah memastikan bahwa material mudah terbakar telah dipindahkan?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah menyiapkan blower (jika dilakukan dalam tangki)?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah menyediakan fire blanket?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah memastikan APAR / Hidran tersedia di lokasi?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah memastikan barikade telah terpasang?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah memastikan adanya penerangan (jika dilakukan di ruang gelap)?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah dilakukan flushing pada area kerja?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah terdapat pekerjaan lain disekitar area kerja?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
        <tr>
            <td>Apakah sudah dilakukan uji gas mudah terbakar?</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
    </table>
    <table width="100%">
        <tr class="bg-blue">
            <td colspan="6">Identifikasi Bahaya Pekerjaan dan Alat Alat Pelindung Diri (APD) yang Diperlukan</td>
        </tr>
        <tr>
            <td colspan="6" class="center">Pengukuran Gas Mudah Tebakar</td>
        </tr>
        <tr class="center">
            <td>Jenis Gas</td>
            <td>NAB</td>
            <td>Aktual</td>
            <td>Jenis Gas</td>
            <td>NAB</td>
            <td>AKtual</td>
        </tr>
        <tr class="center">
            <td>O2</td>
            <td>19.50% - 23.5%</td>
            <td></td>
            <td>H25</td>
            <td>10/15 ppm</td>
            <td></td>
        </tr>
        <tr class="center">
            <td>CO</td>
            <td>50 ppm</td>
            <td></td>
            <td>LEL</td>
            <td>&lt;10%</td>
            <td></td>
        </tr>
    </table>
    <table width="100%" class="table-no-border">
        <tr>
            <th colspan="6" class="center">Alat Pelindung Diri (APD)</th>
        </tr>
        <tr>
            <td>Proteksi Kepala</td>
            <td><span class="checkbox"></span>Helm safety</td>
            <td><span class="checkbox"></span>Helm las</td>
            <td><span class="checkbox"></span>Faceshield</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Wajah</td>
            <td><span class="checkbox"></span>Full face mask</td>
            <td><span class="checkbox"></span>Half face mask</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Mata</td>
            <td><span class="checkbox"></span>Kacamata</td>
            <td><span class="checkbox"></span>Kacamata safety hitam</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Telinga</td>
            <td><span class="checkbox"></span>Earplug</td>
            <td><span class="checkbox"></span>Earmuff</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Hidung</td>
            <td><span class="checkbox"></span>Masker gas</td>
            <td><span class="checkbox"></span>Masker debu</td>
            <td><span class="checkbox"></span>SCBA</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Tangan</td>
            <td><span class="checkbox"></span>Sarung tangan kain</td>
            <td><span class="checkbox"></span>Sarung tangan karet</td>
            <td><span class="checkbox"></span>Sarung tangan listrik</td>
            <td><span class="checkbox"></span>Sarung tangan kulit</td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Badan</td>
            <td><span class="checkbox"></span>Baju tahan panas</td>
            <td><span class="checkbox"></span>Baju apron</td>
            <td><span class="checkbox"></span>Wearpack</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Kaki</td>
            <td><span class="checkbox"></span>Sepatu safety</td>
            <td><span class="checkbox"></span>Sepatu karet</td>
            <td><span class="checkbox"></span>Sepatu tahan listrik</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Proteksi Ketinggian</td>
            <td><span class="checkbox"></span>Body harness</td>
            <td><span class="checkbox"></span>Full body harness</td>
            <td><span class="checkbox"></span>Jaring pengaman</td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td colspan="5" class="bg-blue">Emergency Respon Plan (ERP)</td>
        </tr>
        <tr>
            <td width="35%">BILA TERJADI KEADAAN DARURAT</td>
            <td colspan="3" class="center" width="30%">NOMOR TELEPON DARURAT</td>
            <td width="35%" class="center">Lokasi Kerja (tandai lokasi tempat anda bekerja)</td>
        </tr>
        <tr>
            <td>1. JANGAN PANIK</td>
            <td class="center">INSTANSI</td>
            <td class="center">TLP</td>
            <td class="center">WAKTU</td>
            <td rowspan="8"><img src="<?= $imageSrc ?>" style="width: 180px; height: 120px; text-align: center; vertical-align: middle;" /></td>
        </tr>
        <tr>
            <td rowspan="2">2. DENGARKAN SIRENE SIAGA --- dst</td>
            <td>PMK KOTA</td>
            <td class="center">113</td>
            <td class="center">15 MENIT</td>            
        </tr>
        <tr>
            <td colspan="3" class="center">0321-325013</td>            
        </tr>
        <tr>
            <td rowspan="2">3. SIAP MENUNGGU PERINTAH EVAKUASI</td>
            <td>PMK TJIWI</td>
            <td></td>
            <td class="center">5 MENIT</td>        
        </tr>
        <tr>
            <td colspan="3" class="center">0321-388113</td>        
        </tr>
        <tr>
            <td rowspan="3">4. IKUTI ARAH PANAH KE ARAH LOKASI EVAKUASI (MUSTER POINT)</td>
            <td class="center">POLSEK</td>
            <td></td>
            <td class="center">2 MENIT</td>            
        </tr>
        <tr>
            <td colspan="3" class="center">0321-362062</td>            
        </tr>
        <tr>
            <td colspan="3" class="center">RSUD. BASOENI 0321-361341</td>            
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td colspan="6" class="bg-blue">Persetujuan Penanggung Jawab dan Pengeluaran Surat Izin Kerja</td>
        </tr>
        <tr>
            <td width="30%" rowspan="3">Pekerjaan telah dilakukan sesuai prosedur dengan menerapkan pengendalian risiko yang telah diidentifikasi sebelumnya</td>
            <td width="10%" rowspan="3" class="checkbox-cell"><span class="checkbox2"></span></td>
            <td width="60%" colspan="4" class="center">Izin kerja diberkan untuk dijalankan seperti yang tertera di atas selama:</td>
        </tr>
        <tr class="border-none">
            <td colspan="2">Dari</td>
            <td colspan="2">Sampai dengan</td>
        </tr>
        <tr class="border-none">
            <td colspan="2">Tanggal: ..../..../........ &nbsp;&nbsp;&nbsp; Jam: ......</td>
            <td colspan="2">Tanggal: ..../..../........ &nbsp;&nbsp;&nbsp; Jam: ......</td>
        </tr>
        <tr>
            <td>Semua kondisi, risiko, dan pengendalian pekerjaan telah disampaikan kepada pelaksana pekerjaan</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td rowspan="2" class="center bottom">Pelaksana Kerja</td>
            <td rowspan="2" class="center bottom">Supervisor HSE</td>
            <td rowspan="2" class="center bottom">Supervisor Area</td>
            <td rowspan="2" class="center bottom">Manager</td>
        </tr>
        <tr>
            <td>Kondisi lokasi kerja sudah benar-benar dipastikan aman untuk dilakukan pekerjaan</td>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
        </tr>
    </table>
    <table width="100%" class="table-no-border">
        <tr>
            <td colspan="8" class="bg-blue">Pemberitahuan Penyelesaian Pekerjaan (SPV HSE)</td>
        </tr>
        <tr>
            <td width="5%" class="checkbox-cell"><span class="checkbox2"></span></td>
            <td width="21%">Pekerjaan Selesai</td>
            <td width="8%">Nama</td>
            <td width="1%">:</td>
            <td width="15%"></td>
            <td width="5%">Tanggal</td>
            <td width="1%">:</td>
            <td width="14%">..../...../.........</td>
        </tr>
        <tr>
            <td class="checkbox-cell"><span class="checkbox2"></span></td>
            <td>Pekerjaan Membutuhkan Permit Baru</td>
            <td>Tanda Tangan</td>
            <td>:</td>
            <td></td>
            <td>Jam</td>
            <td>:</td>
            <td>........</td>
        </tr>
    </table>


</body>

</html>
<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("Hot_Work_Permit.pdf", ["Attachment" => false]);
?>
