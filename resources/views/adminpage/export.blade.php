<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <?php
    function hari_ini(){
        $hari = date ("D");
     
        if($hari == "Sun"){
            $hari = "Minggu";
        }elseif ($hari == "Mon") {
            $hari = "Senin";
        }elseif($hari == "Tue"){
            $hari = "Selasa";
        }elseif($hari == "Wed"){
            $hari = "Rabu";
        }elseif($hari == "Thu"){
            $hari = "Kamis";
        }elseif($hari == "Fri"){
            $hari = "Jumat";
        }elseif($hari == "Sat"){
            $hari = "Sabtu";
        }else{
            $hari = date('D');
        }
        return $hari;
     
    }

    ?>

<h2>Export Data Jumlah Pendapatan</h2>
<h3>Tanggal Export: <?php echo date('d M Y');?> / <?php echo hari_ini();?></h3>
<h3>Total Akumulasi Pendapatan : Rp.{{$pendapatan}} </h3>

<table>
   
  <tr>
    <th>No</th>
    <th>Total Kendaraan Motor</th>
    <th>Total Kendaraan Mobil</th>
    <th>Total Kendaraan Lainnya</th>
    <th>Total Pendapatan</th>
  </tr>
  <tr>
    <td>#</td>
    <td>{{$jumlahmotor}}</td>
    <td>{{$jumlahmobil}}</td>
    <td>{{$jumlahlainnya}}</td>
    <td>{{$pendapatan}}</td>
  </tr>

</table><br><hr><hr><br>
<h3>Detail Data : </h3>

<table>

  <tr>
    <th>No</th>
    <th>Jenis Kendaraan</th>
    <th>Plat Nomor Kendaraan</th>
    <th>Tanggal Masuk Kendaraaan</th>
    <th>Tarif Kendaraan</th>
  </tr>
  <?php $no=1;?>
  @foreach ($dataparking as $item)
  <tr>
    <td>{{$no++;}}</td>
    <td>{{$item->kendaraan}}</td>
    <td>{{$item->platnomor}}</td>
    <td>{{$item->created_at}}</td>
    <td>{{$item->tarif}}</td>
  </tr>
 @endforeach
</table>
<script>
    window.print();

</script>
</body>
</html>

