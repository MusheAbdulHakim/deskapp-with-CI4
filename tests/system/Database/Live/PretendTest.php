<?php namespace CodeIgniter\Database\Live;

use CodeIgniter\Database\Query;
use CodeIgniter\Test\CIDatabaseTestCase;

/**
 * @group DatabaseLive
 */
class PretendTest extends CIDatabaseTestCase
{
	public function tearDown(): void
	{
		// We share `$this->db` in testing, so we need to restore the state.
		$this->db->pretend(false);
	}

	public function testPretendReturnsQueryObject()
	{
		$result = $this->db->pretend(false)
						   ->table('user')
						   ->get();

		$this->assertFalse($result instanceof Query);

		$result = $this->db->pretend(true)
					->table('user')
					->get();

		$this->assertInstanceOf(Query::class, $result);
	}

	//--------------------------------------------------------------------

}
