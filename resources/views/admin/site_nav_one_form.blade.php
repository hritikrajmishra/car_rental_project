@extends('admin.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Nav One</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{url('/admin/index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Nav One</li>
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
                            <th>title</th>
                            <th>fav_icon Id</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>about_us</th>
                            <th>fb</th>
                            <th>insta</th>
                            <th>tweeter</th>
                            <th>linkdin</th>
                            <th>pintrest</th>
                            <th>youtube</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($user as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->fav_icon}}</td>
                                <td>{{$data->mobile}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->about_us}}</td>
                                <td>{{$data->fb}}</td>
                                <td>{{$data->insta}}</td>
                                <td>{{$data->tweeter}}</td>
                                <td>{{$data->ldn}}</td>
                                <td>{{$data->pintrest}}</td>
                                <td>{{$data->yt}}</td>
                                <td style="max-width: 30px">

                                    <a href="{{url('admin/edit_user',$data->id)}}" class="btn btn-sm btn-warning">Edit</a>

{{--                                    <a href="{{route('/admin_change_user_status',[$data->id,'status'=>$data->is_active==1 ? 0:1])}}" class="btn btn-sm btn-{{$data->is_active==1 ? "danger":"success"}}">{{$data->is_active==1 ? 'Deactivate':'Activate'}}</a>--}}

{{--                                                                    @if($data->is_active==0)--}}
{{--                                                                    <a href="{{route('/admin_change_user_status',[$data->id,'status'=>1])}}" class="btn btn-sm btn-success">Activate</a>--}}
{{--                                                                    @else--}}
{{--                                                                    <a href="{{route('/admin_change_user_status',[$data->id,'status'=>0])}}" class="btn btn-sm btn-danger">Deactivate</a>--}}
{{--                                                                    @endif--}}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
