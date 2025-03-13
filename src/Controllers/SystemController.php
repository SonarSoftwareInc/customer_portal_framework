<?php

namespace SonarSoftware\CustomerPortalFramework\Controllers;

use Exception;
use SonarSoftware\CustomerPortalFramework\Exceptions\ApiException;
use SonarSoftware\CustomerPortalFramework\Helpers\CreditCardValidator;
use SonarSoftware\CustomerPortalFramework\Helpers\HttpHelper;
use SonarSoftware\CustomerPortalFramework\Models\BankAccount;
use SonarSoftware\CustomerPortalFramework\Models\CreditCard;
use SonarSoftware\CustomerPortalFramework\Models\TokenizedCreditCard;

class SystemController
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

    public function getService($serviceID, $page = 1)
    {
        return $this->httpHelper->get("system/services/" . intval($serviceID), $page);
    }

    /**
     * Get a list of invoices with remaining due for the account
     * @return mixed
     * @throws ApiException
     */
    public function getPrimaryEnabledCreditCardProcessor()
    {
        return $this->httpHelper->get("system/credit_card_processors/primary_enabled");
    }
}
