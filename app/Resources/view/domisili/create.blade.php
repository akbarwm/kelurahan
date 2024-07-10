<form action="{{ route('domisili.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="submit" value="Simpan">
</form>
