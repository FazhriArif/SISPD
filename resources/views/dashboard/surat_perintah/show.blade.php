<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show SPPD</title>
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logokab.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logokab.png') }}">
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
    <style>
        body{
            padding: 1em;
            line-height: 1.5;
        }
        .kop{
            line-height: 1;
        }
        .tengah{
            padding-left: 37px;
            padding-right: 90px;
        }
        #tabel td, #tabel th {
        border: 1px solid #ddd;
        padding: 8px;
        }
        #tabel tr:nth-child(even){background-color: #f2f2f2;}
        #ptabel tr:hover {background-color: #ddd;}
        #tabel th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        }
        .kiri{
        padding-left: 300px;
        }
        .kirii{
        padding-left: 300px;
        }
        .kanan{
        padding-left: 300px;
        padding-top: 10px;
        }
        .kanant{
        padding-left: 300px;
        padding-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container container-fluid">
        <table align="center" class="kop">
            <tr>
                <td><img src="{{ url('assets/images/logokab.png') }}" alt="Pemkot" style="width: 90px; height: 100px;"></td>
                <td align="center">
                    <font size="4">PEMERINTAH KABUPATEN CIREBON</font><br>
                    <font size="6"><b>{{ $instansis[0]->nama }}</b></font><br>
                    <font size="2">Alamat : {{ $instansis[0]->alamat }} Telp/Fax {{ $instansis[0]->no_hp }} Email: {{ $instansis[0]->email }}</font><br>
                    <font size="3">{{ $instansis[0]->domisili }} KODE POS:{{ $instansis[0]->kode_pos }}</font>

                </td>
            </tr>
            <tr>
                <td colspan="2"><hr style="border: 2px solid"></td>
            </tr>
        </table>
    </div>

    <br>
    <div class="container container-fluid">
        <div class="d-flex justify-content-center">
            <h2 class="h4 text-bold text-decoration-underline text-uppercase">Surat Perintah Perjalanan Dinas</h2>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="h5">Nomor : {!! $surats->nomor !!}</h2>
        </div>
    </div>
    <br>

    <div class="container container-fluid">
        <table class="table table-bordered h6">
            <tr>
                <th scope="row">1</th>
                <th scope="row">Pejabatan berwenang yang memberi Perintah</th>
                <td>Sekretaris</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <th scope="row">Nama/NIP Pegawai yang diperintahkan</th>
                <td>
                    {!! $surats->pegawai->nama !!}
                    <br>
                    NIP. {!! $surats->pegawai->nip !!}
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <th scope="row">
                a. Pangkat dan Golongan <br>
                b. Jabatan
                </th>
                <td>
                a. {!! $surats->pegawai->pangkat->golongan !!}/{!! $surats->pegawai->pangkat->ruang !!} <br>
                b. {!! $surats->pegawai->jabatan->nama !!}
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <th scope="row">Maksud Perjalanan</th>
                <td>{!! $surats->uraian !!}</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <th scope="row">
                a. Tempat Berangkat <br>
                b. Tempat Tujuan <br>
                c. Anggaran
                </th>
                <td>
                a. {!! $surats->perjalanan->tempat_berangkat !!} <br>
                b. {!! $surats->perjalanan->tempat_tujuan !!} <br>
                c. {!! $surats->perjalanan->anggaran !!}
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <th scope="row">
                a. Lamanya Perjalanan <br>
                b. Tanggal Berangkat <br>
                c. Tanggal Harus Kembali
                </th>
                <td>
                a. {!! $surats->perjalanan->lama_perjalanan !!} Hari<br>
                b. {!! $surats->perjalanan->tanggal_berangkat !!} <br>
                c. {!! $surats->perjalanan->tanggal_kembali !!}
                </td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <th scope="row">Angkutan yang digunakan</th>
                <td>{!! $surats->perjalanan->kendaraan->nama !!}</td>
            </tr>
            {{-- <tr>
                <th scope="row">8</th>
                <th scope="row">
                Pengikut : Nama <br>
                {{ $surats->pegawai->pengikut->nama }}
                </th>
                <th scope="row">
                Umur / Hubungan Kekeluargaan <br>
                {{ $surats->pegawai->pengikut->umur }} / {{ $surats->pegawai->pengikut->hubungan }}
                </th>
            </tr> --}}
            <tr>
                <th scope="row">8</th>
                <th scope="row">Instansi</th>
                <td>Dinas Kearsipan dan Perpustakaan Kabupaten Cirebon</td>
            </tr>
        </table>
    </div>
    <div class="container">
        <div class="d-flex justify-content-end">
            <p class="text h6">Dikeluarkan di : CIREBON</p>
        </div>
        <div class="d-flex justify-content-end">
            <p class="text h6">Pada Tanggal : {{ date('d-m-Y') }}</p>
        </div>
    </div>
    <div class="container container-fluid">
        <table>
            <tr>
                <td></td>
                <td class="kanan"></td>
                <td class="kanan"> Mengetahui</td>

            </tr>
            <tr>
                <td></td>
                <td class="kanant"></td>
                <td class="kanant" style="font-weight: bold;">Sekretaris </td>
            </tr>
        </table>

        <table>
            <tr>
                <td></td>
                <td class="kiri"></td>
                <td class="kiri" style="font-weight: bold; text-decoration: underline; font-size: 11">H. IIK AHMAD RIFA'I, S.Ag, M.Si.</td>
            </tr>
            <tr>
                <td></td>
                <td class="kirii"></td>
                <td class="kirii" style="padding-top: -5">NIP : 196803301994031005</td>
            </tr>
        </table>
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
