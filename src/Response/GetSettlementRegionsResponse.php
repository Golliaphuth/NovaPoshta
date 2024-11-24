<?php

namespace NovaPoshta\Response;

use NovaPoshta\Factories\ModelFactory;
use NovaPoshta\Models\Region;

/**
 * Class GetSettlementRegionsResponse
 * @package NovaPoshta\Response
 */
class GetSettlementRegionsResponse extends AResponse
{
	/** @var array */
	private array $regions = [];

	public function __construct(array $data)
	{
		foreach ($data as $item) {
			$this->regions[] = ModelFactory::create(new Region(), $item);
		}
	}

	/** @return array */
	public function regions(): array
	{
		return $this->regions;
	}
}
