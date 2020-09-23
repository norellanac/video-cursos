@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    @if (session('message'))
    <div class="sufee-alert alert with-close alert-{{ session('alert') }} alert-dismissible fade show">
        <span class="badge badge-pill badge-{{ session('alert') }}">{{ session('message') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="d-flex">
        <p class="h1 text-dark text-center">Proveedores</p>
    </div>
    <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight d-none">Categorias</div>
        <div class="p-2 bd-highlight">
            <a href=" {{url('suppliers/create')}}" class="btn btn-success btn-sm" style="border-radius: 95px">
                <i class="fas fa-plus-circle"></i>
                Agregar
            </a>
        </div>
        <div class="ml-auto p-2 bd-highlight">
            <div class="btn-group ml-3" role="group" aria-label="Basic example">
                <a href="#" class="d-none btn bg-theme-1 text-light btn-sm"
                    onClick="$('#tableID').tableExport({type:'json',escape:'false'});">
                    <span class=""><i class="fas fa-ellipsis-v"></i></span> JSON</a>
                <a href="#" class="btn bg-theme-1 text-light btn-sm"
                    onClick="$('#tableID').tableExport({type:'excel',escape:'false'});">
                    <span class=""><i class="fas fa-file-excel"></i></span> XLS</a>
                <a href="#" class="btn bg-theme-1 text-light btn-sm"
                    onClick="$('#tableID').tableExport({type:'csv',escape:'false'});">
                    <span class=""><i class="fas fa-file-csv"></i></span> CSV</a>
                <a href="#" class="btn bg-theme-1 text-light btn-sm"
                    onClick="$('#tableID').tableExport({type:'pdf',escape:'false', htmlContent:'true'});"> <span
                        class=""><i class="fas fa-file-pdf"></i></span> PDF</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table " id="tableID">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Categoria</th>
                    <th></th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td><img src="{{asset('/storage/suppliers/' . $item->url_image)}}" height="30px"></td>
                    <td>{{$item->description}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-sm btn-secondary" href="{{url('suppliers/'. $item->id)}}"
                                title="Ver Detalles">
                                <span class=""><i class="fas fa-eye"></i></span>
                            </a>
                            <a class="btn btn-sm btn-primary" href="{{url('suppliers/'. $item->id . '/edit')}}"
                                title="Editar">
                                <span class=""><i class="fas fa-edit"></i></span>
                            </a>
                            <a class="d-none btn btn-sm btn-danger" title="eliminar" onclick="event.preventDefault();
                                                     document.getElementById('formDel{{$item->id}}').submit();">
                                <span class="text-light"><i class="fas fa-trash"></i></span>
                            </a>
                            <form id="formDel{{$item->id}}" action="{{ url('suppliers/'. $item->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
<!-- Menu Toggle Script -->
<script>
    $(document).ready(function() {
        $('#tableID').DataTable();
    } );
</script>
@endsection