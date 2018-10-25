<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/admin/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>NPIS- SANBE FARMA 2017</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url();?>assets/admin/assets/css/jquery-ui.min.css" rel="stylesheet" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>"/>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/admin/assets/css/themify-icons.css" rel="stylesheet">

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
    <link href="<?php echo base_url('assets/css/bootstrap-select.min.css');?>" rel="stylesheet" />

    <link href="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.css');?>" rel="stylesheet" />

    <link id="base-style" href="<?php echo base_url();?>assets/janux/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url('assets/js/dropdown/jquery.inputpicker.css');?>" rel="stylesheet" type="text/css">

    

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">
            <?php echo $sidebar;?>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <?php echo $menu;?>
        </nav>
        <div class="content">
            <?php echo $content;?>
        </div>
        <footer class="footer">
            <?php echo $footer;?>
        </footer>
    </div>
</div>
</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url();?>assets/admin/assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();
            /*
            $.notify({
                icon: 'ti-gift',
                message: "Selamat Datang di Non Production Inventory System"

            },{
                type: 'success',
                timer: 4000
            });
            */
        });
    </script>

    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.1.11.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>

      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js');?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootbox.min.js');?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
                $('#dataTables-example1').dataTable();
                $('#dataTables-example2').dataTable();
            });
    </script>
    <script>
    $(document).ready(function(){
        
        $('.delete_item').click(function(e){
            
            e.preventDefault();
            
            var pid = $(this).attr('data-id');
            var parent = $(this).parent("td").parent("tr");
            var link = $(this).attr("href");
            
            bootbox.dialog({
              message: "Are you sure you want to Delete ?",
              title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
              backdrop: false,
              buttons: {
                success: {
                  label: "No",
                  className: "btn-success",
                  callback: function() {
                     $('.bootbox').modal('hide');
                  }
                },
                danger: {
                  label: "Delete!",
                  className: "btn-danger",
                  callback: function() {
                      
                      /*
                      
                      using $.ajax();
                      
                      $.ajax({
                          
                          type: 'POST',
                          url: 'delete.php',
                          data: 'delete='+pid
                          
                      })
                      .done(function(response){
                          
                          bootbox.alert(response);
                          parent.fadeOut('slow');
                          
                      })
                      .fail(function(){
                          
                          bootbox.alert('Something Went Wrog ....');
                                                  
                      })
                      */
                      
                      if(e){
                        window.location.href = link ;
                        bootbox.alert({message: "Delete Success ...",
                            title: "Notification ",
                            backdrop: false});
                        }
                      // $.post('delete.php', { 'delete':pid })
                      // .done(function(response){
                      //     bootbox.alert(response);
                      //     parent.fadeOut('slow');
                      // })
                      // .fail(function(){

                      //     bootbox.alert('Something Went Wrog ....');
                      // })
                                          
                  }
                }
              }
            });
            
            
        });
        
    });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js');?>"></script>

    
    <script src="<?php echo base_url('assets/js/jquery.chosen.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-select.min.js');?>"></script>

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

        function startCalc(){
        interval=setInterval(“Calculate()”,10);
        }

        function Calculate(){
        var a=document.form1.min_level.value;
        var b=document.form1.max_level.value;
        var c=document.form1.lead_time.value;
        document.form1.rop.value = (a*c*b);
        }

        function stopCalc(){
        clearInterval(interval);
        }
    </script>
    
</html>
