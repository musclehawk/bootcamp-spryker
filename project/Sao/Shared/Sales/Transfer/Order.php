<?php

class Sao_Shared_Sales_Transfer_Order extends ProjectA_Shared_Sales_Transfer_Order
{
    protected $os = null;
    protected $_os = array('is_string');

    protected $redirectUrl = null;
    protected $_redirectUrl = array();

    protected $itemsOutOfStock = 'Sao_Shared_Sales_Transfer_Order_Item_Collection';
    protected $_itemsOutOfStock = array();

    protected $legacyUserId = null;
    protected $_legacyUserId = array('is_int');

    protected $quotes = 'Sao_Shared_Fulfillment_Transfer_Quote_Collection';
    protected $_quotes = [];

    protected $isManualCheckout = null;
    protected $_isManualCheckout = array();

    protected $manualCheckoutForced = null;
    protected $_manualCheckoutForced = array();

    protected $checkoutWorkflow = null;
    protected $_checkoutWorkflow = array('is_string');

    protected $clearSessionCart = null;
    protected $_clearSessionCart = array();

    public function setOs($os)
    {
        $this->os = $os;
        return $this;
    }

    public function getOs()
    {
        return $this->os;
    }

    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    public function getSessionId()
    {
        return $this->sessionId;
    }

    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @return Sao_Shared_Sales_Transfer_Order_Item_Collection
     */
    public function getItemsOutOfStock()
    {
        return $this->itemsOutOfStock;
    }

    /**
     * @param Sao_Shared_Sales_Transfer_Order_Item_Collection $items
     *
     * @return ProjectA_Shared_Sales_Transfer_Order
     */
    public function setItemsOutOfStock(Sao_Shared_Sales_Transfer_Order_Item_Collection $items)
    {
        // create empty collection - disabling Out of stock feature. Task #350
        $this->itemsOutOfStock = new Sao_Shared_Sales_Transfer_Order_Item_Collection();
        return $this;
    }

    public function setLegacyUserId($legacyUserId)
    {
        $this->legacyUserId = $legacyUserId;
        return $this;
    }

    public function getLegacyUserId()
    {
        return $this->legacyUserId;
    }

    /**
     * @param Sao_Shared_Fulfillment_Transfer_Quote $quote
     * @return Sao_Shared_Sales_Transfer_Order_Item
     */
    public function addQuote(Sao_Shared_Fulfillment_Transfer_Quote $quote)
    {
        $this->quotes->add($quote);
        return $this;
    }

    /**
     * @param Sao_Shared_Fulfillment_Transfer_Quote_Collection $collection
     * @return Sao_Shared_Sales_Transfer_Order_Item
     */
    public function setQuotes(Sao_Shared_Fulfillment_Transfer_Quote_Collection $collection)
    {
        $this->quotes = $collection;
        return $this;
    }

    /**
     * @return Sao_Shared_Fulfillment_Transfer_Quote_Collection
     */
    public function getQuotes()
    {
        return $this->quotes;
    }

    /**
     * @param bool $isManualCheckout
     * @return Sao_Shared_Sales_Transfer_Order
     */
    public function setIsManualCheckout($isManualCheckout)
    {
        $this->isManualCheckout = $isManualCheckout;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsManualCheckout()
    {
        return $this->isManualCheckout;
    }

    /**
     * @return null
     */
    public function getCheckoutWorkflow()
    {
        return $this->checkoutWorkflow;
    }

    /**
     * @param null $checkoutWorkflow
     */
    public function setCheckoutWorkflow($checkoutWorkflow)
    {
        $this->checkoutWorkflow = $checkoutWorkflow;
    }

    /**
     * @return null
     */
    public function getClearSessionCart()
    {
        return $this->clearSessionCart;
    }

    /**
     * @param null $clearSessionCart
     */
    public function setClearSessionCart($clearSessionCart)
    {
        $this->clearSessionCart = $clearSessionCart;
    }

    /**
     * @param null $manualCheckoutForced
     */
    public function setManualCheckoutForced($manualCheckoutForced)
    {
        $this->manualCheckoutForced = $manualCheckoutForced;
        return $this;
    }

    /**
     * @return null
     */
    public function getManualCheckoutForced()
    {
        return $this->manualCheckoutForced;
    }

}
