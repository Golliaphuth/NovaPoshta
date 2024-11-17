<?php

namespace NovaPoshta\Response;

use NovaPoshta\Factories\ModelFactory;
use NovaPoshta\Models\WarehouseType;

/**
 * Class GetWarehouseTypesResponse
 * @package NovaPoshta\Response
 */
class GetWarehouseTypesResponse extends AResponse
{
	/** @var array */
	private array $types = [];

	public function __construct(array $data)
	{
		foreach ($data as $item) {
			$this->types[] = ModelFactory::create(new WarehouseType(), $item);
		}
	}

	/** @return array */
	public function types(): array
	{
		return $this->types;
	}
}
