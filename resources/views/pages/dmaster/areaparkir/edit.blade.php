@extends('layouts.master')

@section('content')

<div class="block-header">
    <h2>AREA PARKIR</h2>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DATA AREA</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{!! route('areaparkir.update_action', $areaparkir->id) !!}">
                               {{ csrf_field() }}  
                              
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_area" value="{{ $areaparkir->nama_area }}">
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
                                        <input type="text" class="form-control" name="jumlah_slot" value="{{ $areaparkir->jumlah_slot }}">
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
                                        <input type="text" class="form-control" name="alamat" value="{{ $areaparkir->alamat }}">
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
                                        <input type="text" class="form-control" name="kelurahan" value="{{ $areaparkir->kelurahan }}">
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
                                        <input type="text" class="form-control" name="kecamatan" value="{{ $areaparkir->kecamatan }}">
                                        <label class="form-label">Kecamatan</label>
                                        @if($errors->has('kecamatan'))
                                        <div class="text-danger">
                                        {{ $errors->first('kecamatan')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Form -->

@endsection