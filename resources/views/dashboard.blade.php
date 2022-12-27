@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-2" style="margin-left: 250px;">
        <div class="content " style="position: relative; margin-left: -100px;">
            <div class="row mt-4 text-center">
                <div class="col-md-3 mb-2">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#e21754; height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-envelope text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Recent Posts</span><br>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>

                @role('admin')
                @php
                $users_count = DB::table('users')->count();
                @endphp
                
                <div class="col-md-3 mb-2">
                        <a href="/admin/users" id="dash-link">
                            <div class="card-body rounded " style="background-color:#e21754; height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-users text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Users</span><br>
                                        <span class="text-white" id="text2">{{ $users_count }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
                @endrole
                @role('admin')
                <div class="col-md-3 mb-2">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded" style="background-color:#e21754;  height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-list text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Activity Logs</span><br>
                                        <span class="text-white" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
                @endrole

                <div class="col-md-3">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded" style="background-color:#e21754;  height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-notes text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Your Posts</span><br>
                                        <span class="text-white" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
   
    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }
   
   
    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>