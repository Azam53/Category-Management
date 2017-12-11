<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Manager - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
</head>

<body>

    <!-- Navigation -->
    <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard">Contact Manager</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="margin-left: 880px;">
                   
                     <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>-->
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ url('dashboard') }}">Contact Manager</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="dashboard">Home</a></li>
        
        <li title="Archived Contacts"><a href="{{ url('archived') }}">Archived Contacts</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li title="user logged in"><a href="#"><span class="glyphicon glyphicon-user" ></span> {{$name}} </a></li>
        <li title="Logout"><a href="{{ url('logout') }}"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row" >
            <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Contact
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Contacts
                            </li>
                            
                        </ol>
            </div>
            <div class="col-lg-12">
		     
                      {!! Form::model($contact,array('method' => 'PUT','route' => ['dashboard.update', $contact->id], 'class' => 'form')) !!}

			<div class="form-group">
			    {!! Form::label('Name') !!}
			    {!! Form::text('name', $contact->name, 
				array('required', 
				      'class'=>'form-control', 
				      'placeholder'=>'name')) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('E-mail') !!}
			    {!! Form::text('email', $contact->email, 
				array('required', 
				      'class'=>'form-control', 
				      'placeholder'=>'e-mail address')) !!}
			</div>
                 
                        <div class="form-group">
			    {!! Form::label('Phone') !!}
			    {!! Form::text('phone', $contact->phone, 
				array('required', 
				      'class'=>'form-control', 
				      'placeholder'=>'phone')) !!}
			</div>

                        <div class="form-group">
			    {!! Form::label('Company') !!}
			    {!! Form::text('company', $contact->company, 
				array('required', 
				      'class'=>'form-control', 
				      'placeholder'=>'company')) !!}
			</div>
                       
                        <div class="form-group">
			    {!! Form::label('Birthday') !!}
			    {!! Form::text('birthday', $contact->birthday, 
				array('required', 
				      'class'=>'form-control', 
				      'placeholder'=>'dd/mm/yyyy')) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Address') !!}
			    {!! Form::textarea('address', $contact->address, 
				array('required', 
				      'class'=>'form-control', 
				      'placeholder'=>'Address')) !!}
			</div>

			<div class="form-group">
			    {!! Form::submit('Save', 
			      array('class'=>'btn btn-primary')) !!}
			</div>
			{!! Form::close() !!}    
            </div>
            

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">
	

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   <center> <p>Copyright &copy; Contact Manager. Developed by AZAM</p></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery And Bootsrap -->
    <script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-   Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   

</body>

</html>
