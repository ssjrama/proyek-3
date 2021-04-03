@extends('layouts.admin')
@section('content')    
    <a href="/treatment/create" class="btn btn-primary">Tambah Data Treatment</a>
        @if (count($treatments)>0) {{-- mengecek apakah terdapat data pegawai --}}
            <table id="datatables" class="table table-striped display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($treatments as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->price}}</td>
                    <td><a href="/treatment/{{$t->id}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Hapus</button>
                            <!-- Modal untuk konfirmasi penghapusan data -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin akan menghapus data ini ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                    <form action="/treatment/{{$t->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">YES</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </td>
                </tr>
            @endforeach
                </tbody>
           </table>        
       @else
       @endif
@endsection