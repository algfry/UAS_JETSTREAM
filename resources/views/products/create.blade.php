<form method="POST" action="{{ route('products.store') }}">
@csrf
<input name="name" placeholder="Nama">
<input name="price" placeholder="Harga">
<textarea name="description"></textarea>
<button>Simpan</button>
</form>