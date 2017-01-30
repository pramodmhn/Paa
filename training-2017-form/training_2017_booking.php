<?php

if(isset($_GET['e'])){
  $preEmail = $_GET['e'];
}

if(isset($_GET['s'])){
  $success = 1;
}
if(isset($_POST['submit'])){
  // save to file
  $path = dirname(__FILE__).'/docs/training_2016_booking.html';
  $filecontent = '<p>Registration Date: '.date('d M Y').'</p>';
  $filecontent .= '
  <table>';
  $filecontent .= '<tr><td colspan="2">&nbsp;</td></td></tr><tr><td colspan="2"><strong>Registration Details</strong></td></td></tr>';
  $filecontent .= '<tr><td><strong>Name</strong></td><td>'.$_POST['name'].'</td></tr>';
  $filecontent .= '<tr><td><strong>Company</strong></td><td>'.$_POST['company'].'</td></tr>';  
  $filecontent .= '<tr><td><strong>Email</strong></td><td>'.$_POST['email'].'</td></tr>';
  $filecontent .= '<tr><td><strong>Phone</strong></td><td>'.$_POST['phone'].'</td></tr>'; 
  $filecontent .= '<tr><td><strong>Courses</strong></td><td>'.$_POST['courses'].'</td></tr>'; 
  $filecontent .= '<tr><td><strong>No. of students</strong></td><td>'.$_POST['no_students'].'</td></tr>'; 
  $filecontent .='</table>';
  $filecontent .= '<br/><br/>';
  $filecontent .= '<p>---------------------------------------------------------------------------------------------</p>';
  file_put_contents($path, $filecontent, FILE_APPEND);

  // mail to sender first
  $to = strip_tags(trim($_POST['email']));
  $subject = 'CONFIRMATION: PROFIBUS and PROFINET Training';
  $headers = "From: Profibus Australia <info@profibusaustralia.com.au>\r\n";
  $headers .= "Reply-To: Profibus Australia <info@profibusaustralia.com.au>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $message = '<html><body>';
  $message .= '<p><a href="http://www.profibusaustralia.com.au/"><img src="http://www.profibusaustralia.com.au/images/ppa_logo_90.jpg" alt=""></a></p>';
  $message .= '<p>Thank you. Your email has been received and the PAA will return with more information.</p>';
  $message .= '<p>Contact: Andrew Dummett (Profibus Australia)<br/>e: <a href="mailto:info@profibusaustralia.com.au" target="_blank">info@profibusaustralia.com.au</a><br/>';
  $message .= 'w: <a href="http://www.profibusaustralia.com.au/">www.profibusaustralia.com.au</a></p></body></html>';
  mail($to, $subject, $message, $headers);


  // mail to Andrew
  $to = 'info@profibusaustralia.com.au';
  #$to = 'sachuit@gmail.com';
  $subject = '2016 May PROFIBUS and PROFINET Training Reservation | '.date('d/M/Y');
  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $message = '<html><body>';
  $message .= '<h1>PROFIBUS and PROFINET Training</h1>';
  $message .= '<table>';
  $message .= '<tr><td colspan="2">&nbsp;</td></td><tr><tr><td colspan="2"><strong>Registration Details</strong></td></td><tr><td><strong>Name</strong></td><td>'.$_POST['name'].'</td></tr>';
  $message .= '<tr><td><strong>Company</strong></td><td>'.$_POST['company'].'</td></tr>';  
  $message .= '<tr><td><strong>Email</strong></td><td>'.$_POST['email'].'</td></tr>';
  $message .= '<tr><td><strong>Phone</strong></td><td>'.$_POST['phone'].'</td></tr>';  
  $message .= '<tr><td><strong>Courses</strong></td><td>'.$_POST['courses'].'</td></tr>';  
  $message .= '<tr><td><strong>No. of students</strong></td><td>'.$_POST['no_students'].'</td></tr>';  
  $message .= '<tr><td colspan="2">&nbsp;</td></td><tr><tr><td><strong>Registration Date</strong></td><td>'.date('d M Y').'</td></tr>';
  $message .='</table>';
  $message .='<br/><br/>';
  $message .='<p><a href="http://www.profibusaustralia.com.au/training-2016/docs/training_2016_booking.html">Click here</a> to check all bookings.</p>';
  $message .= '</body></html>';
  if(mail($to, $subject, $message, $headers)){
    header('Location: http://profibusaustralia.com.au/training-2016/training_2016_booking.php?s=1');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="">
    <title>2017 PROFIBUS & PROFINET Global Forum</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://www.profibusaustralia.com.au/lib/Zebra_Datepicker-1.9.2/public/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet">  -->
    <style type="text/css" media="screen">
      body {
          padding-top: 50px;
          padding-bottom: 50px;
          background-image: url("images/pattern-bg.gif") ;
          background-repeat:repeat;
      }
      .starter-template {padding: 40px 15px 20px;text-align: center;}
      .navbar-brand{padding:2px 15px 0;}
      .form-horizontal .control-label{text-align:left!important;}
    </style>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script>
      (function () {
        'use strict';
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
          var msViewportStyle = document.createElement('style')
          msViewportStyle.appendChild(
            document.createTextNode(
              '@-ms-viewport{width:auto!important}'
            )
          )
          document.querySelector('head').appendChild(msViewportStyle)
        }
      })();
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <style type="text/css" media="screen">
        .container{width:1170px;}
      </style>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
        <link href="/css/bootstrap-ie7.css" rel="stylesheet">
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.profibusaustralia.com.au/"><img src="http://www.profibusaustralia.com.au/images/ppa_logo_90.jpg" alt=""></a>
        </div>
       
      </div>
    </div>
    <div class="container">
      <div class="starter-template">
        <?php if(isset($success)){ ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Success!</strong> Your registration has been submitted.<br/>Thank you.
            </div>
          <?php } ?>
        <h2>2017 Certified PROFIBUS &amp; PROFINET Training</h2>
        <h2>Temporary Training Reservations Now Available</h2>
        <h3>Reserve your seat for an upcoming training course.</h3>
       
      </div>
      <div class="col-md-8 col-md-offset-2">
        <br/>
        <form action="" method="POST" id="form" class="form-horizontal">           
          <div class="form-group">
            <label for="name" class="control-label col-sm-3">Name</label>
            <div class="col-sm-9">
              <input id="name" type="text" name="name" placeholder="Name" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="form-group">
            <label for="company" class="control-label col-sm-3">Company</label>
            <div class="col-sm-9">
              <input id="company" type="text" name="company" placeholder="Company" class="form-control" autocomplete="off" />
            </div>
          </div>          
          <div class="form-group">
            <label for="email" class="control-label col-sm-3">Email</label>
            <div class="col-sm-9">
              <input id="email" type="text" name="email" placeholder="Email Address" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="control-label col-sm-3">Phone Number</label>
            <div class="col-sm-9">
              <input id="phone" type="text" name="phone" placeholder="Phone Number(Country code + Area Code + Phone number)" class="form-control" autocomplete="off" />
            </div>
          </div>
          
          <div class="form-group">
            <label for="courses" class="control-label col-sm-3">Preferred Courses</label>
            <div class="col-sm-9">
              <input id="courses" type="text" name="courses" placeholder="Preferred Courses" class="form-control" autocomplete="off" />
            </div>
          </div>
            
             <div class="form-group">
            <label for="courses" class="control-label col-sm-3">Training Venue</label>
            <div class="col-sm-9">
              <input id="venue" type="text" name="venue" placeholder="Training Venue" class="form-control" autocomplete="off" />
            </div>
          </div>
            
          <div class="form-group">
            <label for="no_students" class="control-label col-sm-3">No. of students</label>
            <div class="col-sm-9">
              <input id="no_students" type="text" name="no_students" placeholder="No. of students" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12">A representator from Profibus Australia will call you to discuss your training reguards.</label>            
          </div>
          <div id="error"></div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" name="submit" value="Submit" class="btn btn-primary pull-right"><i style="margin-right:10px;" class="glyphicon glyphicon-send"></i>Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://www.profibusaustralia.com.au/lib/Zebra_Datepicker-1.9.2/public/javascript/zebra_datepicker.js"></script>
    <script>
    $(function(){
      $('#form').on('submit', function(){
        var error = false;
        $('input[type=text]:not(.no_checking)').each(function(){
          if($(this).val() == ''){
            $(this).parents('.form-group').addClass('has-error');
            error = true;
          }else{
            $(this).parents('.form-group').removeClass('has-error');
          }
        })
        
        /*
		if(!$('input[name=opportunity]').is(':checked')){
            $('input[name=opportunity]').parents('.form-group').addClass('has-error');
          error = true;
        }
          else{
            $(this).parents('.form-group').removeClass('has-error');
          }
		  */
        
        if(error){
          $('#error').empty().append($('#errorTpl').html());
        }else{
          $('#error').empty();
        }
        return !error;
      })
     
    })
    </script>
    <script type="text/template" id="errorTpl">
       <div class="alert alert-danger alert-dismissible fade in" role="error">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <strong>Error!</strong> Please provide all the details before submitting.<br/>Thank you.
        </div>
    </script>
  </body>
</html>