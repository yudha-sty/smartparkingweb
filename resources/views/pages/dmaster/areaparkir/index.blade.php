@extends('layouts.master')

@section('content')

<div class="block-header">
    <h2>AREA PARKIR</h2>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA AREA PARKIR
                            </h2>
</br>
                        <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Data</button>
                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                             <!-- Form -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DATA AREA</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{!! route('areaparkir.store') !!}">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_area" required>
                                        <label class="form-label">Nama Area</label>
                                        @if($errors->has('nama_area'))
                                        <div class="text-danger">
                                        {{ $errors->first('nama_area')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jumlah_slot" required>
                                        <label class="form-label">Jumlah Slot</label>
                                        @if($errors->has('jumlah_slot'))
                                        <div class="text-danger">
                                        {{ $errors->first('jumlah_slot')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" required>
                                        <label class="form-label">Alamat</label>
                                        @if($errors->has('alamat'))
                                        <div class="text-danger">
                                        {{ $errors->first('alamat')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kelurahan" required>
                                        <label class="form-label">Kelurahan</label>
                                        @if($errors->has('kelurahan'))
                                        <div class="text-danger">
                                        {{ $errors->first('kelurahan')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kecamatan" required>
                                        <label class="form-label">Kecamatan</label>
                                        @if($errors->has('kecamatan'))
                                        <div class="text-danger">
                                        {{ $errors->first('kecamatan')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                <button type="button submit" class="btn bg-orange waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span>
                                </button>
                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Form -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{!! route('areaparkir.create') !!}">Tambah Data</a></li>
                                        <li><a href="javascript:void(0);">Export Pdf</a></li>
                                        <li><a href="javascript:void(0);">Print</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Area</th>
                                            <th>Jumlah Slot</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Area</th>
                                            <th>Jumlah Slot</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($areaparkir as $a)
                                        <tr>
                                            <td>{{ $a->id }} </td>
                                            <td>{{ $a->nama_area }}</td>
                                            <td>{{ $a->jumlah_slot }}</td>
                                            <td>{{ $a->alamat }}</td>
                                            <td>{{ $a->kelurahan }}</td>
                                            <td>{{ $a->kecamatan }}</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                            <a href="{!! route('areaparkir.update', $a->id) !!}"><button type="button" class="btn btn-default waves-effect">UPDATE</button></a>
                                            <a href="{!! route('areaparkir.delete', $a->id) !!}"><button type="button" class="btn btn-default waves-effect">DELETE</button></a>
                                             </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->


@endsection