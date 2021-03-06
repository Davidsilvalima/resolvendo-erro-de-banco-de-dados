<?php
namespace Bookly\Backend\Components\Cloud\Recharge\Amounts\Auto;

use Bookly\Backend\Components\Cloud\Recharge\Amounts;
use Bookly\Lib;

/**
 * Class Button
 * @package Bookly\Backend\Components\Cloud\Recharge\Amounts\Auto
 */
class Button extends Lib\Base\Component
{
    public static function renderSelector()
    {
        $cloud = Lib\Cloud\API::getInstance();

        $label = $cloud->account->autoRechargeEnabled() ? sprintf( __( 'You have active auto-recharge till %s', 'bookly' ), Lib\Utils\DateTime::formatDate( $cloud->account->getAutoRechargeEndAt() ) ) : __( 'You don\'t have active auto-recharge', 'bookly' );

        self::renderTemplate( 'selector', array( 'recharges' => Amounts::getInstance()->getItems( Amounts::RECHARGE_TYPE_AUTO ), 'label' => $label ) );
    }

    public static function renderRecharges()
    {
        self::enqueueStyles( array(
            'backend' => array( 'css/fontawesome-all.min.css' => array( 'bookly-backend-globals' ), ),
        ) );

        self::enqueueScripts( array(
            'module' => array( 'js/recharge-auto.js' => array( 'bookly-backend-globals' ), ),
        ) );

        $cloud = Lib\Cloud\API::getInstance();

        $amounts = Amounts::getInstance();

        wp_localize_script( 'bookly-recharge-auto.js', 'BooklyAutoRechargeL10n', array(
            'auto_recharge' => array(
                'enabled' => $cloud->account->autoRechargeEnabled(),
                'amount' => $cloud->account->getAutoRechargeAmount(),
                'bonus' => $cloud->account->getAutoRechargeBonus(),
            ),
            'dont_have_auto_recharge' => __( 'You don\'t have active auto-recharge', 'bookly' ),
        ) );

        self::renderTemplate( 'recharges', array(
            'type' => Amounts::RECHARGE_TYPE_AUTO,
            'recharges' => $amounts->getItems( Amounts::RECHARGE_TYPE_AUTO ),
        ) );
    }

    public static function renderConfirmModal()
    {
        self::renderTemplate( 'modal' );
    }
}