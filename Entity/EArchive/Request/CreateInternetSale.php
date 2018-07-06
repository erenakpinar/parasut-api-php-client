<?php

namespace Parasut\Entity\EArchive\Request;


class CreateInternetSale
{
    const PAYMENT_TYPE_KREDIKARTI_BANKAKARTI = 'KREDIKARTI/BANKAKARTI';
    const PAYMENT_TYPE_EFT_HAVALE = 'EFT/HAVALE';
    const PAYMENT_TYPE_KAPIDAODEME = 'KAPIDAODEME';
    const PAYMENT_TYPE_ODEMEARACISI = 'ODEMEARACISI';

    const PAYMENT_TYPES = [
        self::PAYMENT_TYPE_KREDIKARTI_BANKAKARTI,
        self::PAYMENT_TYPE_EFT_HAVALE,
        self::PAYMENT_TYPE_KAPIDAODEME,
        self::PAYMENT_TYPE_ODEMEARACISI
    ];

    protected $url;
    protected $payment_type;
    protected $payment_platform;
    protected $payment_date;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        if (in_array($payment_type, self::PAYMENT_TYPES)) {
            $this->payment_type = $payment_type;
        }
    }

    /**
     * @return string
     */
    public function getPaymentPlatform()
    {
        return $this->payment_platform;
    }

    /**
     * @param string $payment_platform
     */
    public function setPaymentPlatform($payment_platform)
    {
        $this->payment_platform = $payment_platform;
    }

    /**
     * @return mixed
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
    }

    /**
     * @param mixed $payment_date
     */
    public function setPaymentDate($payment_date)
    {
        $this->payment_date = $payment_date;
    }
}