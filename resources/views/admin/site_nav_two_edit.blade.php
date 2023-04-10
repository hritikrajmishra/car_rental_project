
@extends('admin.admin_layout')
@section('content')

    <div class="container h-100" style="margin-top:  0% ;">
        <h1 class="mt-4">Users Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('/admin/index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Nav Two</li>
        </ol>
        <div class="container-xl px-4 mt-4">
            @include('flash_data')
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- Account page navigation-->
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header"><h5>Logo</h5></div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->

                                <img class="img-account-profile rounded-circle mb-2"
                                     src="{{ asset('profiles/'.$nData->logo) }}" height="200px" width="200px"  alt="img">

                        <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <form method="POST" action="{{ route('/admin_user_image_update2',[$nData->id]) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="file" class="form-control" id="" name="logo"
                                               placeholder="profile" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="submit"  id="update" value="Update Profile Image"
                                               class="btn btn-outline-primary">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header"><h5>Account Details</h5></div>
                        <div class="card-body">
                            {{--                            <form method="POST" action="">--}}
                            <form method="post" action="{{ route('/admin_users_update2',[$nData->id]) }}"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fname" class="form-label">logo</label>
                                        <input type="text" class="form-control" id="fname" name="logo"
                                               placeholder="Meet" value="{{ $nData->logo }}"
                                               disabled>
                                    </div>
                                    <div class="col">
                                        <label for="lname" class="form-label">home link</label>
                                        <input type="text" class="form-control" id="lname" name="home_link"
                                               placeholder="Shah" value="{{ $nData->home_link }}"
                                               required="" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label">Budget Car</label>
                                        <input type="text" class="form-control" id="email" name="budget_car"
                                               placeholder="name@example.com" required="" value="{{ $nData->budget_car }}">
                                    </div>
                                    <div class="col">
                                        <label for="contact" class="form-label">Muv/Suv Car</label>
                                        <input type="text" class="form-control" id="contact" name="muv_suv"
                                               required="" value="{{ $nData->muv_suv }}"
                                        >
                                    </div>

                                </div>
                                <div class="col">
                                    <label for="contact" class="form-label">Suv Car</label>
                                    <input type="text" class="form-control" id="contact" name="suv_car"
                                           required="" value="{{ $nData->suv_car }}"
                                    >
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fname" class="form-label">Luxury</label>
                                        <input type="text" class="form-control" id="fname" name="luxury"
                                               placeholder="Meet" value="{{ $nData->luxury}}"
                                               required="">
                                    </div>
                                    <div class="col">
                                        <label for="lname" class="form-label">Self Drive</label>
                                        <input type="text" class="form-control" id="lname" name="self_drive"
                                               placeholder="Shah" value="{{ $nData->self_drive }}"
                                               required="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label">contact</label>
                                        <input type="text" class="form-control" id="email" name="contact"
                                               placeholder="name@545" required="" value="{{ $nData->contact }}">
                                    </div>
                                </div>

                                <br>
                                <div class="mb-3">
                                    <input type="submit" name="update" id="update" value="Update Profile"
                                           class="btn btn-outline-primary">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
