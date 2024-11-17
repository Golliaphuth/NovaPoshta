<?php

namespace NovaPoshta\Models;

/**
 * Class Area
 * @property string      Description
 * @property string      DescriptionRu
 * @property string      Ref
 * @property string      Delivery1
 * @property string      Delivery2
 * @property string      Delivery3
 * @property string      Delivery4
 * @property string      Delivery5
 * @property string      Delivery6
 * @property string      Delivery7
 * @property string      Area
 * @property string      SettlementType
 * @property string      IsBranch
 * @property string|NULL PreventEntryNewStreetsUser
 * @property string|NULL Conglomerates
 * @property string      CityID
 * @property string      SettlementTypeDescriptionRu
 * @property string      SettlementTypeDescription
 * @package NovaPoshta\Models
 */
class City
{
	/** @return string */
	public function getDescription(): string
	{
		return $this->Description;
	}

	/** @return string */
	public function getDescriptionRu(): string
	{
		return $this->DescriptionRu;
	}

	/** @return string */
	public function getRef(): string
	{
		return $this->Ref;
	}

	/** @return string */
	public function getDelivery1(): string
	{
		return $this->Delivery1;
	}

	/** @return string */
	public function getDelivery2(): string
	{
		return $this->Delivery2;
	}

	/** @return string */
	public function getDelivery3(): string
	{
		return $this->Delivery3;
	}

	/** @return string */
	public function getDelivery4(): string
	{
		return $this->Delivery4;
	}

	/** @return string */
	public function getDelivery5(): string
	{
		return $this->Delivery5;
	}

	/** @return string */
	public function getDelivery6(): string
	{
		return $this->Delivery6;
	}

	/** @return string */
	public function getDelivery7(): string
	{
		return $this->Delivery7;
	}

	/** @return string */
	public function getArea(): string
	{
		return $this->Area;
	}

	/** @return string */
	public function getSettlementType(): string
	{
		return $this->SettlementType;
	}

	/** @return string */
	public function getIsBranch(): string
	{
		return $this->IsBranch;
	}

	/** @return string|NULL */
	public function getPreventEntryNewStreetsUser(): ?string
	{
		return $this->PreventEntryNewStreetsUser;
	}

	/** @return string|NULL */
	public function getConglomerates(): ?string
	{
		return $this->Conglomerates;
	}

	/** @return string */
	public function getCityID(): string
	{
		return $this->CityID;
	}

	/** @return string */
	public function getSettlementTypeDescriptionRu(): string
	{
		return $this->SettlementTypeDescriptionRu;
	}

	/** @return string */
	public function getSettlementTypeDescription(): string
	{
		return $this->SettlementTypeDescription;
	}
}
