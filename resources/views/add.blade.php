@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Beacon</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="beacon[beacon_id]" class="col-sm-2 control-label">Beacon ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="beacon[beacon_id]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="beacon[description]" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="beacon[description]">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
