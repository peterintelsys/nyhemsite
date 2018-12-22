<?php include('header.php'); ?>


<ul class="breadcrumb">
  <li><a href="index.php">Hem</a></li>
  <li>Kontakta oss</li>
</ul>


<div class="mygrid">

<div>

<h4>Kontakta oss</h4>


<div class="card">
<img src="img/contact.jpg" alt="Avatar" style="width:100%; height: 200px;">
<div class="card-header">Kontakta oss</div>

<div class="card-content">

<form method="POST" id="contactForm" action="contactWorker.php">
  <fieldset>

    <label for="nameField">Namn</label>
    <input type="text" placeholder="Ange namn..." id="nameField" name="name" required>

    <label for="emailField">Email</label>
    <input type="email" placeholder="Ange email..." id="emailField" name="email" required>

    <label for="commentField">Meddelande</label>
    <textarea placeholder="Ange meddelande..." id="commentField" name="message"></textarea>

    <label for="testField">Kontrollfråga</label>
    <input type="number" placeholder="Ange svar..." id="testField" name="captcha" required>

    
    <input class="button-primary" type="submit" value="Skicka">
  </fieldset>
</form>

<h4>Eller ring oss!</h4>

<h5>Kontaktpersoner:</h5>

Ålagränd:<br> 
Sune Rönn, Abborrgränd 29<br>
E-post: sune.ronn@telia.com<br>
Tel: 0431-18468<br><br>

Abborrgränd:<br> 
Jan-Olof Jönsson, Abborrgränd 17<br> 
E-post: jan-olof.jonsson@bjarenet.com <br>
Tel: 0706-301195 <br><br>

Mörtgränd:<br>
Filip Niltorp, Mörtgränd 34<br> 
E-post: info@nyhemssamfallighet.se <br>
Tel: 0708-538451 <br><br>

Tveka inte att höra av er till Styrelsen om ni har några frågor eller funderingar! Förbättringsförslag är varmt välkomna!<br><br>


</div>

</div>




</div>

<?php include('sidebar.php'); ?>

</div>




<?php include('footer.php'); ?>