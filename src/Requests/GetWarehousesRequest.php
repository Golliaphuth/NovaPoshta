<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\GetWarehousesResponse;
use NovaPoshta\Traits\FilterByCityRef;
use NovaPoshta\Traits\FilterByString;
use NovaPoshta\Traits\FilterByTypeOfWarehouseRef;
use NovaPoshta\Traits\FilterByWarehouseId;
use NovaPoshta\Traits\Pagination;

/**
 * Class GetWarehousesRequest
 * @package NovaPoshta\Requests
 */
class GetWarehousesRequest extends ARequest
{
	use Pagination, FilterByCityRef, FilterByString, FilterByWarehouseId, FilterByTypeOfWarehouseRef;

	/** @var string */
	protected string $method = 'POST';

	/** @var string */
	protected string $responseClass = GetWarehousesResponse::class;

	/** @var array */
	protected array $query = [
		"modelName"        => "AddressGeneral",
		"calledMethod"     => "getWarehouses",
		"methodProperties" => [
			"Warehouse" => 1, // With warehouses only
			"Language"  => "UA",
		],
	];
}
