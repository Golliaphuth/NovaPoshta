<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\GetSettlementsResponse;
use NovaPoshta\Traits\FilterByAreaRef;
use NovaPoshta\Traits\FilterByRef;
use NovaPoshta\Traits\Pagination;

/**
 * Class GetSettlementsRequest
 * @package NovaPoshta\Requests
 */
class GetSettlementsRequest extends ARequest
{
	use Pagination, FilterByAreaRef, FilterByRef;

	/** @var string */
	protected string $method = 'POST';

	/** @var string */
	protected string $responseClass = GetSettlementsResponse::class;

	/** @var array */
	protected array $query = [
		"modelName"        => "AddressGeneral",
		"calledMethod"     => "getSettlements",
		"methodProperties" => [
			"Warehouse" => 1,
		],
	];
}
