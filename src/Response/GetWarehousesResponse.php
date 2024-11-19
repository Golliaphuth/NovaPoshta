<?php

namespace NovaPoshta\Response;

use NovaPoshta\Factories\ModelFactory;
use NovaPoshta\Models\Settlement;
use NovaPoshta\Models\Warehouse;

/**
 * Class GetWarehousesResponse
 * @package NovaPoshta\Response
 */
class GetWarehousesResponse extends AResponse
{
	/** @var array */
	private array $settlements = [];

	public function __construct(array $data)
	{
		foreach ($data as $item) {
			$this->settlements[] = ModelFactory::create(new Warehouse(), $item);
		}
	}

	/** @return array */
	public function warehouses(): array
	{
		return $this->settlements;
	}
}
