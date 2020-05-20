@extends('welcome')
@section('style')
<!-- DataTables CSS -->
<link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Read Buku Data Tables</h1>
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
                    <table class="table" id="read-buku-datatable">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Penulis Buku</th>
                                <th>Tgl Terbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
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
@section('script')
<!-- DataTables JavaScript -->
<script src="../js/dataTables/jquery.dataTables.min.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#read-buku-datatable').DataTable({
        	processing: true,
        	serverSide: true,
        	ajax: {
        		url: '{{ route('buku-datatable.index') }}'
        	},
        	columns : [
        		{ data: 'id', name: 'id' },
        		{ data: 'code', name: 'code' },
        		{ data: 'judul', name: 'judul' },
        		{ data: 'penulis', name: 'penulis' },
        		{ data: 'tgl_terbit', name: 'tgl_terbit' },
                { data: 'action', name: 'action' }
        	],
            responsive: true
        });
    });
</script>
@endsection