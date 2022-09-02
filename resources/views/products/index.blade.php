@extends('layouts/base_view')

@section('title', 'Products')
    
@section('content')
    
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <a href="{{ route('products.create') }}" class="btn btn-primary">
                                        <span class="fas fa-plus-square"></span> Add New
                                    </a>
                                    @if ($messeger = Session::get('success'))
                                    <br><br>
                                        <div class="alert alert-success" role="alert">
                                            {{ $messeger }}
                                        </div>                            
                                    @endif
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col-sm-12">
                                        <table class="table table-sm table-bordered" id="table_categoria">
                                            <thead>
                                                <th>Name</th>
                                                <th>Client</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($product as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->client->names }}</td>
                                                        <td>{{ $item->category->name }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->stock }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning btn-sm"> 
                                                                <span class="fas fa-edit"></span>
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('products.show', $item->id) }}" class="btn btn-danger btn-sm">    
                                                                <span class="fas fa-trash-alt"></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection