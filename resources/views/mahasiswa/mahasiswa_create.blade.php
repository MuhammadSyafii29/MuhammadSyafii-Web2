@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        
        <div class="card-header">Tambah Data Mahasiswa
        <a href="mahasiswa" class="btn btn-md btn-success float-right">Data Mahasiswa</a>

        <div class="card-body">
        <form>
            <div class="form-group row">
            <label class="col-md-4 text-md-right">Nama Lengkap</label>
            <div class="col-md-6">
            <input type="text" name="nama" class="form-control">
            </div>
            </div>
                <div class="form-group row">
                <label class="col-md-4 text-md-right">Tempat Lahir</label>
                <div class="col-md-6">
                <input type="text" name="tempat_lahir" class="form-control">
                </div>
                </div>
                <div class="form-group row">
            <label class="col-md-4 text-md-right">Tanggal Lahir</label>
            <div class="col-md-6">
            <input type="text" name="tgl_lahir" class="form-control">
            </div>
            </div>
                <div class="form-group row">
                <label class="col-md-4 text-md-right">Telepon</label>
                <div class="col-md-6">
                <input type="text" name="telepon" class="form-control">
                </div>
                </div>
                <div class="form-group row">
            <label class="col-md-4 text-md-right">Alamat</label>
            <div class="col-md-6">
            <input type="text" name="alamat" class="form-control">
            </div>
            </div>
                <div class="form-group row">
                <label class="col-md-4 text-md-right">Gender</label>
                <div class="col-md-6">
                <input type="text" name="gender" class="form-control">
                </div>
                </div>
                <div class="form-group row">
            <label class="col-md-4 text-md-right">Photo</label>
            <div class="col-md-6">
            <input type="file" name="foto" class="form-control">
            </div>
            </div>

        </form>
        </div>
        </div>
        </div>
        
        </div>
    </div>
    </div>
@endsection