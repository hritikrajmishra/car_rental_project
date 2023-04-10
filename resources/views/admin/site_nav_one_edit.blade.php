
@extends('admin.admin_layout')
@section('content')

    <div class="container h-100" style="margin-top:  0% ;">
        <h1 class="mt-4">Users Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('/admin/index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Nav One</li>
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
                        <div class="card-header"><h5>Fav Icon</h5></div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->

                                <img class="img-account-profile rounded-circle mb-2"
                                     src="{{ asset('profiles/'.$nData->fav_icon) }}" height="200px" width="200px"  alt="img">

                        <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <form method="POST" action="{{ route('/admin_user_image_update1',[$nData->id]) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="file" class="form-control" id="" name="fav_icon"
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
                            <form method="post" action="{{ route('/admin_users_update',[$nData->id]) }}"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fname" class="form-label">Tittle</label>
                                        <input type="text" class="form-control" id="fname" name="title"
                                               placeholder="Meet" value="{{ $nData->title }}"
                                               required="">
                                    </div>
                                    <div class="col">
                                        <label for="lname" class="form-label">Fav icon</label>
                                        <input type="text" class="form-control" id="lname" name="fav_icon"
                                               placeholder="Shah" value="{{ $nData->fav_icon }}"
                                                disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label">Mobile</label>
                                        <input type="phone" class="form-control" id="email" name="mobile"
                                               placeholder="name@example.com" required="" value="{{ $nData->mobile }}">
                                    </div>
                                    <div class="col">
                                        <label for="contact" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="contact" name="email"
                                               placeholder="Rsurendra@gmail.com" required="" value="{{ $nData->email }}"
                                        >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fname" class="form-label">About-us</label>
                                        <input type="text" class="form-control" id="fname" name="about_us"
                                               placeholder="Meet" value="{{ $nData->about_us }}"
                                               required="">
                                    </div>
                                    <div class="col">
                                        <label for="lname" class="form-label">Fb</label>
                                        <input type="text" class="form-control" id="lname" name="fb"
                                               placeholder="Shah" value="{{ $nData->fb }}"
                                               required="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label">Insta</label>
                                        <input type="text" class="form-control" id="email" name="insta"
                                               placeholder="name@545" required="" value="{{ $nData->insta }}">
                                    </div>
                                    <div class="col">
                                        <label for="contact" class="form-label">Twitter</label>
                                        <input type="tel" class="form-control" id="contact" name="tweeter"
                                               placeholder="surendra@dd" required="" value="{{ $nData->tweeter }}"
                                        >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fname" class="form-label">Linkedin</label>
                                        <input type="text" class="form-control" id="fname" name="ldn"
                                               placeholder="M@ddd" value="{{ $nData->ldn }}"
                                               required="">
                                    </div>
                                    <div class="col">
                                        <label for="lname" class="form-label">Pintrest</label>
                                        <input type="text" class="form-control" id="lname" name="pintrest"
                                               placeholder="Shah" value="{{ $nData->pintrest }}"
                                               required="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label">Youtube</label>
                                        <input type="text" class="form-control" id="email" name="yt"
                                               placeholder="name@example.com" required="" value="{{ $nData->yt }}">
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
