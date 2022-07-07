<?php

class User
{
	static public $counter_of_objects = 0;

	public $nome;
	public $eta;
	public $sconto = 15;

	public function __construct(string $nome, int $eta)
	{
		$this->nome = $nome;
		$this->eta = $eta;
		$this->setBaseDiscount();
		$this->getDiscount(100);
		self::$counter_of_objects++;
	}

	public function __destruct()
	{
		// echo '<br>sto distruggendo l\'oggetto ' . $this->nome;
		self::$counter_of_objects--;
	}

	public function setBaseDiscount() {
		if ($this->eta > 65) {
			$this->sconto = 25;
		} elseif ($this->eta < 10) {
			$this->sconto = 50;
		}
	}

	public function getDiscount($prezzoOrdine) {
		if ($prezzoOrdine > 100) {
			return $this->sconto + 10;
		} else {
			return $this->sconto;
		}
	}

	static public function calculateDiscountValue($prezzo, $discount) {
		// prezzo : sconto_reale = 100 : sconto_percentuale
		$sconto = $prezzo * $discount / 100;
		return $prezzo - $sconto;
	}
}