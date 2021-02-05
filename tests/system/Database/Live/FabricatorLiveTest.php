<?php namespace CodeIgniter\Database\Live;

use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\Test\CIDatabaseTestCase;
use CodeIgniter\Test\Fabricator;
use Tests\Support\Models\UserModel;
use Tests\Support\Models\ValidModel;

/**
 * @group DatabaseLive
 */
class FabricatorLiveTest extends CIDatabaseTestCase
{
	protected $refresh = true;

	public function testCreateAddsToDatabase()
	{
		$fabricator = new Fabricator(UserModel::class);

		// Some countries violate the 40 character limit so override that
		$fabricator->setOverrides(['country' => 'Spain']);

		$result = $fabricator->create();

		$this->seeInDatabase('user', ['name' => $result->name]);
	}

	public function testCreateAddsCountToDatabase()
	{
		$count = 10;

		$fabricator = new Fabricator(UserModel::class);

		// Some countries violate the 40 character limit so override that
		$fabricator->setOverrides(['country' => 'France']);

		$result = $fabricator->create($count);

		$this->seeNumRecords($count, 'user', []);
	}

	public function testHelperCreates()
	{
		helper('test');

		$result = fake(UserModel::class, ['country' => 'Italy']);

		$this->seeInDatabase('user', ['name' => $result->name]);
	}

	public function testCreateIncrementsCount()
	{
		$fabricator = new Fabricator(UserModel::class);
		$fabricator->setOverrides(['country' => 'China']);

		$count = Fabricator::getCount('user');

		$fabricator->create();

		$this->assertEquals($count + 1, Fabricator::getCount('user'));
	}

	public function testHelperIncrementsCount()
	{
		$count = Fabricator::getCount('user');

		fake(UserModel::class, ['country' => 'Italy']);

		$this->assertEquals($count + 1, Fabricator::getCount('user'));
	}

	public function testCreateThrowsOnFailure()
	{
		$this->expectException(FrameworkException::class);
		$this->expectExceptionMessage(lang('Fabricator.createFailed', ['job', 'Too short, man!']));

		fake(ValidModel::class, ['name' => 'eh']);
	}
}
