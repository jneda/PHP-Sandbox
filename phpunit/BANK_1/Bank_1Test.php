<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Challenges\BANK_1\Bank_1;

final class Bank_1Test extends TestCase
{
	public function setUp(): void
	{
		parent::setUp();
		$this->Bank_1 = new Bank_1;
	}

	// TES METHODES DE TEST ---------------------

	public function testSaysHello(): void
	{
		$this->assertEquals(
			$this->Bank_1->sayHello(),
			'Bonjour tout le monde !'
		);
	}
}