<?php include('includes/header.php') ?>

<?php

if(isset($_SESSION['ht_id'])) {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/HtDb.php');
  $db = new HtDb();
  $submission = $db->get('ht_form', array('ht_id', $_SESSION['ht_id']));
} else {
  header('Location: /');
}

?>

<h1>Thank you <?= $submission['fname'] ?> <?= $submission['lname'] ?></h1>
<p>Your FREE DVD and Brochure will be sent to:</p>
<p>
  <?= $submission['fname'] ?>, <?= $submission['lname'] ?><br />
  <?= $submission['address1'] ?><br />
  <?= $submission['city'] ?>, <?= $submission['state'] ?>, <?= $submission['zipcode'] ?>
</p>
<p>Please call <strong>800-876-0158</strong> with any questions or to speak to a sales associate.</p>

<h2>Connect with us: </h2>
<ul class="social">
  <li><a class="facebook" href="https://www.facebook.com/ThermoSpas" target="_blank">Facebook</a></li>
  <li><a class="pinterest" href="http://pinterest.com/thermospas/" target="_blank">Pinterest</a></li>
  <li><a class="youtube" href="http://www.youtube.com/user/ThermoSpaInc?feature=watch" target="_blank">YouTube</a></li>
  <li><a class="twitter" href="https://twitter.com/thermospas" target="_blank">Twitter</a></li>
</ul>

<h2>Prefer to download the materials and watch videos online?</h2>
<p>Just click the links below to view or download content.</p>

<ul class="free-stuff">
  <li class="brochure">
    <a href="http://www.thermospas.com/wp-content/plugins/ts_form/downloads/Full_Series_Brochure.pdf">
      <img src="/img/brochure.png" />
      Download the ThermoSpas Brochure PDF file (4.3 MB)
    </a>
  </li>
  <li class="dvd">
    <a href="http://www.thermospas.com/thermospas-dvd.html" target="_blank">
      <img src="/img/dvd.png" />
      Watch videos from the ThermoSpas DVD
    </a>
  </li>
  <li class="coupon">
    <a href="http://www.thermospas.com/wp-content/plugins/ts_form/downloads/thermospas-savings-coupon.pdf">
      <img src="/img/coupon.png" />
      Download the ThermoSpas $1000 coupon (562 KB)
    </a>
  </li>
</ul>

<?php include('includes/footer.php') ?>