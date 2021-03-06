<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets-dashboard/img/favicon.png">
  <title>
    E-Parkir 2022
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="/assets-dashboard/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets-dashboard/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets-dashboard/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/user/eparking" target="_blank">
        <img src="/assets-dashboard/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Eparking</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
            
          </a>
        </li>
       
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="/user/eparking">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user me-sm-1 opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Welcome {{Auth()->user()->name}}</span>
            
          </a>
        </li>
       
      </ul>
     
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
            </div>
          </div>
          <form action="/user/login/logout" method="post">
            @csrf
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
             
              <button class="btn btn-danger" type="submit"><i class="fas fa-sign-out-alt"></i></button>
              </a>
            </li></form>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
               <i class="fas fa-car"></i>
               
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Mobil Yang Terparkir</p>
                <h4 class="mb-0">{{$countingmobilterparkir}}</h4>
              </div>
            </div>
            
            
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">@</span>Eparking</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-motorcycle"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Motor Yang Terparkir</p>
                <h4 class="mb-0">{{$countingmotorterparkir}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">@</span>Eparking</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Kendaraan Keluar</p>
                <h4 class="mb-0">{{$kendaraankeluar}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">@</span>Eparking</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Pendapatan</p>
                <h4 class="mb-0">{{$pendapatan}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">@</span>Eparking</p>
            </div>
          </div>
        </div>
        
<br><br><br><br><br><br>

        <div class="row">
            <div class="col-sm-15">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Parkir</h5>
                  <hr><hr>
                  @if(session()->has('success'))
               <font style="color: green">{{session('success')}}</font>
                  @endif
                
                  <form action="/user/eparking" method="POST">
                    @csrf
                  <h5 class="card-title">Plat Nomor</h5>
                  <input type="text" class="form-control" id="plat" placeholder="" name="platnomor" style="background-color: #F0F8FF; width:100%" autofocus required>
                  <hr><hr>
                  <h5 class="card-title">Kendaraan</h5>
                  <input type="radio" id="html" name="kendaraan" value="Motor">
                  <label for="html">Motor</label><br>
                  <input type="radio" id="css" name="kendaraan" value="Mobil">
                  <label for="css">Mobil</label><br>
                  <input type="radio" id="javascript" name="kendaraan" value="lainnya">
                  <label for="javascript">Lainnya</label>
                  <hr><hr>
                  <button type="submit" class="btn btn-success">Submit</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <div class="hidden"><hr>
       
        </div>
        
      
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h3 mb-2 text-gray-800">Tables</h1> 
        <p class="mb-4">Data Kendaraaan Yang Terpakir <a target="_blank"
                href="#">@eParking</a>.</p>
                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                <div class="input-group input-group-outline">
                  <form action="/user/eparking">
                   
                  <label class="form-label"></label>
                  <input type="search" class="form-control" name="search" placeholder="Search">
              
                </form>
                
                </div>
                
            </div>
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Karcis</th>
                                <th>Plat Nomor</th>
                                <th>Kendaraan</th>
                                <th>Tarif</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Cetak Karcis</th>

                            </tr>
                        </thead>
                        
                        <tbody>
                         @foreach ($dataparking as $item)
                             
                       
                            <tr>
                                <td>DHKB00{{$item->id}}</td>
                                <td>{{$item->platnomor}}</td>
                                <td>{{$item->kendaraan}}</td>
                                <td>{{$item->tarif}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                  @if($item->status == "Masuk")
                                  <b style="color: green">{{$item->status}}</b> 
                                  @endif
                                  @if($item->status == "Keluar")
                                  <b style="color: red">{{$item->status}}</b> 
                                  @endif
                                </td>
                                <td><form action="/user/eparking/status/{{$item->id}}" method="post">
                                    @csrf
                                @method('put')
                                <button type="submit" class="btn btn-danger" target="_blank">Keluar</i></button>

                                </form>
                                <td>
                                    <form action="/user/eparking/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('put')

                                    <button type="submit" class="btn btn-warning" ><i class="fas fa-print"></i></button>
                                </td></form>
                               

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if(session()->has('notfounddata'))
                    <center><h6>Belum Ada Data Parkir</h6></center>
                    @endif
                    @if(session()->has('notfoundsearch'))
                    <center><h6>Data Tidak Ditemukan</h6></center>
                    @endif
                </div>
            </div>
        </div>
      
    </div>
    <footer><center><font style="Arial">@copyright By Surya Kindi || 2022</center></footer>
        
      
  <!--   Core JS Files   -->
  <script src="/assets-dashboard/js/core/popper.min.js"></script>
  <script src="/assets-dashboard/js/core/bootstrap.min.js"></script>
  <script src="/assets-dashboard/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets-dashboard/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/assets-dashboard/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>