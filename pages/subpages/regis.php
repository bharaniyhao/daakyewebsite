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
      <h2>daakye diaspora pension scheme</h2>
      </div>
     
      <div class="history"> <a href="#">home</a> / <a>Register</a> 
      </div>
    </div>
     
    <div class="container">
    
    <p>&nbsp; &nbsp; <strong>All fields with an * are required.</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="output_message"></span></p>

    <form class="registration-form" name="registration-from" method="post" action="#">
  
  <table >
    <tbody><tr>
      <td width="15%" align="left"><label>Surname: *</label></td>
      <td><input type="text" name="surname" class="form-control" required=""></td>
      <td width="15%" align="right"><label>First Name: *</label></td>
      <td><input type="text" name="first_name" class="form-control" required=""></td>
      <td width="15%" align="right"><label>Other Names:</label></td>
      <td><input type="text" name="other_names" class="form-control"></td>
    </tr>
    <tr>
      <td width="15%" align="left"><label>Gender: *</label></td>
      <td><select required="" name="gender" class="form-control">
          <option value=""></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></td>
      <td width="15%" align="right"><label>Nationality: *</label></td>
      <td><input type="text" name="nationality" class="form-control" required=""></td>
      <td width="15%" align="right"><label>Date Of Birth: (DD-MM-YYYY) *</label></td>
      <td><input type="text" name="dob" class="form-control" placeholder="DD-MM-YYYY"></td>
    </tr>
    <tr>
      <td width="15%"><label>Country of residence: *</label></td>
      <td colspan="2"><input type="text" name="country" class="form-control" required=""></td>
      <td width="15%" align="right"><label>ID Type: *</label></td>
      <td colspan="2"><input type="text" name="id_type" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="15%"><label>ID Number: *</label></td>
      <td colspan="2"><input type="text" name="id_number" class="form-control" required=""></td>
      <td width="15%" align="right"><label>Telephone Number: *</label></td>
      <td colspan="2"><input type="text" name="telephone" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="15%"><label>Monthly Contribution Amount: *</label></td>
      <td colspan="2"><input type="text" name="monthly_amount" class="form-control" required=""></td>
      <td width="15%" align="right"><label>Next Of KIN: *</label></td>
      <td colspan="2"><input type="text" name="nok" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="15%"><label>Address: *</label></td>
      <td colspan="2"><input type="text" name="address" class="form-control" required=""></td>
      <td width="15%" align="right"><label>Telephone Number: *</label></td>
      <td colspan="2"><input type="text" name="telephone2" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="15%"><label>Email Address: *</label></td>
      <td colspan="2"><input type="email" name="emailaddress" class="form-control" required=""></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input type="submit" name="send-email" id="send-email" value="Register"></td>
      <td class="ajax_response">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">For further enquiries or assistance in filling this form, please contact +233505257466</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </tbody></table>
</form>
   
     
            
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
