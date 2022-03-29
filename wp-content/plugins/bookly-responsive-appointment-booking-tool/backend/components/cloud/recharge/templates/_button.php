<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * @var array $recharge
 * @var string $type
 */
$custom_color = in_array( 'best_offer', $recharge['tags'] ) ? 'bookly' : ( in_array( 'users_choice', $recharge['tags'] ) ? 'success' : false );
?>
<div class="bookly-js-recharge card mx-2 mb-4<?php if ( $custom_color ) : ?><?php echo esc_attr( ' border-' . $custom_color ); ?><?php endif ?>" style="border-width: 2px; min-height: 200px;">
    <div class="card-body text-center">
        <?php if ( in_array( 'best_offer', $recharge['tags'] ) ) : ?>
            <span class="bg-bookly px-3 py-1 text-truncate text-nowrap text-uppercase text-white" style="position: absolute; top:0; right: 0; font-size: 0.7rem;"><b><?php esc_html_e( 'best offer', 'bookly' ) ?></b></span>
        <?php elseif ( in_array( 'users_choice', $recharge['tags'] ) ) : ?>
            <span class="bg-success px-3 py-1 text-truncate text-nowrap text-uppercase text-white" style="position: absolute; top:0; right: 0; font-size: 0.7rem;"><b><?php esc_html_e( 'users choice', 'bookly' ) ?></b></span>
        <?php endif ?>
        <div class="text-center">
            <span style="vertical-align: bottom;line-height: 4.8rem;font-size: 2rem">$</span>
            <span style="font-size: 4rem"><?php echo esc_html( $recharge['amount'] ) ?></span>
            <?php if ( $recharge['bonus'] ) : ?>
                <b style="vertical-align: top;line-height: 4rem;font-size: 1.5rem"><span class="text-warning">+<?php echo esc_html( $recharge['bonus'] ) ?></span></b>
            <?php endif ?>
        </div>
        <div class="text-center w-100">
            <button class="btn <?php if ( $custom_color ) : ?><?php echo esc_attr( 'btn-' . $custom_color ); ?><?php else : ?>btn-primary<?php endif ?> btn-lg btn-block text-uppercase" style="white-space: normal;" data-recharge-type="<?php echo esc_attr( $type ) ?>" data-recharge=<?php echo json_encode( $recharge ) ?>><?php esc_html_e( 'Buy now', 'bookly' ) ?></button>
        </div>
    </div>
</div>