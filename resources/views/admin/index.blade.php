@extends('layouts.adminlayout')
@section('content')
<h3>Index page</h3>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$(".sidebar-sticky").addClass("d-none");
		var username="administrator";
		var password="adminpassword";
		var myus=prompt("What the username? ","");
		var mypas=prompt("What the password? ","");
		checkAdmin(myus,mypas);
		function checkAdmin(us,pas){
			if(us!=username && pas!=password){
				alert("Permission denied");
					window.location.href="http://10.50.10.10/hewanetinternet/public/allplans";
				
			}else{
				$(".sidebar-sticky").removeClass("d-block");
				alert("welcome "+username);
			}
		}
	})
</script>
@endsection