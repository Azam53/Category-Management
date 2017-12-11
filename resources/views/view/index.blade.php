<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Category Manager - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" ></link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></link>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <b class="caret"></b></a>
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
      <a class="navbar-brand" href="{{url('categorylist')}}">Category Manager</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li title="user logged in"><a href="#"><span class="glyphicon glyphicon-user" ></span>  </a></li>
        <li title="Logout"><a href="logout"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>-->
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
                            All Category
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Category
                            </li>
                            <li class="active">
                              <a href="createcategory"><button type="button" class="btn btn-primary"><i class="fa fa-table" aria-hidden="true"></i> Add Category</button></a>
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li>
                                 <form method="post" action="searchcategory">
                                  <input type="text" class="form-control" name="search_term"  placeholder="Search category id / name" >
                            </li>
                            <li>  {{ csrf_field() }}

                                  <button type="submit" class="btn btn-primary"> Search </button>
                                 </form>
                            </li>
                        </ol>
            </div>

            <div class="col-lg-12">
                        
                               <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
             @foreach($category_parent as $category1 )
                <div class="panel panel-default">
                   @if($category1->name != 'Parent')
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$category1->id}}">{{$category1->name}}</a><a href="categoryupdate/{{$category1->id}}" class="pull-right"><span class="glyphicon glyphicon-pencil"></span></a><a href="categorydelete/{{$category1->id}}"><span class="glyphicon glyphicon-trash pull-right"></span></a>
                        </h4>
                    </div>
                   @endif
                 @foreach($category_child as $category2)
                   @if($category1->id == $category2->parent)
                    <div id="collapseOne{{$category1->id}}" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">{{$category2->name}}</a>
                                    </td>
                                </tr> 
                            </table>
                        </div>
                    </div>
                  @endif
                @endforeach
                </div>
             @endforeach
                
               
            </div>
        </div>
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
                   <center> <p>Copyright &copy; Category Manager. Developed by AZAM</p></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery And Bootsrap -->
    <script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
     <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" ></script>
  <script>
   $(document).ready(function() {
    $('#contact').DataTable();} );
  </script>
   

</body>

</html>
