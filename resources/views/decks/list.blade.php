@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Deck List</div>

                <div class="panel-body">
                    <table class="table table-full">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="relative"></th>
                                <th>Deck ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($decks as $deck)
                            <tr>
                                <td><input type="checkbox" class="relative"></td>
                                <td>{{ $deck->id }}</td>
                                <td>{{ $deck->name }}</td>
                                <td>
                                    <a href="{{ url('/decks/edit') }}?id={{ $deck->id }}" class="btn btn-link btn-round" data-title="Edit item">
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
                        <a class="btn btn-primary" href="{{ url('/decks/add') }}">Create Deck</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
