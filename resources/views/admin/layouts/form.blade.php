@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add info</h3>
                    </div>
                    <!--- Form starts -->
                    <form method="POST" action="@yield('actionUrl')" @yield('encrypt')>
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                               @yield('formBody')
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">
                                                @yield('actionName')
                                            </button>
                                            <a href="@yield('indexRoute')" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
