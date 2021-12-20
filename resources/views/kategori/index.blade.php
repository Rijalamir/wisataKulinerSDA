@extends('template.default')
@section('content')
<div class="col-md-12">
     <div class="tile">
         <h4>Data Kategori</h4>
         <div class="tile-body">
             <div class="float-left mb-3">
                 <a href="{{ route('kategori.tambah') }}" class="btn btn-success">
                 <i class="fa fa-plus"> Tambah Data</i>
                 </a>
            </div>
             <div class="table-responsive">
                 <table class="table table-hover table-bordered" id="tablekategoris">
                     <thead>
                         <tr>
                             <td>No</td>
                             <td>Nama Kategori</td>
                             <td>Aksi</td>
                         </tr>
                     </thead>
                     <tbody>
                         @php
                             $no = 0;
                         @endphp
                         @foreach ($kategori as $kategoris)
                            @php
                                $no++;
                            @endphp
                           <tr>
                             <td>{{ $no }}</td>
                             <td>{{ $kategoris->nama }}</td>
                             <td>
                                 <a href="{{ route('kategori.edit', $kategoris) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                  <button id="delete" data-title="{{ $kategoris->nama }}" href="{{ route('kategori.delete', $kategoris) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
<script>$('#tablekategoris').DataTable();</script>

<script type="text/javascript">
    $('button#delete').on('click', function(){
        var href = $(this).attr('href');
        var title = $(this).data('title');

        var result = confirm("Apakah yakin akan menghapus data Kategori " +title+ "?");
        if(result){
            document.getElementById('deleteForm').action = href;
            document.getElementById('deleteForm').submit();
        }
    });
</script>

@endpush

