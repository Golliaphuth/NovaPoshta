<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\AResponse;
use Throwable;

/**
 * Class ARequest
 * @property string responseClass
 * @property string method
 * @property array  query
 * @package NovaPoshta\Requests
 */
abstract class ARequest implements IRequest
{
	/** @var string */
	private string $apiKey;

	public function __construct(string $apiKey)
	{
		$this->apiKey = $apiKey;
	}

	/**
	 * @return AResponse
	 * @throws Throwable
	 */
	public function send(): AResponse
	{
		$this->query['apiKey'] = $this->apiKey;
		try {
			$curl = curl_init();
			curl_setopt_array($curl, [
				CURLOPT_URL            => 'https://api.novaposhta.ua/v2.0/json/',
				CURLOPT_RETURNTRANSFER => TRUE,
				CURLOPT_ENCODING       => '',
				CURLOPT_MAXREDIRS      => 10,
				CURLOPT_TIMEOUT        => 0,
				CURLOPT_FOLLOWLOCATION => TRUE,
				CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST  => $this->method,
				CURLOPT_POSTFIELDS     => json_encode($this->query, JSON_THROW_ON_ERROR),
				CURLOPT_HTTPHEADER     => [
					'Content-Type: application/json',
				],
			]);
			$json = curl_exec($curl);
			curl_close($curl);
			$response = json_decode($json, TRUE, 512, JSON_THROW_ON_ERROR);
//			dd($response);
			if ($response['success'] === TRUE) {
				return new $this->responseClass($response['data']);
			}
		} catch (Throwable $e) {
			echo get_class($e) . PHP_EOL . $e->getMessage() . PHP_EOL;
		}
	}
}
