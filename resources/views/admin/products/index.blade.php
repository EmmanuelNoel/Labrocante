@extends('admin.layouts.app')


@section('titre', 'Produits')

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="card shadow mb-4 m-3">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Products
            </h6>
            <div class="ml-auto">

                <a href="{{ route('produits.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">New product</span>
                </a>

            </div>
        </div>

        @include('admin.partials._filter', ['model' => route('produits.index')])

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Slug</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Author</th>
                        <th>Created at</th>
                        <th class="text-center" style="width: 30px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if ($product->medias->count() > 0)
                                    <img src="{{ asset('storage/' . $product->medias[0]->path) }}" width="60"
                                        height="60" alt="{{ $product->medias[0]->nom }}">
                                @else
                                    <img src="{{ asset('admin_assets/img/no-img.png') }}" width="60" height="60"
                                        alt="{{ $product->name }}">
                                @endif
                            </td>
                            <td><a href="{{ route('produits.show', $product->id) }}">{{ $product->nom }}</a></td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>SR {{ $product->prix }}</td>
                            <td>{{ $product->category ? $product->category->nom : null }}</td>
                            <td>{{ $product->status->nom }}</td>
                            <td>{{ $product->author->name }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('produits.edit', $product) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);"
                                        onclick="if (confirm('Are you sure to delete this record?'))
                                       {document.getElementById('delete-product-{{ $product->id }}').submit();} else {return false;}"
                                        class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <form action="{{ route('produits.destroy', $product) }}" method="POST"
                                    id="delete-product-{{ $product->id }}" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="10">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            <div class="float-right">
                                {!! $products->appends(request()->all())->links() !!}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
