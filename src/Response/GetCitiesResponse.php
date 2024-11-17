<?php

namespace NovaPoshta\Response;

use NovaPoshta\Factories\ModelFactory;
use NovaPoshta\Models\City;

/**
 * Class GetCitiesResponse
 * @package NovaPoshta\Response
 */
class GetCitiesResponse extends AResponse
{
	/** @var array */
	private array $cities = [];

	public function __construct(array $data)
	{
		foreach ($data as $item) {
			$this->cities[] = ModelFactory::create(new City(), $item);
		}
	}

	/** @return array */
	public function cities(): array
	{
		return $this->cities;
	}
}
