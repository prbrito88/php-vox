<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario26
 * Date: 12/05/2018
 * Time: 14:49
 */

namespace Domain\Model;


class Oportunidade
{

    /**
     * @var int
     */
    private $idOportunidade;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     */
    private $periodoInicial;

    /**
     * @var \DateTime
     */
    private $periodoFinal;

    /**
     * Oportunidade constructor.
     * @param string $descricao
     */
    public function __construct(
        $descricao,
        \DateTime $periodoInicial,
        \DateTime $periodoFinal
    ) {
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
    }

}