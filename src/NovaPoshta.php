<?php

namespace NovaPoshta;

use NovaPoshta\Requests\GetCitiesRequest;
use NovaPoshta\Requests\GetSettlementAreasRequest;
use NovaPoshta\Requests\GetSettlementsRequest;
use NovaPoshta\Requests\GetWarehousesRequest;
use NovaPoshta\Requests\GetWarehouseTypesRequest;
use Throwable;

/**
 * Class NovaPoshta
 * @package App\Modules
 */
class NovaPoshta
{
	/** @var string */
	private string $apiKey;

	/** @param string $apiKey */
	public function __construct(string $apiKey)
	{
		$this->apiKey = $apiKey;
	}

	/**
	 * @return GetSettlementAreasRequest
	 * @throws Throwable
	 */
	public function getSettlementAreas(): GetSettlementAreasRequest
	{
		return new GetSettlementAreasRequest($this->apiKey);
	}

	/**
	 * @return GetCitiesRequest
	 * @throws Throwable
	 */
	public function getCities(): GetCitiesRequest
	{
		return new GetCitiesRequest($this->apiKey);
	}

	/**
	 * @return GetSettlementsRequest
	 * @throws Throwable
	 */
	public function getSettlements(): GetSettlementsRequest
	{
		return new GetSettlementsRequest($this->apiKey);
	}

	/**
	 * @return GetWarehousesRequest
	 * @throws Throwable
	 */
	public function getWarehouses(): GetWarehousesRequest
	{
		return new GetWarehousesRequest($this->apiKey);
	}

	/**
	 * @return GetWarehouseTypesRequest
	 * @throws Throwable
	 */
	public function getWarehouseTypes(): GetWarehouseTypesRequest
	{
		return new GetWarehouseTypesRequest($this->apiKey);
	}

}
