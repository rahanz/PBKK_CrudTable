@extends('layout.index')

@section('title', 'List Item')
@section('PageTitle', 'Data Table')

@section('TableContent')
    <div class="container mt-4">
        <h2>Item Game List</h2>
        <a href="{{ url('table/create') }}" class="btn btn-primary">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $database->firstItem() ?>
                @foreach ($database as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->nama_item }}</td>
                    <td>Rp. {{ number_format($item->harga_item) }},00</td>
                    <td>
                        <a href="{{ url('table/'.$item->nama_item.'/edit') }}" class="btn btn-warning btn-sm" onclick="editItem(1)">Edit</a>
                        <form onsubmit="return confirm('yakin akan menghapus data?')" class="d-inline" action="{{ url('table/'.$item->nama_item) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        {{ $database->links() }}
    </div>
@endsection
