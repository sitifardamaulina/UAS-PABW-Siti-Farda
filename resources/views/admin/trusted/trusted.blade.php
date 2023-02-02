@extends('admin.index')
@section('container')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('success'))
                    <div class="alert alert-danger" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="/dashboard/trusted/create">
                                    <i class="zmdi zmdi-plus"></i>Add Trusted
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trusted as $c)
                                    <tr class="tr-shadow">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c['title'] }} {{ $c['subtitle'] }}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard/trusted/{{ $c['id'] }}/edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="/dashboard/trusted/{{ $c['id'] }}" method="POST">
                                                
                                                @csrf
                                                @method('delete')
                                                <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection