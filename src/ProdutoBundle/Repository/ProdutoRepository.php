<?php

namespace ProdutoBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * ProdutoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProdutoRepository extends \Doctrine\ORM\EntityRepository
{
	private function getQueryBuilder()
	{
	    $em = $this->getEntityManager();

	    $queryBuilder = $em->getRepository('ProdutoBundle:Produto')
	    ->createQueryBuilder('p');

	    return $queryBuilder;
 	}

 	public function findAllInOrder()
	{
	    $qb = $this->getQueryBuilder()
	    ->orderBy('p.nome', 'desc');

	    return $qb->getQuery()->getResult();
	}
}
