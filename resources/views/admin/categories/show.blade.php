@extends('admin.layouts.app')

@section('titre', 'Détails de la catégorie')

@section('content')
    <div class="card shadow mb-4 m-3">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $category->nom }}
            </h6>
            <div>
                <a href="{{ route('categories.index') }}" class="btn btn-primary">
                    <span class="text">Back to categories</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>Categorie Name</th>
                                <td>{{ $category->nom }}</td>
                                <th>Status</th>
                                <td> {{ $category->status ? 'Active' : 'Inactive' }}</td>
                            </tr>
                            <tr>
                                <th>Nombre de produits</th>
                                <td></td>
                                <th>slug</th>
                                <td>{{ $category->slug }}</td>

                            </tr>
                          
                            <tr>
                                <th>Created At</th>
                                <td>{{  $category->created_at ?  $category->created_at->format('Y-m-d') : "Undefined" }}</td>
                                <th>Updated At</th>
                                <td>{{ $category->updated_at ? $category->updated_at->format('Y-m-d') : "Undefined" }}</td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td colspan="3">{{ $category->description }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
