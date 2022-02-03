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
</div>
<script>
    window.print();

</script>
<!--   Core JS Files   -->

</body>

</html>