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
<div class='confirmation'>

  <div class='thank-you'>
    <h1>Thank you</h1>
    <h2><?= $submission['fname'] ?> <?= $submission['lname'] ?>!</h2>
  </div>

  <div class='address'>
    <p><strong>If you provided your address, your FREE DVD and Brochure will be sent to:</strong></p>
    <p>
      <?= $submission['fname'] ?> <?= $submission['lname'] ?><br />
      <?= $submission['address1'] ?><br />
      <?= $submission['city'] ?>, <?= $submission['state'] ?>, <?= $submission['zipcode'] ?>
    </p>
    <p>Please call <strong>800-876-0158</strong> with any questions or to speak to a sales associate.</p>
  </div>

  <div class='connect'>
    <h3>Connect with us: </h3>
    <ul class="social">
      <li><a class="facebook" href="https://www.facebook.com/ThermoSpas" target="_blank">Facebook</a></li>
      <li><a class="pinterest" href="http://pinterest.com/thermospas/" target="_blank">Pinterest</a></li>
      <li><a class="youtube" href="http://www.youtube.com/user/ThermoSpaInc?feature=watch" target="_blank">YouTube</a></li>
      <li><a class="twitter" href="https://twitter.com/thermospas" target="_blank">Twitter</a></li>
    </ul>
  </div>

  <div class='download-materials'>

    <h2>Prefer to download the materials and watch videos online?</h2>
    <p>Just click the links below to view or download content.</p>

    <ul class="free-stuff">
      <li class="brochure">
        <a href="http://www.thermospas.com/wp-content/plugins/ts_form/downloads/Full_Series_Brochure.pdf" target="blank">
          <img src="/img/brochure.png" />
        </a>
        <p>Download the ThermoSpas Brochure PDF file (4.3 MB)</p>
      </li>
      <li class="dvd">
        <a href="http://www.thermospas.com/thermospas-dvd.html" target="blank">
          <img src="/img/dvd.png" />
        </a>
        <p>Watch videos from the ThermoSpas DVD</p>
      </li>
      <li class="coupon">
        <a href="http://www.thermospas.com/wp-content/plugins/ts_form/downloads/thermospas-savings-coupon.pdf" target="blank">
          <img src="/img/coupon.png" />
        </a>
        <p>Download the ThermoSpas $1000 coupon (562 KB)</p>
      </li>
    </ul>

    <ul class='logos'>
      <li><img src='/img/speak-to-sales-associate.png' alt='Speak to a friendly sales associate about a free site inspection! 800.555.1212'/>
      <li><img src='/img/apsp-logo.png' alt='Association of Pool and Spa Professionals'/></li>
      <li><img src='/img/arthritis-foundation.png' alt='Ease of Commendation by Arthritis Foundation'/></li>
    </ul>

  </div>

</div>

<?php include('includes/footer.php') ?>


