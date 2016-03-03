@extends('base')

@section('browsertitle')
Acme-Register
@stop


@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>Register</h1>
        <hr>


        <form id="registerform" name="registerform" class="form-horizontal" action="/register" method="post">
            <div class="form-group">
                <label for="first_name" class="col-sm-2 control-label">First Name</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control required" id="first_name" name="first_name"
                           placeholder="Firstname">
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control required" id="last_name" name="last_name"
                           placeholder="Lastname">
                </div>
            </div>


            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control required email" id="email" name="email"
                           placeholder="user@example.com" autocomplete="false">
                </div>
            </div>

            <div class="form-group">
                <label for="verify_email" class="col-sm-2 control-label">Verify Email</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control required email" id="verify_email" name="verify_email"
                           placeholder="user@example.com" autocomplete="false">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                    <input type="password" class="form-control required" id="password" name="password"
                           placeholder="Password" autocomplete="false">
                </div>
            </div>

            <div class="form-group">
                <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>

                <div class="col-sm-10">
                    <input type="password" class="form-control required" id="verify_password" name="verify_password"
                           placeholder="Verify Password" autocomplete="false">
                </div>
            </div>
            <hr>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                </div>
            </div>
        </form>


    </div>
    <div class="col-md-2"></div>
</div>
@stop

@section('bottomjs')
    <script>
        $(document).ready(function () {
            $("#registerform").validate({
                rules: {
                    verify_email: {
                        required: true,
                        email: true,
                        equalTo: "#email"
                    },
                    verify_password: {
                        required: true,
                        equalTo: "#email"
                    }
                }
            })
        })
    </script>
@stop