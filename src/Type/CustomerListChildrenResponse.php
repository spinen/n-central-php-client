<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class CustomerListChildrenResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\EiKeyValueList
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValueList
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValueList $return
     * @return CustomerListChildrenResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

