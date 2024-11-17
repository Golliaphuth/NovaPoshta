<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\GetWarehouseTypesResponse;

/**
 * Class GetWarehouseTypesRequest
 * @package NovaPoshta\Requests
 */
class GetWarehouseTypesRequest extends ARequest
{
	/** @var string */
	protected string $method = 'POST';

	/** @var string */
	protected string $responseClass = GetWarehouseTypesResponse::class;

	/** @var array */
	protected array $query = [
		"modelName"        => "AddressGeneral",
		"calledMethod"     => "getWarehouseTypes",
		"methodProperties" => NULL,
	];
}
