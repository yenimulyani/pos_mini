@extends('layouts.app')

@section('content')

<form action="{{ route('categoryproduct.update',$categoryproduct->id) }}" method="POST">
        @csrf
        @method('PUT')


<section >
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                       <div class="d-flex bd-highlight">
                            <div class="p-2 w-50 bd-highlight">
                                <h3>Edit Kategori</h3>
                            </div>
                        <div class="p-2 w-50 flex-shrink-1 bd-highlight d-flex justify-content-end" > <a class="btn btn-success" value="{{$categoryproduct->jenis}}" href="{{ route('categoryproduct.index') }}">Kembali</a></div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="kategori" class="form-control"
                                                placeholder="" value="{{$categoryproduct->kategori}}" name="kategori">
                                        </div>
                                    </div>                                    
                                    <div class="col-12 d-flex justify-content-end">
                                       
                                         {!! Form::submit($categoryproduct->exists ? 'Simpan' : 'Simpan', ['class'=>'btn btn-success btnsubmit'] ) !!}
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

        
@endsection()