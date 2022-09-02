@extends('layouts/base_view')

@section('title', 'Delete Category')
    
@section('content')
    
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Category') }}
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
                                        <p class="text-center">Are you sure you want to delete this category?</p>
                                        <p class="text-center">Once deleted, it cannot be recovered!</p>
                                        <br>
                                        <table class="table table-striped table-sm table-bordered text-center" style="background-color: white">
                                          <thead>
                                            <th>Name</th>
                                            <th>Description</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>{{ $category->name }}</td>
                                              <td>{{ $category->description }}</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <hr>
                                        <br>
                                          <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('categories.index')}}" class="btn btn-dark">Regresar</a>
                                            <button class="btn btn-danger">
                                              <span class="fas fa-trash-alt"></span> Delete
                                            </button>
                                          </form>
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