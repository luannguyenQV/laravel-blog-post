<?php 
namespace App\Luannguyen\Article;

use App\Luannguyen\Interfaces\RepositoryAbstract;

/**
* 08.07.2016
* Author: Luan Nguyen
* ArticleRepository - Repository Pattern
*/
class ArticleRepository extends RepositoryAbstract {

	function model() {
		return 'App\Article';
	}
	
}