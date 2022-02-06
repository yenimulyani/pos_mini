@extends('layouts.app')

@section('content')

<div class="card">
   
            <div class="card-header">
                 <div class="d-flex bd-highlight">
                <div class="p-2 w-50 bd-highlight">
                <h3>Data Jenis Tugas</h3>
                </div>
                 <div class="p-2 w-50 flex-shrink-1 bd-highlight d-flex justify-content-end" > <a class="btn btn-primary" href="{{ route('categoryproduct.create') }}">Tambah Data</a></div>
            </div>
        </div>

        
            <div class="row">
        
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($categoryproduct as $comp)
                            
                       
                        <td>{{ ++$i }}</td>
                        <td>{{ $comp->kategori}}</td> 
                        <td class="text-center">
                          <td class="text-center">
                            <form action="{{ route('categoryproduct.destroy',$comp->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('categoryproduct.edit',$comp->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                        </td>                    
                         </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection()