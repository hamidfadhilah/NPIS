<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Login Form</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url();?>/assets/login/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/login/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/login/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/login/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/login/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/login/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/login/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url();?>/assets/login/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/assets/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url();?>/assets/login/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<!-- PUT YOUR LOGO HERE -->
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<?php echo form_open('login/login'); ?>

		<form class="form-vertical login-form" action="" method="post">
			<h3 class="form-title">Login NPIS</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Masukan username dan password</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890_',this)" maxlength="15" required />
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890',this)" maxlength="15" required />
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn blue pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			<div class="forget-password">
				<h4>Lupa kata sandi ?</h4>
				<p>
					Hubungi Admin IT.
				</p>
			</div>
			<script> 
		        function getkey(e){
		            if(window.event)
		                return window.event.keyCode;
		            else if (e)
		                return e.which;
		            else
		                return null;
		        }
		        function huruf(e,good,field){
		            var key, keychar;
		            key = getkey(e);
		            if(key==null) return true;
		            
		            keychar = String.fromCharCode(key);
		            
		            if(good.indexOf(keychar) != -1)
		                return true;
		            if(key==null || key==0 || key==8 || key ==9 || key==27 || key==32 || key==36)
		                //8=backspace  9=tab  27=escape  32=space  36=home
		                return true;
		            if(key==13){
		                var i;
		                for(i=0; i<field.form.elements.length; i++)
		                    if(field == field.form.elements[i])
		                        break;
		                    i = (i+1) % field.form.elements.length;
		                    field.form.elements[i].focus();
		                    return false;
		            };
		            return false;
		        }
		        function angka(e){
		            var charCode = (e.which) ? e.which : e.keyCode;
		            if(charCode > 31 && (charCode<48 || charCode>57))
		                //antara 48-57 = angka 0-9
		                return false;
		            return true;
		        }

		    </script>
		</form>		
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2017 &copy; <a href="#">PT Sanbe Farma</a> Login Form
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url();?>/assets/login/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/login/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/login/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>/assets/login/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/login/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/login/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>/assets/login/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/login/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>