@extends('dashboard.layouts.app')

@section('container')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak SPPD</title>
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <body>
    <div class="container container-fluid">
        <table align="center" class="kop">
            <tr>
                <td><img src="{{ url('assets/images/logokab.png') }}" alt="Pemkot" style="width: 90px; height: 100px;"></td>
                <td align="center">
                    <font size="4">PEMERINTAH KABUPATEN CIREBON</font><br>
                    <font size="6"><b>{{ $instansis[0]->nama }}</b></font><br>
                    <font size="2">Alamat : {!! $instansis[0]->alamat !!} Telp/Fax {{ $instansis[0]->no_hp }} Email: {{ $instansis[0]->email }}</font><br>
                    <font size="3">{{ $instansis[0]->domisili }} KODE POS:{{ $instansis[0]->kode_pos }}</font>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr style="border: 2px solid"></td>
            </tr>
        </table>
    </div>

    <div class="col-lg-12 d-flex justify-content-center mt-lg-5">
        <a href="/instansi" class="btn btn-info">Back</a>
    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    {{-- <script src="/dist/js/pages/dashboards/dashboard1.js"></script> --}}
</body>
</html>
@endsection
