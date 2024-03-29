@extends('layouts.master')

@section('content')

<div class="block-header">
    <h2>MONITORING</h2>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>TRANSMISI DATA AREA TANJUNGPINANG</h2>
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