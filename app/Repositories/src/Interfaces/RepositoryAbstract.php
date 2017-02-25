<?php
namespace App\Luannguyen\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class RepositoryAbstract implements RepositoryInterface {

	private $app;

	private $model;

	public function __construct(App $app) {
		$this->app = $app;
		$this->makeModel();
	}

	abstract function model();

	public function all($columns = array('*')) {
		return $this->model->get($columns);
	}

	public function paginate($perPage = 15, $columns = array('*')) {
		return $this->model->paginate($perPage, $columns);
	}

	public function create(array $data) {
		return $this->model->create($data);
	}

	public function update(array $data, $id, $attribute = "id") {
		return $this->model->where($attribute, '=', $id)->update($data);
	}

	public function delete($id) {
		return $this->model->destroy($id);
	}

	public function find($id, $columns = array('*')) {
		return $this->model->find($id, $columns);
	}

	public function findBy($attribute, $value, $columns = array('*')) {
		return $this->model->where($attribute, '=', $value)->first($columns);
	}

	public function makeModel() {
		 $this->model = $this->app->make($this->model());
		if (!$this->model instanceof Model) {
			throw new Exception("Class '$this->model' must be instanceof Model", 1);
		}
		return $this->model;
	}

}