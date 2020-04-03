<?php
  ob_start();
?>

<h1>HHOA Files</h1>
<p>
  Below you will find a directory of all HHOA related files including the vehicle registration form as well as the HHOA Community Rules:
</p>

<div class="file-group">
  <h3>HHOA Declarations and Bylaws</h3>
  <p>The following links are for the Declarations and Bylaws that all Heatherstone unit owners have agreed to adhere to.</p>
  <a class="file-link" href="/files/HHOA_Declarations_and_Bylaws.pdf">Declarations and Bylaws</a>
  <a class="file-link" href="/files/HHOA_Bylaws_1st_Amendment.pdf">1st Amendment</a>
</div>

<div class="file-group">
  <h3>HHOA Rules</h3>
  <p>The following link is the official rules that have been set in place by the volunteer board which all unit owners must abide by.</p>
  <a class="file-link" href="/files/HHOA_Rules_2020.pdf">HHOA Rules</a>
</div>

<div class="file-group">
  <h3>HHOA Vehicle Registration Form</h3>
  <p>The following link is for the official vehicle registration form. All unitowner vehicles must be registered if they will be parked with Heatherstone.</p>
  <a class="file-link" href="/files/HHOA_Vehicle_Registration_Form.pdf">HHOA Vehicle Registration Form</a>
</div>

<div class="file-group">
  <h3>HHOA Architectural Change and Improvement Request Form</h3>
  <p>The following link architectural change an improvement form. If you plan on making any exterior modifications to your unit, you must first fill out this form to get approval.</p>
  <a class="file-link" href="/files/HHOA_Architectural_Change_and_Improvement_Request_Form.pdf">HHOA Architectural Change and Improvement Request Form</a>
</div>

<div class="file-group">
  <h3>HHOA Insurance Claim and Proof of Loss Form</h3>
  <p>The following links are for the Insurance Claim and Proof of Loss Form. If you need to make an insurance claim agains the HHOA's insurance, you must fill out this form. An example of a completed form is also provided.</p>
  <a class="file-link" href="/files/HHOA_Insurance_Claim_Statement_Proof_of_Loss_Form.pdf">HHOA Insurance Claim and Proof of Loss Form</a>
  <a class="file-link" href="/files/HHOA_Insurance_Claim_Statement_Proof_of_Loss_Form_Example.pdf">HHOA Insurance Claim and Proof of Loss Form Example</a>
</div>

<div class="file-group">
  <h3>HHOA Exercise Room Release Form</h3>
  <p>The following link is for the Excercise Room Release Form. If you intend on using the exercise room in the clubhouse, you must first fill out this form and return it to the 200 Apples Way mailbox.</p>
  <a class="file-link" href="/files/HHOA_Exercise_Room_Release_Form.pdf">HHOA Exercise Room Release Form</a>
</div>

<div class="file-group">
  <h3>HHOA Email Signup Form</h3>
  <p>The following link for the Email Signup Form. If you wish to recieve a montly financial report of HHOA expenses, you can fill out this form to start the process.</p>
  <a class="file-link" href="/files/HHOA_Email_Signup_Form.pdf">HHOA Email Signup Form</a>
</div>

<?php
  $content = ob_get_clean();
  require './templates/content.php';
?>
