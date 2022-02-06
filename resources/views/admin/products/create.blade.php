@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



{!! Form::model($product,[
    'method' => $product->exists ? 'put' : 'post',
    'enctype'=> 'multipart/form-data',
    'route' => $product->exists ? ['product.update', $product->id] : ['product.store']
]) 

!!}
<section >
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                       <div class="d-flex bd-highlight">
                            <div class="p-2 w-50 bd-highlight">
                                <h3>Tambah Produk</h3>
                            </div>
                        <div class="p-2 w-50 flex-shrink-1 bd-highlight d-flex justify-content-end" > <a class="btn btn-success" href="{{ route('product.index') }}">Kembali</a></div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="nama" class="form-control"
                                                placeholder="" name="nama">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nip">Deskripsi</label>
                                            <input type="text" id="nip" class="form-control"
                                                name="deskripsi" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Kategori</label>
                                            {!! Form::select('id_kategori', ['' => '- Pilih -']+$categoryproduct->toArray(), null, ['class' => 'form-control', 'id' => 'id_kategori']) !!}                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" id="harga" class="form-control"
                                                name="harga" placeholder="">
                                        </div>
                                    </div>                               
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control"
                                                name="foto" placeholder="">

                                        </div>
                                    </div>
                                    
                                    <div class="col-12 d-flex justify-content-end">
                                       
                                         {!! Form::submit($product->exists ? 'Simpan' : 'Simpan', ['class'=>'btn btn-success btnsubmit'] ) !!}
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
      
    $('#tgl_kerja').datepicker({
    format: 'yyyy-mm-dd'
    });

</script>

@endsection()