@extends('admin.layouts.app')

@section('titre', 'Liste des catégories')

@section('content')
    <div class="card shadow mb-4 m-3">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Categories
            </h6>
            <div class="ml-auto">

                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">New category</span>
                </a>

            </div>
        </div>
        @include('admin.partials._filter', ['model' => route('categories.index')])
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Nombre de produits</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th class="text-center" style="width: 30px;">Action</th>
                </tr>
                </thead>
                <tbody>
               @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>

                        <td><a href="{{ route('categories.show',$category->id) }}">
                                {{ $category->nom }}
                            </a>
                        </td>
                        <td>{{ $category->products_count }}</td>
                        <td>{{ $category->slug ?? '' }}</td>
                        <td> {{ $category->status ? 'Active' : 'Inactive' }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                   {document.getElementById('delete-category-{{ $category->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            <form action=""
                                  method="POST"
                                  id="delete-category-{{ $category->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No categories found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                    <tr>
                       <td colspan="6">
                            <div class="float-right">
                                {!! $categories->appends(request()->all())->links() !!}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection






