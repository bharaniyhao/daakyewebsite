<?php
// Include necessary files or configurations
// require_once './config/config.php';

// Include header
include_once 'inc/header.php'; 
?>


<main>
    <section class="main-container">
    <div class="container">
    <section class="contentPage">
    <div class="container">
    <div class="head">
      <div class="title">
        <h2>Contact us</h2>
      </div>
     
      <div class="history"> <a href="#">home</a> / <a>Contact us </a> 
      </div>
    </div>
     
    <div class="container">
    <h3>We welcome you to our office</h3>
    <p> <i class="fa fa-building"></i> Daakye Pension Trust 3rd Floor Vodafone Building, ABC Junction Achimota, Accra.<br>
        <br>
        <i class="fa fa-dropbox"></i> P. O. Box DM 141 Makola, Accra<br>
        <br>
        <i class="fa fa-phone"></i> (233) 030 24 08 444 - (233) 050 52 57 466 - (233) 050 70 67 848 <br>
        <br>
        <i class="fa fa-building"></i> www.daakyetrust.com <br>
        <br>
        <i class="fa fa-envelope"></i> info@daakyetrust.com </p>
    <table class="table table-bordered table-stripped">
        <tbody><tr>
            <th>#</th>
            <th>Branch</th>
            <th>Contacts</th>
        </tr>
                <tr>
            <td>1
            </td><td>ACCRA</td>
            <td>0302408444 / 0507067848 / 0208842697</td>
        </tr>
                <tr>
            <td>2
            </td><td>TEMA</td>
            <td>0500348731 / 0206381180</td>
        </tr>
                <tr>
            <td>3
            </td><td>KUMASI</td>
            <td>0502253198 / 0507067310</td>
        </tr>
                <tr>
            <td>4
            </td><td>SWEDRU</td>
            <td>0507710641 / 0507233882 / 0501672694</td>
        </tr>
                <tr>
            <td>5
            </td><td>NKAWKAW</td>
            <td>0500348748 / N/A</td>
        </tr>
                <tr>
            <td>6
            </td><td>TAKORADI</td>
            <td>0303964284 / 0501672691</td>
        </tr>
                <tr>
            <td>7
            </td><td>TECHIMAN</td>
            <td>0303964428 / 0501672690</td>
        </tr>
                <tr>
            <td>8
            </td><td>CAPE COAST</td>
            <td>0303965795 / </td>
        </tr>
                <tr>
            <td>9
            </td><td>KOFORIDUA</td>
            <td>0303965805 / 0501672692</td>
        </tr>
              </tbody></table>

              <h3>Contact Form</h3>

              <p><strong>Send an email. All fields with an * are required.</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="output_message"></span></p>
              <form class="contact-form" name="contact-from" method="post" action="#">
        <table >
          <tbody><tr>
            <td><input type="text" name="name" id="name" placeholder="*Name:" requiredd=""></td>
            <td><input type="text" name="email" id="email" placeholder="*Email:" requiredd=""></td>
            <td><input type="text" name="subject" id="subject" placeholder="*Subject:" requiredd=""></td>
          </tr>
          <tr>
            <td colspan="3"><textarea name="message" id="message" placeholder="*Message:" requiredd=""></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="send-email" id="send-email" value="Send Email"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody></table>
      </form>
      <script>
$(document).ready(function() {
    $('.contact-form').submit(function(){
	'use strict';
	$.ajaxSetup({ cache: false });
    $('.output_message').text('Loading...'); 
    var form = $(this);
	var status = $('.output_message');
    $.ajax({
        url: form.attr('action'),
        method: 'post',
        data: form.serialize(),
        success: function(response){
			status.html(response);
        }
    });
    return false;   
});
});

</script>
    </div>
    </div>
    <!-- main-content --> 
  
    </section>

<div class="footer">
<?php 
include_once 'inc/footer.php'; 


?>

</div>
</div>
</section>
</main>
