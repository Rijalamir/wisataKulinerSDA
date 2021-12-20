@extends('template.default')
@section('content')
<div class="col-md-12">
     <div class="tile">
         <h4>Data Kuliner</h4>
         <div class="tile-body">
             <div class="float-left mb-3">
                 <a href="{{ route('namakuliner.tambah') }}" class="btn btn-success">
                 <i class="fa fa-plus"> Tambah Data</i>
                 </a>
            </div>
             <div class="table-responsive">
                 <table class="table table-hover table-bordered" id="tablenamakuliners">
                     <thead>
                         <tr>
                             <td>No</td>
                             <td>Nama Kuliner</td>
                             <td>Kategori</td>
                             <td>Tempat Kuliner</td>
                             <td>Deskripsi</td>
                             <td>Gambar</td>
                             <td>Kisaran Harga (Rp.)</td>
                             <td>Aksi</td>
                         </tr>
                     </thead>
                     <tbody>
                         @php
                             $no = 0;
                         @endphp
                         @foreach ($namakuliner as $namakuliners)
                            @php
                                $no++;
                            @endphp
                           <tr>
                             <td>{{ $no }}</td>
                             <td>{{ $namakuliners->nama }}</td>
                             <td>{{ $namakuliners->kategori['nama'] }}</td>
                             <td>{{ $namakuliners->namatempat['nama'] }}</td>
                             <td>{{ $namakuliners->deskripsi }} </td>
                             <td><img src="{{ asset($namakuliners->getImage()) }}" width="100px" height="100px" alt=""/></td>
                             <td>{{ $namakuliners->harga }}</td>
                             <td>
                                 <a href="{{ route('namakuliner.edit', $namakuliners) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                  <button id="delete" data-title="{{ $namakuliners->nama }}" href="{{ route('namakuliner.delete', $namakuliners) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                  <form action="" method="post" id="deleteForm">
                                     @csrf
                                     @method("DELETE")
                                    <input type="submit" style="display: none">
                                 </form>
                             </td>
                           </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
@endsection

@push('scripts')
<script src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script>$('#tablenamakuliners').DataTable();</script>

<script type="text/javascript">
    $('button#delete').on('click', function(){
        var href = $(this).attr('href');
        var title = $(this).data('title');

        var result = confirm("Apakah yakin akan menghapus data Nama Tempat " +title+ "?");
        if(result){
            document.getElementById('deleteForm').action = href;
            document.getElementById('deleteForm').submit();
        }
    });
</script>

@endpush

