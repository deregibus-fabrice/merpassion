<?php

namespace App\Repositories;

use App\Rent;

class RentRepository
{

    protected $rent;

    public function __construct(Rent $rent)
	{
		$this->rent = $rent;
	}

	private function save(Rent $rent, Array $inputs)
	{
		$rent->name = $inputs['name'];

		$rent->save();
	}

	public function getPaginate($n)
	{
		return $this->rent->paginate($n);
	}

	public function store(Array $inputs)
	{
		$rent = new $this->rent;		

		$this->save($rent, $inputs);

		return $rent;
	}

	public function getById($id)
	{
		return $this->rent->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}