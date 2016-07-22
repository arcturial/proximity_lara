@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-full">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="relative"></th>
                                <th>Beacon ID</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Battery Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($beacons as $beacon)
                            <tr>
                                <td><input type="checkbox" class="relative"></td>
                                <td>{{ $beacon->beacon_id }}</td>
                                <td>{{ $beacon->getReadableType() }}</td>
                                <td>{{ $beacon->getReadableStatus() }}</td>
                                <td>{{ $beacon->battery or '?' }}</td>
                                <td>
                                    <button type="button" class="btn btn-link btn-round" data-title="Edit item">
                                        <i class="fa fa-fw fa-pencil"></i>
                                    </button>
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
                        <a class="btn btn-primary" href="{{ url('/beacons/add') }}">Add Beacon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
