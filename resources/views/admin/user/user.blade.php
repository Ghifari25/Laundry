@extends('admin.navbar')

@section('content')
<br><br>
<div class="container card bg-white mx  ">
    <div class="card-header">
        <a href="/admin/user/tambah" class="btn btn-sm btn-primary float-end">Tambah User</a>
    </div>
    <div class="card-body">
        <table class="table display table-sm table-bordered" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>ID Outlet</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                @foreach ($get as $a)
                <tr>
                    <td><?= $i++?></td>
                    <td>{{ $a->name }}</td>
                    <td>{{ $a->email }}</td>
                    <td>{{ $a->role }}</td>
                    <td>{{ $a->id_outlet }}</td>
                    <td>
                        <a href="/admin/user/edit/{{ $a->id }}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/admin/user/hapus/{{ $a->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data pelanggan ini ? ')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection