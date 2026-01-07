<a href="{{ route('products.create') }}">Tambah Produk</a>
<table border="1">
  @foreach($products as $p)
  <tr>
    <td>{{ $p->name }}</td>
    <td>{{ $p->price }}</td>
    <td>
      <a href="{{ route('products.edit',$p->id) }}">Edit</a>
      <form method="POST" action="{{ route('products.destroy',$p->id) }}">
        @csrf
        @method('DELETE')
        <button>Hapus</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
