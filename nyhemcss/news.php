<?php include('header.php'); ?>


<ul class="breadcrumb">
  <li><a href="index.php">Hem</a></li>
  <li>Registrera dig för nyheter</li>
</ul>


<div class="mygrid">

<div>

<h4>Registrera dig för nyheter</h4>


<div class="card">
<img src="img/contact.jpg" alt="Avatar" style="width:100%; height: 200px;">
<div class="card-header">Registrera dig</div>

<div class="card-content">

<p>Boende i området som vill bli meddelade när något nytt läggs upp på hemsidan, t.ex. Nyhemsnytt, kan registrera sin mail här.</p>

<form method="POST" action="subscribeWorker.php">
  <fieldset>

    <label for="emailField">Email</label>
    <input type="email" placeholder="Ange email..." id="emailField" name="email" required>

    
    <input class="button-primary" type="submit" value="Registrera">
  </fieldset>
</form>


</div>

</div>




</div>

<?php include('sidebar.php'); ?>

</div>




<?php include('footer.php'); ?>