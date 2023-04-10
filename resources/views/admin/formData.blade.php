@extends('admin.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Querys</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{url('/admin/index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Querys</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Users
{{--                    <a href="/register_user" class="btn btn-outline-primary btn-sm float-end"> + Add User</a>--}}
                </div>
                <div class="card-body">

                    @include('flash_data')

                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>sr no</th>
                            <th>Name</th>
                            <th>Tour link</th>
                            <th>Email car</th>
                            <th>Mobile suv</th>
                            <th>Country car</th>
                            <th>Pickup</th>
                            <th>drop drive</th>
                            <th>Pickuplocation</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($user as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->Name}}</td>
                                <td>{{$data->Tour}}</td>
                                <td>{{$data->Email}}</td>
                                <td>{{$data->Mobile}}</td>
                                <td>{{$data->Country}}</td>
                                <td>{{$data->Pickup}}</td>
                                <td>{{$data->drop}}</td>
                                <td>{{$data->Pickuplocation}}</td>
                                <td>{{$data->Remarks}}</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
