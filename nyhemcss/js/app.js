<script type="text/javascript">


function drop(element) {

  var el = document.getElementById(element);

  if (el.style.display === "flex") {
    el.style.display = "none";
  } else {
    el.style.display = "flex";
  }

}

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

