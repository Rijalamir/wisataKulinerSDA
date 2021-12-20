
@extends('template.default')
@section('content')
 <div class="col-md-12">
     <div class="tile">
         <h3 class="tile-title">Tambah Data Kategori</h3>
         <div class="tile-body">
             <form action="{{ route('kategori.store') }}" method="post">
             @csrf
             <div class="form-group">
               <label class="control-label">Nama Kategori</label>
               <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Kategori">
               @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
             </div>
         </div>
         <div class="tile-footer">
             <button class="btn btn-primary" type="submit">
                 <i class="fa fa-save"> Simpan</i>
             </button>
         </div>
         </form>
     </div>
 </div>
@endsection
