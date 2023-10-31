@extends('layout.index')

@section('title', 'List Item')
@section('PageTitle', 'Data Table')

@section('TableContent')
    <div class="container mt-4">
        <h2>Item Game List</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItemModal">Add</button>
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
                <tr>
                    <td>1</td>
                    <td>Item 1</td>
                    <td>$10</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editItem(1)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteItem(1)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Item 2</td>
                    <td>$20</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editItem(2)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteItem(2)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addItemModalLabel">Tambah Item Game</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="itemForm">
                        <div class="mb-3">
                            <label for="namaItem" class="form-label">Nama Item</label>
                            <input type="text" class="form-control" id="namaItem" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" form="itemForm" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
