<?php

namespace NovaPoshta\Requests;

use NovaPoshta\Response\AResponse;

/** Interface IRequest */
interface IRequest
{
	public function send(): AResponse;
}
