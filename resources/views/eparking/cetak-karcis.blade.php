<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <style>
    table, th, td {
      border: 1px solid black;
    }
    </style>
  <title>
    E-Parkir 2022 
  </title>

</head>
<div class="table-responsive">
<center>
  <h2> PARKIR KENDARAAN DHKB00{{$printing->id}} </h2>
  <h2> Tarif Parkir : {{$printing->tarif}} </h2>

  <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
    <tbody>
      <td> Jenis Kendaraan : {{$printing->kendaraan}} </td></table>
    

    </tbody></table>
    <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
      <tbody>
        <td> Nomor Kendaraan    : {{$printing->platnomor}} </td>
      </tbody></table>
      <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
        <tbody>
          <td> Tanggal    : {{$printing->created_at}} </td>
        </tbody></table>
      <b>Note : <br>
        1. Kacris Hilang Harus Menunjukkan STNK <br>
        2. Barang Hilang Tidak Tanggung Jawab Pihak Parkiran
      
</center>

      <!-- TODO: Buat konten web di ini 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
      
            <tr>
                <th>Kode Karcis</th>
                <th>Plat Nomor</th>
                <th>Kendaraan</th>
                <th>Tarif</th>
                <th>Tanggal</th>

            </tr>
        </thead>
        
        <tbody>
        
             
       
            <tr>
                <td>DHKB00{{$printing->id}}</td>
                <td>{{$printing->platnomor}}</td>
                <td>{{$printing->kendaraan}}</td>
                <td>{{$printing->tarif}}</td>
                <td>{{$printing->created_at}}</td>
                
               

            </tr>
         
        </tbody>
    </table>
  -->
</div>
<script>
    window.print();

</script>
<!--   Core JS Files   -->

</body>

</html>