@extends('layouts.app')
@section('content')

<div class="card">
   
            <div class="card-header">
                 <div class="d-flex bd-highlight">
                <div class="p-2 w-50 bd-highlight">
                <h3>Data Produk</h3>
                </div>
                 <div class="p-2 w-50 flex-shrink-1 bd-highlight d-flex justify-content-end" > <a class="btn btn-primary" href="{{ route('product.create') }}">Tambah Data</a></div>
            </div>
        </div>

        
            <div class="row">
        
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <!-- <th>Action</th> -->
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach ($product as $comp)
                            
                       
                        <td>{{ ++$i }}</td>
                        <td>{{ $comp->nama }}</td>
                        <td>{{ $comp->kategori }}</td>
                        <td>{{ $comp->deskripsi }}</td>
                        <td>{{ $comp->harga }}</td>
                        <td><img src="{{ storage_path('app/'.$comp->foto) }}" alt="" height="100px"></td>                    


                       <!--  <td class="text-center">
                        	<form action="{{ route('product.destroy',$comp->id) }}" method="POST">

                        		<a class="btn btn-info btn-sm" href="{{ route('product.show',$comp->id) }}">Show</a>

                        		<a class="btn btn-primary btn-sm" href="{{ route('product.edit',$comp->id) }}">Edit</a>

                        		@csrf
                        		@method('DELETE')

                        		<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        	</form>
                        </td>

                     -->
                        
                         </tr>
                         @endforeach


                         </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection