@extends('admin.navbar')    

@section('content')
<br><br>
<div class="container bg-white mx-auto p-3 rounded mt-2 shadow">
    <h4>Form Tambah User</h4>
    <form action="/admin/user/tambah" method="POST">
        @csrf
        <div class="form-group mt-1">
            <label>Nama</label>
            <input type="text" name="name" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Email</label>
            <input type="email" name="email" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Password</label>
            <input type="text" name="password" class="form-control form-sm">
        </div>
        <div class="form-group mt-1">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
                <option value="owner">Owner</option>
            </select>
        </div>
        <div class="form-group mt-1">
            <label>ID Outlet</label>
            <select name="id_outlet" class="form-control">
                <option value="">Pilih Outlet</option>
                @foreach ($get as $b)
                    <option value="{{ $b->id }}">{{ $b->id }} - {{$b->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-1">
            <button class="btn btn-sm btn-primary float-end"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>
@endsection