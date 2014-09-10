<?php include('includes/header.php') ?>

<?php
    $_SESSION['iref'] = isset($_GET['iref']) ? $_GET['iref'] : 'IPPC_M';
    $_SESSION['ht_id'] = false;
?>

<h1>Get Your <strong>FREE</strong> Hot Tub Brochure & DVD</h1>
<p class="lead">Request a Hot Tub Quote and <strong>Save $1000</strong></p>

<div class="player-container">
    <iframe src="//www.youtube.com/embed/RmaGI5UXqhk"
    frameborder="0" allowfullscreen id="video" type="text/html"></iframe>
</div>

<form name="form" class="form" method="POST" action="process.php">
    <input type="hidden" name="validate" class="validate" value="invalid" />
    <div class="form-border top"></div>
    <h2>Fast, Easy & FREE!</h2>
    <p class="form-lead">Just fill out the quick form below to receive your FREE information. No obligation!</p>
    <div class="row">
        <div class="col col-first-name">
            <input type="text" name="first_name" class="first-name required" placeholder="First Name*" />
        </div>
        <div class="col col-last-name">
            <input type="text" name="last_name" class="last-name required" placeholder="Last Name*" />
        </div>
    </div>
    <div class="row">
        <input type="text" name="email" class="email" placeholder="Email" />
    </div>
   <div class="row">
        <input type="text" name="phone" class="phone required" placeholder="Phone*" />
    </div>
   <div class="row">
        <input type="text" name="address" class="address" placeholder="Address" />
    </div>
    <div class="row">
        <div class="col col-city">
            <input type="text" name="city" class="city" placeholder="City" />
        </div>
        <div class="col col-state">
            <select name="state" class="state">
                <?php include('includes/states.php') ?>
            </select>
        </div>
        <div class="col col-zip">
            <input type="text" name="zip" class="zip required" placeholder="Zip*" />
        </div>
    </div>
    <div class="row">
        <button type="submit" class="submit-form">Get Your <span>FREE</span> DVD & Brochure NOW!</button>
    </div>
    <span class="required-text">* required</span>
    <div class="form-border bottom"></div>
</form>

<script type="text/javascript">

    function validateForm() {
      return $('.form').valid();
    }

    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-PLBR48.sharpspring.com/webforms/receivePostback/MzQyNQAA/']);
    __ss_noform.push(['endpoint', 'e1da5d6d-3468-46ba-8dbb-451f975af1b3']);
    __ss_noform.push(['validate', validateForm]);

</script>
<script type="text/javascript" src="https://koi-PLBR48.sharpspring.com/client/noform.js?ver=1.0" ></script>

<?php include('includes/footer.php') ?>
