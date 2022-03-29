<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
use Bookly\Backend\Components\Cloud\Recharge\Amounts\Manual;
use Bookly\Backend\Components\Cloud\Recharge\Amounts\Auto;
?>
<div class="text-center mt-3">
    <div class="btn-group bookly-js-hide-if-auto" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-bookly btn-lg bookly-js-auto-recharges-btn" style="box-shadow: none;"><?php esc_html_e( 'Auto-Recharge' ) ?></button>
        <button type="button" class="btn btn-default btn-lg bookly-js-manual-recharges-btn" style="box-shadow: none;"><?php esc_html_e( 'One-time payment' ) ?></button>
    </div>
</div>
<h4 class="text-center mt-3 mb-4"><?php esc_html_e( 'Please select an amount and recharge your account', 'bookly' ) ?></h4>
<div style="height: 40px;" class="bookly-js-hide-if-auto">
    <h6 class="text-center text-muted bookly-js-auto-recharge-text"><?php printf( __( 'We will only charge you when your balance falls below %s', 'bookly' ), '<b>$10</b>' ) ?></h6>
</div>
<?php Manual\Button::renderRecharges() ?>
<?php Auto\Button::renderRecharges() ?>
<div class="row my-3 text-center" style="color:#595959">
    <div class="col"><i class="fab fa-2x fa-cc-paypal"></i></div>
    <div class="col"><i class="fab fa-2x fa-cc-mastercard"></i></div>
    <div class="col"><i class="fab fa-2x fa-cc-visa"></i></div>
    <div class="col"><i class="fab fa-2x fa-cc-amex"></i></div>
    <div class="col"><i class="fab fa-2x fa-cc-discover"></i></div>
</div>