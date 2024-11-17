<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\GetCitiesResponse;
use NovaPoshta\Traits\FilterByRef;
use NovaPoshta\Traits\FilterByString;
use NovaPoshta\Traits\Pagination;

/**
 * Class GetCitiesRequest
 * @package NovaPoshta\Requests
 */
class GetCitiesRequest extends ARequest
{
	use Pagination, FilterByString, FilterByRef;

	/** @var string */
	protected string $method = 'POST';

	/** @var string */
	protected string $responseClass = GetCitiesResponse::class;

	/** @var array */
	protected array $query = [
		"modelName"        => "AddressGeneral",
		"calledMethod"     => "getCities",
		"methodProperties" => NULL,
	];
}
