<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\GetSettlementAreasResponse;

/**
 * Class GetAreasRequest
 * @package NovaPoshta\Requests
 */
class GetSettlementAreasRequest extends ARequest
{
	/** @var string */
	protected string $method = 'POST';

	/** @var string */
	protected string $responseClass = GetSettlementAreasResponse::class;

	/** @var array */
	protected array $query = [
		"modelName"        => "AddressGeneral",
		"calledMethod"     => "getSettlementAreas",
		"methodProperties" => NULL,
	];
}
