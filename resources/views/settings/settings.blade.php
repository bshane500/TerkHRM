@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                    <h3 class="profile-username text-center">Nina Mcintire</h3>

                    <p class="text-muted text-center">Software Engineer</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="pull-right">13,287</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                    <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">

                    </div>
                    <!-- /.tab -pane -->

                    <div class="tab-pane" id="settings">
                        {!! Form::model($settings,
                                ['method' => $settings -> exists ? 'put':'post',
                                 'route'  => $settings -> exists ? ['settings.update',$settings->id]:['settings.store'],
                                 'class'=>'form-horizontal','files'=>true
                            ])!!}



                            <!--Logo-->
                            <div class=form-group>
                                {!! Form::label('image', 'Logo',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10 kv‐avatar center‐block" style="width:300px">
                                    {!! Form::file('image',null, ['class' => 'form-control file-loading']) !!}
                                </div>
                            </div>
                            <!--Org's name-->
                            <div class=form-group>
                                {!! Form::label('organization_name', 'Organisation Name',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('organization_name',null, ['class' => 'form-control ','placeholder'=>'Organisation Name']) !!}
                                </div>
                            </div>
                            <!--Email-->
                            <div class=form-group>
                                {!! Form::label('email', 'Email',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::email('email',null, ['class' => 'form-control ','placeholder'=>'email']) !!}
                                </div>
                            </div>
                            <div class=form-group>
                                {!! Form::label('address', 'Address',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('address',null, ['class' => 'form-control ','rows'=>'3','placeholder'=>'Address']) !!}
                                </div>
                            </div>
                            <div class=form-group>
                                {!! Form::label('country', 'Country',['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('country',null, ['class' => 'form-control ']) !!}
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class=" col-sm-10">
                                    <div class="checkbox">
                                        <label for="weekends" class="control-label">
                                           Allow Weekends  <input type="checkbox" name="weekends">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <script>
        $('#image').fileinput({
            overwriteInitial:true,
            showUpload:false,
            defaultPreviewContent: '<img src="{{'/images/'.$settings->logo}}"  style="width:160px">'

        })
    </script>
@endsection