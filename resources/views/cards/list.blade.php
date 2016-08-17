@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Card List</div>

                <div class="panel-body">
                    <table class="table table-full">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="relative"></th>
                                <th>Card ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($cards as $card)
                            <tr>
                                <td><input type="checkbox" class="relative"></td>
                                <td>{{ $card->id }}</td>
                                <td>{{ $card->name }}</td>
                                <td>
                                    <a href="{{ url('/cards/edit') }}?id={{ $card->id }}" class="btn btn-link btn-round" data-title="Edit item">
                                        <i class="fa fa-fw fa-pencil"></i>
                                    </a>
                                    <button type="button" class="btn btn-link btn-round" data-title="Delete item">
                                        <i class="fa fa-fw fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="panel-footer">
                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ url('/cards/add') }}">Create Card</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
