<!-- Header -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
  crossorigin="anonymous"
/>
<link
  href="https://fonts.googleapis.com/css?family=Anton&display=swap"
  rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
<nav class="navbar  navbar-inverse  navbar-fixed-top"  role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size: 1.6em;" href="{{ url('/') }}"><i class="fas fa-home"></i> Trang Chủ</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                    
                        
                    </li>
                    <li>
                        
                    </li>
                </ul>

                <form method="GET" action="tim-kiem" class="navbar-form navbar-left" role="search">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" name="keyword" class="form-control" placeholder="Nhập để tìm kiếm .">
                    </div>
                    <button type="submit" class="btn btn-default"> <i class="fas fa-search"></i>  Search</button>
                </form>
                
                @if(Auth::user())
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        
                        <span class="usr-name"></span>  
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item dropdown">
                            <a style="cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user fa-fw" style="margin-right: 0.5em;"></i>{{ Auth::user()->name }}<i style="margin-left: 0.5em;" class="fa fa-caret-down"></i>
                            </a>
                            <div style="left: -5px; padding: 0.5em 1em; text-align: center;" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="quan-ly-thong-tin">Thiết Lập Tài Khoản</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="dang-xuat">Đăng Xuất</a>
                            </div>
                        </li>
                    </ul>
                    
                @else
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="dang-ky-tai-khoan"  class="btn btn-outline " style="font-size:20px">Đăng ký</a>
                        </li>
                        @if(!Request::is('dang-nhap'))
                        <li>
                            <a style="cursor: pointer; font-size:20px" class="login-sec btn btn-outline" data-toggle="modal" data-target="#myModal" >Đăng Nhập</a>
                        </li>
                        @endif
                    </ul>
                @endif
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- End Header -->
</body>
</html>
    