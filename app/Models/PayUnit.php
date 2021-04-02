<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayUnit extends Model
{
    use HasFactory;

  public $apiKey;
  public $apiPassword;
  public $apiUser;
  public $returnUrl;
  public $amount;
  public $transactionId;
  public $notifyUrl;
  public $description;
  public $purchaseRef;
  public $currency;
  public $name;
  /**
   * @param string $apikey Your apikey
   * @param string $apiPassword Your apiPassword
   * @param string $apiUser Your apiUsername
   * @param string $returnUrl Your return Url
   * @param string $amount Clients amount
   * @param string $description description of the transaction
   * @param string $purchaseRef purchaseRef
   * @param string $currency currency
   * @param string $name Marchant Name
   */
  function __construct($apiKey, $apiPassword, $apiUser, $returnUrl, $notifyUrl, $mode, $description, $purchaseRef, $currency, $name)
  {
    $this->apiKey      = $apiKey;
    $this->apiPassword = $apiPassword;
    $this->apiUser     = $apiUser;
    $this->returnUrl   = $returnUrl;
    $this->notifyUrl   = $notifyUrl;
    $this->mode   = $mode;
    $this->description   = $description;
    $this->purchaseRef   = $purchaseRef;
    $this->currency   = $currency;
    $this->name   = $name;
  }
  /**
   * Used to perform the Transaction
   */
  public function makePayment($amountTobePaid)
  {

    $this->transactionId = uniqid();
    $encodedAuth         = base64_encode($this->apiUser . ":" . $this->apiPassword);
    $postRequest         = array(
      "total_amount" => $amountTobePaid,
      "return_url" => $this->returnUrl,
      "notify_url" => $this->notifyUrl,
      "currency" => $this->currency,
      "purchaseRef" => $this->purchaseRef,
      "name" => $this->name,
      "description" => $this->description,
      "transaction_id" => $this->transactionId,
    );


    $cURLConnection      = curl_init();
    curl_setopt($cURLConnection, CURLOPT_URL, "https://app.payunit.net/api/gateway/initialize");
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, json_encode($postRequest));
    $secArr =  array(
      "x-api-key: {$this->apiKey}",
      "authorization: Basic: {$encodedAuth}",
      'Accept: application/json',
      'Content-Type: application/json',
      "mode: {$this->mode}"
    );
    $all =  array_merge($postRequest, $secArr);
    curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $all);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $jsonArrayResponse = json_decode($apiResponse);
    echo (isset($jsonArrayResponse));
    if (isset($jsonArrayResponse->body->transaction_url)) {
      echo ("dfdgdg");
      //die();
      header("Location: {$jsonArrayResponse->body->transaction_url}");
      exit();
    } else {
      echo ($apiResponse);
    }
  }
}
