<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
use Bookly\Backend\Components\Cloud\Recharge\Dialog;
/**
 * @var array $recharges
 * @var string $type
 */
?>
<div class="form-row bookly-js-manual-recharges mt-4" style="display: none;">
    <?php foreach ( $recharges as $recharge ) : ?>
        <div class="col-12 col-md-6 col-lg-4">
            <?php Dialog::renderTemplate( '_button', compact( 'recharge', 'type' ) ) ?>
        </div>
    <?php endforeach ?>
</div>