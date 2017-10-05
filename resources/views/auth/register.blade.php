@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                           value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name"
                                           value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="is_company" class="col-md-4 control-label"></label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_company" id="is_company" value="0">
                                            Individual
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_company" id="is_company" value="1" checked="">
                                            Organization
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <script>
                                //                                $('input[type=radio][name=is_company]').on('change', function() {
                                //                                    switch($(this).val()) {
                                //                                        case '0':
                                //                                            $('#organization_div').hide();
                                //                                            break;
                                //                                        case '1':
                                //                                            $('#organization_div').show();
                                //                                            break;
                                //                                    }
                                //                                });
                            </script>

                            <div class="form-group{{ $errors->has('organization_name') ? ' has-error' : '' }}"
                                 id="organization_div">
                                <label for="organization_name" class="col-md-4 control-label">Organization Name</label>

                                <div class="col-md-6">
                                    <input id="organization_name" type="text" class="form-control"
                                           name="organization_name" value="{{ old('organization_name') }}" required
                                           autofocus>

                                    @if ($errors->has('organization_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('organization_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                                <label for="contact" class="col-md-4 control-label">Phone Number</label>

                                <div class="col-md-6">
                                    <input id="contact" type="text" class="form-control" name="contact"
                                           value="{{ old('contact') }}" required autofocus>

                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                <label for="state" class="col-md-4 control-label">State</label>

                                <div class="col-md-6">
                                    <input id="state" type="text" class="form-control" name="state"
                                           value="{{ old('state') }}" required autofocus>

                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city"
                                           value="{{ old('city') }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                                <label for="bio" class="col-md-4 control-label">Bio</label>

                                <div class="col-md-6">
                                    <input id="bio" type="text" class="form-control" name="bio" value="{{ old('bio') }}"
                                           required autofocus>

                                    @if ($errors->has('bio'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <label for="photo" class="col-md-4 control-label">Upload Photo</label>

                                <div class="col-md-6">
                                    <input id="photo" type="text" class="form-control" name="photo"
                                           value="{{ old('photo') }}" required autofocus>

                                    @if ($errors->has('photo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('identity_document') ? ' has-error' : '' }}">
                                <label for="identity_document" class="col-md-4 control-label">Upload Government issued ID</label>

                                <div class="col-md-6">
                                    <input id="identity_document" type="text" class="form-control"
                                           name="identity_document" value="{{ old('identity_document') }}" required
                                           autofocus>

                                    @if ($errors->has('identity_document'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('identity_document') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
