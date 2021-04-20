@extends('books.layout')

@section('content')
</br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
              
            </div>

            <!-- Form Search -->
            <div class="float-left my-2">
                <form action="{{ route('buku.index') }}" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('buku.create') }}"> Input Book</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered" style="color:white; text-align:center"> 
        <tr style="background-color:grey"> 
            <th>ID Buku</th> 
            <th>Judul</th>
            <th>Kategori</th> 
            <th>Penerbit</th> 
            <th>Pengarang</th> 
            <th>Jumlah</th>
            <th>Status</th> 
            <th width="250px">Action</th> 
        </tr> 
        @foreach ($books as $Book) 
        <tr style="background-color:white">  
        
            <td style="color:black; text-align:center">{{ $Book->id_buku }}</td> 
            <td style="color:black; text-align:center">{{ $Book->Judul }}</td> 
            <td style="color:black; text-align:center">{{ $Book->Kategori }}</td> 
            <td style="color:black; text-align:center">{{ $Book->Penerbit }}</td> 
            <td style="color:black; text-align:center">{{ $Book->Pengarang }}</td> 
            <td style="color:black; text-align:center">{{ $Book->Jumlah }}</td> 
            <td style="color:black; text-align:center">{{ $Book->Status }}</td> 
            <td> 

            <form action="{{ route('buku.destroy',$Book->id_buku) }}" method="POST">   
                <a class="btn btn-info" href="{{ route('buku.show',$Book->id_buku) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('buku.edit',$Book->id_buku) }}">Edit</a>
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
    </br>
        {{$books->links()}}
        </br>
    </div>
    
@endsection