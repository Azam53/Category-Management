<!doctype html>
<html>
<head>
<title>Login | Contact Manager</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></link>
<style>
.error {
    color:red;
}
</style>
</head>
<body>

<div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login to Contact Manager</div>
            <div class="panel-body">
            

                 {!! Form::open(array('url' => 'login')) !!}

<!-- if there are login errors, show them here -->
<p class="error">
    {!! $errors->first('email') !!}<br>
    {!! $errors->first('password') !!}
</p>  
                <!-- Email Field -->
                     <div class="row">
                    <div class="form-group col-xs-12">
                    <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Email:</label>
                        <div class="input-group">
                            
                            {!! Form::text('email', null, array('placeholder' => 'awesome@awesome.com','id' => 'email_id', 'class' => 'form-control')) !!}
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
              
                 <!-- Password Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Password:</label>
                        <div class="input-group">
                             
                             {!! Form::password('password',array('id' => 'password_id', 'class' => 'form-control')) !!}
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
 
                  <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-4">
                       {!! Form::submit('Submit!' ,array('class' => 'btn btn-primary','type' => 'button')) !!}
                    </div> 
                   <a href="signup"><button type="button" class="btn btn-primary btn-lg btn-block">Sign Up</button></a>
                </div>

                     {!! Form::close() !!}

          </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

