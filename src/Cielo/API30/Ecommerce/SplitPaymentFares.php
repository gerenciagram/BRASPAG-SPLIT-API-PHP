<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class SplitPaymentFares
 *
 * @package Cielo\API30\Ecommerce
 */
class SplitPaymentFares implements \JsonSerializable
{

    private $mdr;
    private $fee;

    /**
     * @param $json
     *
     * @return SplitPaymentFares
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $splitPayments = new SplitPaymentFares();

        if (isset($object->SplitPaymentFares)) {
            $splitPayments->populate($object->SplitPaymentFares);
        }

        return $splitPayments;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->mdr = isset($data->Mdr) ? $data->Mdr : null;
        $this->fee = isset($data->Fee) ? $data->Fee : null;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed
     */
    public function getMdr()
    {
        return $this->mdr;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }


    /**
     * @param $mdr
     *
     * @return $this
     */
    public function setMdr($mdr)
    {
        $this->mdr = $mdr;

        return $this;
    }

    /**
     * @param $fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

}
