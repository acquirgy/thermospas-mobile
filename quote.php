<?php include('includes/header.php') ?>
<script src="js/quote.js"></script>

<?php if(isset($_SESSION['ht_id'])) unset($_SESSION['ht_id']) ?>

<h1>Find the best hot tub that fits your needs, then get a quote!</h1>
<p class="lead">Request a Hot Tub Quote and <strong>Save $1000</strong></p>

<form name="form" class="form" method="POST" action="process_quote.php">
    <input type="hidden" name="validate" class="validate" value="invalid" />
    <div class="form-border top"></div>

    <div class="step-1">

        <h2>Let us know what you're looking for...</h2>
        <p class="form-lead">...and we'll provide you a quote on the hot tub of your dreams.</p>

        <div class="row">
            <select name="ht_use" class="customDropDown" id="ht_use">
                <option value="" selected disabled style="display: none;">Primary Hot Tub Use?</option>
                <option value="relaxation">Relaxation</option>
                <option value="hydrotherapy">Hydrotherapy/Pain Relief</option>
                <option value="exercise">Exercise</option>
                <option value="other">Other </option>
            </select>
        </div>

       <div class="row">
           <select name="ht_seating" class="customDropDown" id="ht_seating">
                <option value="" selected disabled style="display: none;">How many people?</option>
                <option value="2to3">2-3 person</option>
                <option value="3to4">3-4 person</option>
                <option value="4to5">4-5 person</option>
                <option value="5to6">5-6 person</option>
                <option value="6to+">6+ person</option>
            </select>
        </div>

        <div class="row"><input type="text" id="name" name="name" class="required" placeholder="Your Name*"/></div>

        <div class="row"><input type="text" id="zipcode" name="zipcode" class="required" placeholder="Your Zip Code*"/></div>

        <div class="row"><input type="text" name="phone" class="phone required" placeholder="Phone*" /></div>

        <div class="row">
            <button class="complete-step-1">Next Step</button>
        </div>
    </div>

    <div class="step-2">
        <h2>Please let us know about the location</h2>
        <p>Let us know a little about where you would like to put your hot tub.
        This will allow us to come up with accurate pricing information and send you a
        $1,000 coupon, DVD, and complete information package.</p>

        <div class="row">
            <select name="ht_location" class="customDropDown" id="ht_location">
                <option value="" selected disabled style="display: none;">Do you have a location?</option>
                <option value="outside">Yes: Outside</option>
                <option value="inside">Yes: Inside</option>
                <option value="no">Unsure</option>
            </select>
            <span id="ht_locationInfo" class="ht_locationInfo"></span>
        </div>

        <div class="row">
            <select name="ht_jets" id="ht_jets" class="customDropDown" >
                <option value="" selected disabled style="display: none;">What type of jets?</option>
                <option value="unsure">Not Sure</option>
                <option value="massage">Massaging / Swirling</option>
                <option value="neck">Neck Jets</option>
                <option value="foot">Foot Jets</option>
                <option value="laser">Direct "Laser" Jets</option>
                <option value="combation">Combination</option>
            </select>
        </div>

        <div class="row">
            <select name="ht_owner" id="ht_owner" class="customDropDown" >
                <option value="" selected disabled style="display: none;">Have you owned a hot tub before?</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <span id="ht_ownerInfo" class="ht_ownerInfo"></span>
        </div>

        <div class="row">
            <select name="ht_siteinspection" id="ht_siteinspection" class="customDropDown" />
                <option value="" selected disabled style="display: none;">Have you had a site inspection?</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="row"><input type="text" id="address" name="address" class="required" placeholder="Your Address*" /></div>

        <div class="row"><input type="text" id="city" name="city" class="required" placeholder="Your City*" /></div>

        <div class="row">
            <select name="state" id="state" class="customDropDown required" >
                <option value="" selected disabled style="display: none;">Your State*</option>
                <?php foreach(states() as $abbrev => $state) { ?>
                    <option value="<?= $abbrev ?>"><?= $state ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="row"><input type="text" id="email" name="email" placeholder=" Your Email"/></div>

        <div class="row" >
            <button type="submit" name="submit" id="submit" >Get a Quote and DVD Now</button>
        </div>
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

<?php
function states() {
    return array(
        'AL'=>"Alabama",
        'AK'=>"Alaska",
        'AZ'=>"Arizona",
        'AR'=>"Arkansas",
        'CA'=>"California",
        'CO'=>"Colorado",
        'CT'=>"Connecticut",
        'DE'=>"Delaware",
        'DC'=>"District Of Columbia",
        'FL'=>"Florida",
        'GA'=>"Georgia",
        'HI'=>"Hawaii",
        'ID'=>"Idaho",
        'IL'=>"Illinois",
        'IN'=>"Indiana",
        'IA'=>"Iowa",
        'KS'=>"Kansas",
        'KY'=>"Kentucky",
        'LA'=>"Louisiana",
        'ME'=>"Maine",
        'MD'=>"Maryland",
        'MA'=>"Massachusetts",
        'MI'=>"Michigan",
        'MN'=>"Minnesota",
        'MS'=>"Mississippi",
        'MO'=>"Missouri",
        'MT'=>"Montana",
        'NE'=>"Nebraska",
        'NV'=>"Nevada",
        'NH'=>"New Hampshire",
        'NJ'=>"New Jersey",
        'NM'=>"New Mexico",
        'NY'=>"New York",
        'NC'=>"North Carolina",
        'ND'=>"North Dakota",
        'OH'=>"Ohio",
        'OK'=>"Oklahoma",
        'OR'=>"Oregon",
        'PA'=>"Pennsylvania",
        'RI'=>"Rhode Island",
        'SC'=>"South Carolina",
        'SD'=>"South Dakota",
        'TN'=>"Tennessee",
        'TX'=>"Texas",
        'UT'=>"Utah",
        'VT'=>"Vermont",
        'VA'=>"Virginia",
        'WA'=>"Washington",
        'WV'=>"West Virginia",
        'WI'=>"Wisconsin",
        'WY'=>"Wyoming"
    );
}
