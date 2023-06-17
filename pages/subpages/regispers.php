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
     
      <div class="history"> <a href="#">home</a> / <a>about us </a> 
      </div>
    </div>
     
    <div class="container">
    
    <p>&nbsp; &nbsp; <strong>All fields with an * are required.</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="output_message"></span></p>
    <form class="registration-form" name="registration-from" method="post" action="#">
  <input name="pg" type="hidden" value="personal">
  <input type="email" name="nofill" style="display:none;">
  <table>
    <tbody><tr>
      <td width="5%"><label>Surname: *</label></td>
      <td><input type="text" name="surname" class="form-control" required=""></td>
      <td width="5%"><label>First Name: *</label></td>
      <td><input type="text" name="first_name" class="form-control" required=""></td>
      <td width="5%"><label>Other Names:</label></td>
      <td><input type="text" name="other_names" class="form-control"></td>
    </tr>
    <tr>
      <td width="5%"><label>Gender: *</label></td>
      <td><select required="" name="gender" class="form-control">
          <option value=""></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></td>
      <td width="5%" ><label>Nationality: *</label></td>
      <td><input type="text" name="nationality" class="form-control" required=""></td>
      <td width="5%"><label>Date Of Birth: (DD-MM-YYYY) *</label></td>
      <td><input type="text" name="dob" class="form-control" placeholder="DD-MM-YYYY"></td>
    </tr>
    <tr>
      <td width="5%"><label>Address/Location: *</label></td>
      <td colspan="2"><input type="text" name="country" class="form-control" required=""></td>
      <td width="5%" ><label>ID Type: *</label></td>
      <td colspan="2"><input type="text" name="id_type" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="5%"><label>ID Number: *</label></td>
      <td colspan="2"><input type="text" name="id_number" class="form-control" required=""></td>
      <td width="5%" ><label>Telephone Number: *</label></td>
      <td colspan="2"><input type="text" name="telephone" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="5%"><label>Email Address: *</label></td>
      <td colspan="2"><input type="email" name="emailaddress" class="form-control" required=""></td>
      <td width="5%"><label>Monthly Contribution Amount: *</label></td>
      <td colspan="2"><input type="text" name="monthly_amount" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="5%"><label>Next Of KIN: *</label></td>
      <td><input type="text" name="nok" class="form-control" required=""></td>
      <td width="5%" ><label>Address: *</label></td>
      <td><input type="text" name="address" class="form-control" required=""></td>
      <td width="5%"><label>Telephone Number: *</label></td>
      <td><input type="text" name="telephone2" class="form-control" required=""></td>
    </tr>
    <tr>
      <td width="5%"><label>Beneficiaries <br> Name , Address &amp; Contact <br> (Call to add more) </label></td>
      <td colspan="4">         
           <input type="text" name="ben1" class="form-control" placeholder="Beneficiary No. 1"> <br>
           <input type="text" name="ben2" class="form-control" placeholder="Beneficiary No. 2"> <br>
           <input type="text" name="ben3" class="form-control" placeholder="Beneficiary No. 3"> <br>
           <input type="text" name="ben4" class="form-control" placeholder="Beneficiary No. 4"> <br>
           <input type="text" name="ben5" class="form-control" placeholder="Beneficiary No. 5"> <br>
           
      </td>
    </tr>
    <tr>
      <td ><label>Mode of Payment: *</label></td>
      <td colspan="5"><label style="cursor:pointer;">
          <input type="radio" name="mode_of_payment" value="Bank Standing Order">
          Bank Standing Order</label>
        &nbsp; &nbsp;
        <label style="cursor:pointer;">
          <input type="radio" name="mode_of_payment" value="Bank Direct Debit">
          Bank Direct Debit</label>
        &nbsp; &nbsp;
        <label style="cursor:pointer;">
          <input type="radio" name="mode_of_payment" value="Mobile Money">
          Mobile Money (<small>MTN mobile money wallet standing order is available. Terms and conditions apply.</small>)</label></td>
    </tr>
    <tr>
        <td colspan="6"><label style="cursor:pointer;">
          <input type="checkbox" required="" name="i_accept" value="I accept that in accordance with section 110 of The National Pensions Law, Act 766 (2007) as amended, I shall qualify to withdraw part of my accrued benefits from the scheme after five years from the date of first contribution.">
          I accept that in accordance with section 110 of The National Pensions Law, Act 766 (2008) as amended, I shall qualify to withdraw part of my accrued benefits from the scheme after five years from the date of first contribution.</label></td>  
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
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
