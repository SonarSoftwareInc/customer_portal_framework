<?php

namespace SonarSoftware\CustomerPortalFramework\Controllers;

use SonarSoftware\CustomerPortalFramework\Exceptions\ApiException;
use SonarSoftware\CustomerPortalFramework\Helpers\HttpHelper;

class AccountController
{
    private $httpHelper;
    /**
     * AccountAuthenticationController constructor.
     */
    public function __construct()
    {
        $this->httpHelper = new HttpHelper();
    }

    /*
     * GET functions
     */

    /**
     * Get account details
     * @param $accountID
     * @return mixed
     * @throws ApiException
     */
    public function getAccountDetails($accountID)
    {
        return $this->httpHelper->get("accounts/" . intval($accountID));
    }

    /**
     * Get a credit card processor related to this accounts companies.
     * @param $accountID
     * @return mixed
     * @throws ApiException
     */
    public function getEnabledCreditCardProcessor($accountID)
    {
        return $this->httpHelper->get("accounts/credit_card_processors/" . intval($accountID) . "/enabled");
    }
}
