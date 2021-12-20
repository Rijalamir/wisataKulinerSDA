
@extends('template.default')
@section('content')
 <div class="col-md-12">
     <div class="tile">
         <h3 class="tile-title">Tambah Data Tempat Kuliner</h3>
         <div class="tile-body">
             <form action="{{ route('namatempat.store') }}" method="post">
             @csrf
             <div class="form-group">
               <label class="control-label">Nama Tempat</label>
               <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Tempat Kuliner">
               @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
               
             </div>
             <div class="form-group">
               <label class="control-label">Alamat Tempat</label>
               <input type="text" class="form-control @error ('address') is-invalid @enderror" name="address" placeholder="Masukkan Alamat Tempat Kuliner">
               @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
               
             </div>

             </div>
             <div class="form-group">
               <label class="control-label">No. Telp</label>
               <input type="text" class="form-control @error ('telp') is-invalid @enderror" name="telp" placeholder="Masukkan No. Telpon">
               @error('telp')
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
