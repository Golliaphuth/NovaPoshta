<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\GetSettlementRegionsResponse;
use NovaPoshta\Traits\FilterByAreaRef;

/**
 * Class GetSettlementRegionsRequest
 * @package NovaPoshta\Requests
 */
class GetSettlementRegionsRequest extends ARequest
{
	use FilterByAreaRef;

	/** @var string */
	protected string $method = 'POST';

	/** @var string */
	protected string $responseClass = GetSettlementRegionsResponse::class;

	/** @var array */
	protected array $query = [
		"modelName"        => "AddressGeneral",
		"calledMethod"     => "getSettlementCountryRegion",
		"methodProperties" => [
			"AreaRef" => ''
		],
	];
}
