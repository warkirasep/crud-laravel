<form action="{{ $destroy }}" method="POST">
	@csrf
	<input type="hidden" name="_method" value="delete" />
	<a class="btn btn-success btn-sm" href="{{ $edit_url }}">Ubah</a> |
	<button class="btn btn-danger btn-sm">Hapus</button>
</form>
