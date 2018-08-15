<?php
  ob_start();
?>

<h1>Welcome to Heatherstone!</h1>

<p>We are so glad that you are taking an interest in our community! If you are interested in purchasing a unit within the Heatherstone community and you have questions, you are in the right place!</p>

<p>For starters, take a look at the folllowing files. These are the Declarations and Bylaws as well as the rulebook for our community. By purchasing a unit within Heatherstone you automatically agree to the Declarations and Bylaws and will be required to abide by out existing rules.</p>

<div class="file-group">
  <h3>HHOA Declarations and Bylaws</h3>
  <p>The following links are for the Declarations and Bylaws that all Heatherstone unit owners have agreed to adhere to.</p>
  <a class="file-link" href="/files/HHOA_Declarations_and_Bylaws.pdf">Declarations and Bylaws</a>
  <a class="file-link" href="/files/HHOA_Bylaws_1st_Amendment.pdf">1st Amendment</a>
</div>

<div class="file-group">
  <h3>HHOA Rules</h3>
  <p>The following link is the official rules that have been set in place by the volunteer board which all unit owners must abide by.</p>
  <a class="file-link" href="/files/HHOA_Rules.pdf">HHOA Rules</a>
</div>

<p>Heatherstone has a volunteer board of directors that meet in the community clubhous at 6:30pm on the first Wednesday of each month. All are welcome to attend, and all are welcome to participate! Board elections are held once a year, but please feel free to help out anytime, there are always projects going on within the commminity that we could use your help on.</p>

<p>Heatherstone is a homeowners association and as such, there are monthly dues to be paid to the association. The current montly fee is $190 and it covers pool maintence, grounds maitenence, lawn mowing, snow removal and trash pickup. Please refer to the Declarations and Bylaws as well as the HHOA Rules for more information about the monthly dues.</p>

<p> Please read through the Declarations and Bylaws as well as the HHOA Rulebook to have a better grasp on our community. Those documents will refer to some files that have not been listed here, but the can be found on the <a href="/all-files">HOA Files</a> page.

<?php
  $content = ob_get_clean();
  require './templates/content.php';
?>
