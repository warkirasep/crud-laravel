@extends('welcome')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Form Ubah Buku</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ini Adalah Form Ubah Buku
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="{{ route('buku.update', $buku->id) }}" method="POST">
                        	@csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="form-group">
                                <label>Kode Buku</label>
                                <input class="form-control" name="code" value="{{ $buku->code }}">
                            </div>
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input class="form-control" name="judul" value="{{ $buku->judul }}">
                            </div>
                            <div class="form-group">
                                <label>Penulis Buku</label>
                                <input class="form-control" name="penulis" value="{{ $buku->penulis }}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Terbit Buku</label>
                                <input class="form-control" name="tgl_terbit" value="{{ $buku->tgl_terbit }}">
                            </div>
                            <button type="submit" class="btn btn-default">Simpan</button>
                        </form>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection