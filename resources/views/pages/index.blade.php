@extends('layouts.master')

@section('content')
<div class="block-header">
    <h2>DASHBOARD</h2>
</div>

<!-- Widgets -->
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">playlist_add_check</i>
            </div>
            <div class="content">
                <div class="text">PARKIR TERSEDIA</div>
                <div class="number count-to" data-from="0" data-to="15" data-speed="15" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="material-icons">help</i>
            </div>
            <div class="content">
                <div class="text">PARKIR TERISI</div>
                <div class="number count-to" data-from="0" data-to="5" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">forum</i>
            </div>
            <div class="content">
                <div class="text">TIDAK TERDETEKSI</div>
                <div class="number count-to" data-from="0" data-to="2" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person_add</i>
            </div>
            <div class="content">
                <div class="text">KERUSAKAN</div>
                <div class="number count-to" data-from="0" data-to="2" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>TRANSMISI DATA</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <div class="switch panel-switch-btn">
                            <span class="m-r-10 font-12">REAL TIME</span>
                            <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                        </div>
                    </div>
                </div>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Cetak laporan transmisi data</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="real_time_chart" class="dashboard-flot-chart"></div>
            </div>
        </div>
    </div>
</div>


@endsection
