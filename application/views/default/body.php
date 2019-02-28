
<!doctype html>
<html lang="en">
<head>
    <title>FlexyCAbs</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
    #mform{
        margin-top: 50px;
    }
    #map{
    	height: 500px !important;
    	border: 1px solid ;
    	width: 100%;
    }
    #floating{
    	border-radius: 20%;
    	border: 1px solid #000;
    	right:10px;
    	bottom: 50px;
    	position: fixed;
    	padding: 10px;
    	font-style: bold;

    }
    #strt{
    	width: 100%;
    }
    #reqbtn{
    	left: 0px;
    	width: 100%;
    	position: fixed;
    	bottom: 0px;

    }
</style>

<base href="<?=base_url()?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/modal/jquery.dialog.min.css">
    <!--<link rel="stylesheet" href="assets/css/bsadmin.css">-->
    <script src="assets/js/jqPro.js"></script>
    <script src="assets/js/jarvis.js"></script>
    <script type="text/javascript">
		var centreGot = false;
	</script>
    <?php echo $map['js']; ?>

</head>
<body>

	<nav class="navbar navbar-expand navbar-dark bg-primary" style="background: #000 !important">
    <a class="sidebar-toggle text-light mr-3"><i class="fa fa-bars"></i></a>

    <a class="navbar-brand" href="#">FlexyDriver App</a>

    <div class="navbar-collapse collapse" >
        <ul class="navbar-nav ml-auto" id="nav-list" style="display: none;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" id="usm">
                    <i class="fa fa-user"></i> Username
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#" id="lout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="">
    <div class="container text-center" id="log" style="margin-top:20px">
    <image id="fimage" src="assets/images/flexy.jpg"  height="100px" width="100px"  />  
    </div>
    <p id="mess" class="text-center"></p>
    <div class="content p-4">
  <form id="mform" class="form " onsubmit="return false;">
    <div class="container">
        <div class="col-xs-12">
            <label>Phone/Email</label><br>
            <input id="user" type="text" class="form-control" name="">
        </div>
        <div class="col-xs-12">
            <label>Password</label><br>
            <input id="pass1" type="password" class="form-control" name="">
        </div>
        <hr>
        <div class="col-xs-12">
            <button id="loin" type="button" class="btn btn-success">Login</button> |
            <button id="rregs" type="button" class="btn btn-success">Register</button>
        </div>
    </div>
  </form>
  <form id="rform" class="form " onsubmit="return false;" style="display: none;">
    <div class="container">
    	
        <div class="col-xs-12">
            <label>FullName</label><br>
            <input id="fname" type="text" class="form-control" name="">
        </div>
        <div class="col-xs-12">
            <label>Phone</label><br>
            <input id="phone" type="number" class="form-control" name="">
        </div>
        <div class="col-xs-12">
            <label>Email</label><br>
            <input id="email" type="email" class="form-control" name="">
        </div>
        <div class="col-xs-12">
            <label>Password</label><br>
            <input id="pass" type="password" class="form-control" name="">
        </div>
        <div class="col-xs-12">
            <label>Password</label><br>
            <input id="cpass" type="password" class="form-control" name="">
        </div>
        <hr>
        <div class="col-xs-12">
            <button id="rreg" type="button" class="btn btn-success">Register</button> |
             <button id="rloin" type="button" class="btn btn-success">Login</button>
        </div>
    </div>
  </form>
  <button class="btn btn-primary" id="strt">Start Ride</button>
  
  <div class="row strt">
  	<button class="btn btn-primary" id="bhome" style="display: none;">Home</button>
	<h3 class="text-center">START RIDE</h3>
<hr>
	<div class="col-xs-7">
		<label>Input Number To start</label><br>
<input type="Number" id="sphone" name="" class="form-control">
	</div>
	<div class="col-xs-2">
	</div>
	<div class="col-xs-3">
		<label>Action</label><br>
		<button type="button" class="btn btn-success" id="startdr">Start</button>
	</div>
</div>
<div id="main"></div>
</div>
</div>

  <!-- Modal -->
<div class="modal fade modal-fullscreen  footer-to-bottom" id="new" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
<div class="modal-header">
<button type="button" class="close"
data-dismiss="modal" aria-hidden="true">
&times;
</button>
<h4 class="modal-title" id="myModalLabel">
 <div class="text-center">
    <h1 >Incoming Request</h1>
     <p class="pull-right" id="mesd"></p>
   </div>
</h4>
</div>
<div class="modal-body">
    <form onsubmit="return false;">
   <div class="row" >
   
     <div class="col-md-8 col-xs-8">
      <input type="tel" id="rec" max="12" placeholder="Recipients,,," name="" class="form-control" required="">
     </div>
     <div class="col-md-4 col-xs-4">
     </div>
   </div>
   <br>
   <center>
   <div class="row">
    <div class="col-xs-8 col-md-10">
     <textarea id="mess" placeholder="Message...." rows="13" class="form-control" required="">
       
     </textarea>
   </div>
     <div class="col-xs-4 col-md-2">
     <input type="submit" class="btn btn-lg" id="send" name=""  value="Send">
   </div>
 </div>
</center>
 </form>
</div>  
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal">Close
</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
<div id="reqbtn">
		<button class="btn btn-primary" id="ca" style="width: 100%;display: none;">Confirm Arrival</button>
		<button class="btn btn-primary" id="st" style="width: 100%;display: none;">Start Trip</button>
		<button class="btn btn-primary" id="ct" style="width: 100%;display: none;">Complete Trip</button>
		<button class="btn btn-primary" id="cp" style="width: 100%;display: none;">Confirm Payment</button>
		
	</div>
	<div class="container-fluid">
		<div class="col-xs-6">
				<button class="btn btn-warning " id="wa" style="width: 100%;display: none;">Wait</button>
			</div>
			<hr>
			<div class="col-xs-6" >
				<button class="btn btn-danger " id="str" style="width: 100%;display: none;">End trip</button>
			</div>
			<hr>
			<div class="col-xs-6" >
				<button class="btn btn-primary " id="cpr" style="width: 100%;display: none;">Confirm Payment</button>
			</div>
		</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bsadmin.js"></script>
<script src="assets/modal/jquery.dialog.min.js"></script>
  <script type="text/javascript">
  		$('#rregs').click(function(){
  			$('#mform').hide();
    $('#rform').show();
  		});
  		$('#rloin').click(function(){
  			$('#mform').show();
    $('#rform').hide();
  		});
$('#lout').click(function(){
$('#mess').load('<?=base_url()?>Home/lout');
$('#mform,#fimage').show();
$('#main,#strt,.strt').hide();
});
  		$('#rreg').click(function(){
    var fname=$('#fname').val();
    var phone=$('#phone').val();
    var email=$('#email').val();
    var pass=$('#pass').val();
    var cpass=$('#cpass').val();

    if(fname!="" && phone!="" && email!="" && pass!="" && pass==cpass){
    
   
    $.ajax({
      url: 'Home/reg',
      type: 'post',
      data: {
        fname:fname,
        phone:phone,
        email:email,
        pass:pass
      },
      success: function (data) {
        var re=data;
        
        if(re){
        	$('#rform').hide();
        	 $('#mess').html('');
        $('#nav-list,#strt,.strt').show();
$('#main').load('<?=base_url()?>Home/home');
      }else{
        $('#mess').html('<b style="color:blue">Wrong Input Detected</b>'+re);          
              }
     },error:function(){
        $('#mess').html('<b style="color:red">Network Error</b>');
      }
    }); 
            }else{
              $('#mess').html(fname+phone+email+pass);
            }

});
  	$('#loin').click(function(){
    var user=$('#user').val();
    var pass=$('#pass1').val();
    
      if(user!="" && pass!=""){
    
   
    $.ajax({
      url: 'Home/login',
      type: 'post',
      data: {
        user:user,
        pass:pass
      },
      success: function (data) {
        var re=data;
        
        if(re==1){
        	$('#mform,#fimage').hide();
        	 $('#mess').html('');
        $('#nav-list,#strt,.strt').show();
$('#main').load('<?=base_url()?>Home/home');
      }else{
        $('#mess').html('<b style="color:blue">Invalid Details</b>');          
              }
     },error:function(){
        $('#mess').html('<b style="color:red">Network Error</b>');
      }
    }); 
            }else{
              $('#mess').html('<b style="color:red">Fill in all fields</b>');
            }
  });
  </script>
     <?php
   
if($this->session->userdata('usname')==""){
?>
<script type="text/javascript">

$('#mform,#log,#fimage').show();
$('#strt,#bhome,.strt').hide();
    

</script>
<?php
}else{
	
?>

<script type="text/javascript">
	$('#usm').html("<i class='fa fa-user'></i> <?php echo $this->session->userdata("usname");?>");
	$('.strt').hide();
$('#mform,#log,#fimage').hide();
$('#nav-list,#strt').show();
$('#main').load('<?=base_url()?>Home/home');
    

</script>

<?php

}
?>
 <script type="text/javascript">
    $('#sub').click(function(){
        $('#mform,#log').hide();
        var user=$('#user').val();
        var pass=$('#pass').val();
        $('#nav-list,#strt,.strt').show();
        $('#main').load('<?=base_url()?>Home/home');
    });
  </script>
  <script>
	$(function(){
		dialog.alert({
			title: "INCOMING REQUEST",
			message: "<h3>Name</h3><br>from<br><h4>Nakuru</h4>.",
			animation: "fade",
			callback: function(value){
				$('#strt').hide();
				$('#ca').show();
		$('#main').load('<?=base_url()?>home/request');
				console.log(value);
			}
		});
		return false;
	});
	
	$('#startdr').click(function(){
		var client=$('#sphone').val();

		if(client!=""){

		 $.ajax({
		
      url: 'Home/startride',
      type: 'post',
      data: {
        client:client
      },
      success: function (data) {
        var re=data;
        
        if(re){
        	
      }else{
       alert('Wrong Input Detected');          
              }
     },error:function(){
        alert('Network Error');
      }
    });
}else{
	alert("Enter client number");
}

	});
$('#ct').click(function(){
			dialog.alert({
			title: "Complete Trip",
			message: "Your now ending the trip.",
			animation: "fade",
			callback: function(value){
				$('#ct').hide();
				$('#strt,.strt').hide();
				$('#cp').show();
		$('#main').load('<?=base_url()?>home/tripdet');
				console.log(value);
			}
		});
		})
</script>
<script type="text/javascript">
		$('#ca').click(function(){
			$(this).hide();
			$('#st').show();
		})
		$('#st').click(function(){
			$(this).hide();
			$('#ct').show();
		})
		$('#cp').click(function(){
			$(this).hide();
			dialog.alert({
			title: "Payment Confirmed",
			message: "Enjoy your day Sir.",
			animation: "fade",
			callback: function(value){
				$('#cp').hide();
				$('#strt,.strt').show();
		$('#main').load('<?=base_url()?>home/home');
				console.log(value);
			}
		});
		})
		$('#strt').click(function(){
			$(this).hide();
			$('#bhome').show();
			$('#str,.strt').show();
			$('#wa').show();
			$('#main').load('<?=base_url()?>home/startride');
		})
		$('#bhome').click(function(){
			$(this).hide();
			$('#strt,.strt').show();
			$('#str,.strt').hide();
			$('#wa').hide();
			$('#main').load('<?=base_url()?>home/home');
		})
		$('#str').click(function(){
			$(this).hide();
			$('#cpr').show();
			$('#wa').hide();
		})
		$('#cpr').click(function(){
			$(this).hide();
			dialog.alert({
			title: "Payment Confirmed",
			message: "Enjoy your day Sir.",
			animation: "fade",
			callback: function(value){
				$('#cpr').hide();
				$('#strt,.strt').show();
		$('#main').load('<?=base_url()?>home/home');
				console.log(value);
			}
		});
		})
	</script>
</body>
</html>