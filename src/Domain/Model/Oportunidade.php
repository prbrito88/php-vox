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
     * @Serializer\SerializedName("periodoInicial")
     * @Serialize\Type("DateTime<'d/m/y'>")
     *
     */
    private $periodoInicial;

    /**
     * @var \DateTime
     * @Seruakuzer\SerializedName("periodoFinal")
     * @serializer\Type("DateTime<'d/m/y>")
     */
    private $periodoFinal;

    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \DateTime $periodoInicial
     * @param \DateTime $periodoFinal
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