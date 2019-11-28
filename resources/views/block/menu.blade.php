<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<style>
	.dropbtn {
  
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: white;
}
	
	</style>
	<title>Document</title>
</head>
<body>
	
</body>
</html>



<div class="container">
	<div class="row ">
	<hr>
	
		@foreach($data['theloai'] as $cate)
		@if(count($cate->LoaiTin) > 0)
		<div class="col-md-2  text-center dropdown " id="menu" >
		<h3 class="dropbtn" style="color:black; font-size:25px; font-family: 'Alatsi', sans-serif"> {{ $cate->Ten }}</h3>
		
		<div class="dropdown-content">
		@foreach($cate->LoaiTin as $subcate)
		<a href="loai-tin/{{ $subcate->TenKhongDau }}">{{ $subcate->Ten }}</a>
		@endforeach
  		</div>
		  <hr>
                  
               
		</div>
		@endif
		@endforeach
		<hr>	
	</div>
</div>






<!-- 
<div class="col-12">
    <ul class="list-group " >
        <li href="#" class="list-group-item  active">
            Danh Sách Thể Loại
        </li>
        @foreach($data['theloai'] as $cate)
            @if(count($cate->LoaiTin) > 0)
            <li class="list-group-item menu1 cate-list">
                {{ $cate->Ten }}
            </li>
            <ul>
                @foreach($cate->LoaiTin as $subcate)
                    <li class="list-group-item">
                        <a href="loai-tin/{{ $subcate->TenKhongDau }}">{{ $subcate->Ten }}</a>
                    </li>
                @endforeach
            </ul>
            @endif
        @endforeach
    </ul>
</div> -->



