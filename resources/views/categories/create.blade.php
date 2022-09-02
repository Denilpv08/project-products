@extends('layouts/base_view')

@section('title', 'Add Categories')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
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
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-12">
                                        <form action="{{ route('categories.store') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
                                            <br>
                                            <a href="{{ route('categories.index')}}" class="btn btn-dark">Go Back</a>
                                            <button class="btn btn-primary">
                                                <span class="fas fa-plus-square"></span> Add
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
