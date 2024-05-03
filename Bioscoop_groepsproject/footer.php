  <div class="wrapper flex">
    <div class="social-media flex">
      <a href="#"><i class='fab'>&#xf082;</i></a>
      <a href="#"><i class='fab'>&#xf081;</i></a>
      <a href="#"><i class='fab'>&#xf16d;</i></a>
    </div>
    <div class="links flex">
      <a href="">Werken bij</a>
      <a href="">Contact</a>
      <a href="">Voorwaarden</a>
    </div>
  </div>
</footer>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<script>
  jQuery(document).ready(function() {

    jQuery('.carousel[data-type="multi"] .item').each(function() {

      var next = jQuery(this).next();

      if (!next.length) {
        next = jQuery(this).siblings(':first');
      }

      next.children(':first-child').clone().appendTo(jQuery(this));

      for (var i = 0; i < 2; i++) {

        next = next.next();

        if (!next.length) {
          next = jQuery(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
    });
  });
</script>
</body>

</html>