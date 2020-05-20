@extends('welcome')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Read Buku</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <!-- /.col-lg-6 -->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabel Buku
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Penulis Buku</th>
                                <th>Tgl Terbit</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($buku as $item)
                        		<tr>
                                	<td>{{ $item->id }}</td>
	                                <td>{{ $item->code }}</td>
	                                <td>{{ $item->judul }}</td>
	                                <td>{{ $item->penulis }}</td>
	                                <td>{{ $item->tgl_terbit }}</td>
	                            </tr>
                        	@endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
@endsection