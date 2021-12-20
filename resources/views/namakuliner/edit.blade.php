
@extends('template.default')
@section('content')
 <div class="col-md-12">
     <div class="tile">
         <h3 class="tile-title">Update Data Kuliner</h3>
         <div class="tile-body">
             <form action="{{ route('namakuliner.update', $namakuliners) }}" method="post" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <div class="form-group">
               <label class="control-label">Nama Kuliner</label>
               <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Kuliner" value="{{ $namakuliners->nama }}">
               @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
               
             </div>
             <div class="form-group">
               <label class="control-label">Kategori Wisata Kuliner</label>
               <select class="form-control @error ('kategori') is-invalid @enderror" name="kategori">
               <option selected value="0"> -- Pilih Kategori -- </option>
               @foreach ($kategori as $kategori)
               <option value="{{ $kategori->id }}"
               @if ($kategori->id == $namakuliners->kategori__kuliners_id)
                   selected
                   @endif >{{ $kategori->nama }}</option>
               @endforeach
               </select>
               @error('kategori')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
             </div>
             <div class="form-group">
               <label class="control-label">Nama Tempat Kuliner</label>
               <select class="form-control @error ('namatempat') is-invalid @enderror" name="namatempat">
               <option selected value="0"> -- Pilih Nama Tempat -- </option>
               @foreach ($namatempat as $namatempat)
               <option value="{{ $namatempat->id }}"
               @if ($namatempat->id == $namakuliners->nama_tempat__kuliners_id)
                   selected
                   @endif >{{ $namatempat->nama }}</option>
               @endforeach
               </select>
               @error('namatempat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
             </div>
             <div class="form-group">
               <label class="control-label">Deskripsi Kuliner</label>
               <textarea class="form-control @error ('deskripsi') is-invalid @enderror" name="deskripsi">{{ $namakuliners->deskripsi }}</textarea>
               @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
               
             </div>
             <div class="form-group">
               <label class="control-label">Pilih Gambar</label>
               <input type="file" class="form-control @error ('images') is-invalid @enderror" name="images">
               @error('images')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
             </div>
             <div class="form-group">
               <label class="control-label">Harga (Rp.)</label>
               <input type="text" class="form-control @error ('harga') is-invalid @enderror" name="harga" placeholder="Masukkan Kisaran Harga Kuliner" value="{{ $namakuliners->harga }}">
               @error('harga')
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
