@extends('admin.layouts.app')

@section('titre', 'Détails du produit')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $product->nom }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('produits.index') }}" class="btn btn-primary">
                    <span class="text">Back to products</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Product Name</th>
                    <td>{{ $product->nom }}</td>
                    <th>Slug</th>
                    <td>{{ $product->slug }}</td>
                </tr>
                <tr>
                    <th>Catégorie</th>
                    <td>{{ $product->category->nom }}</td>
                    <th>Slug</th>
                    <td>{{ $product->author->name }}</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>{{ $product->quantity }}</td>
                    <th>Prix</th>
                    <td>{{ $product->prix }}</td>
                </tr>
                <tr>
                    <td>Featured</td>
                    <td>{{ $product->featured }}</td>
                    <td>Category</td>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td>{{ $product->created_at ? $product->created_at->format('Y-m-d') : "Undefined" }}</td>
                    <td>Updated At</td>
                    <td>{{ $product->updated_at ? $product->updated_at->format('Y-m-d') : "Undefined" }}</td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td colspan="3">{{ $product->description }}</td>
                </tr>
                <tr>
                    <th>Détails</th>
                    <td colspan="3">{{ $product->details }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
