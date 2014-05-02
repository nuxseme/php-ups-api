<?php

namespace UPS\Entity;


class RateResponse {
    public $RatedShipment;

    function __construct( $response = null ) {
        $this->RatedShipment = array();

        if ( null != $response ) {
            if ( isset( $response->RatedShipment ) ) {
                if ( is_array( $response->RatedShipment )) {
                    foreach ($response->RatedShipment as $ratedShipment )   {
                        $this->RatedShipment[] = new RatedShipment( $ratedShipment );
                    }
                }
                else {
                    $this->RatedShipment[] = new RatedShipment( $response->RatedShipment );
                }
            }

        }

    }

}