@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Beacon</div>

                <div class="panel-body">

                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#details" role="tab" data-toggle="tab">Details</a></li>
                        <li role="presentation"><a href="#url" role="tab" data-toggle="tab">URL</a></li>
                        <li role="presentation"><a href="#card" role="tab" data-toggle="tab">Card</a></li>
                    </ul>

                    <br/><br/>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="details">
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
                                        <button type="submit" class="btn btn-default">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="url">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="beacon[url]" class="col-sm-2 control-label">Eddystone URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="beacon[url]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="card">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Current Image</label>
                                    <div class="col-sm-10">
                                        <p class="form-control-static">
                                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY4ZDc4OWJmZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjhkNzg5YmZmIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="..." class="img-thumbnail">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="beacon[beacon_id]" class="col-sm-2 control-label">Card Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="beacon_card[image]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="beacon[description]" class="col-sm-2 control-label">Content</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="beacon_card[description]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
