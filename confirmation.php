<?php include('includes/header.php') ?>

<h1>Thank you <?= $submission['first_name'] ?> <?= $submission['last_name'] ?></h1>
<p>Your FREE DVD and Brochure will be sent to:</p>
<p>
  <?= $submission['first_name'] ?>, <?= $submission['last_name'] ?><br />
  <?= $submission['address'] ?><br />
  <?= $submission['city'] ?>, <?= $submission['state'] ?>, <?= $submission['zip'] ?>
</p>
<p>Please call <strong>800-876-0158</strong> with any questions or to speak to a sales associate.</p>

<h2>Connect with us: </h2>
<a href=""><img src="" /></a>
<a href=""><img src="" /></a>
<a href=""><img src="" /></a>
<a href=""><img src="" /></a>

<h2>Prefer to download the materials and watch videos online?</h2>
<p>Just click the links below to view or download content.</p>

<ul class="content">
  <li class="brochure">
    <a href="">
      <img src="" />
      Download the ThermoSpas Brochure PDF file (4.3 MB)
    </a>
  </li>
  <li class="dvd">
    <a href="">
      <img src="" />
      Watch videos from the ThermoSpas DVD
    </a>
  </li>
  <li class="coupon">
    <a href="">
      <img src="" />
      Download the ThermoSpas $1000 coupon (562 KB)
    </a>
  </li>
</ul>

<?php include('includes/footer.php') ?>