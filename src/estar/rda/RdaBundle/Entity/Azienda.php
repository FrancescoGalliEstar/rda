<?php

namespace estar\rda\RdaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Azienda
 *
 * @ORM\Table(name="azienda")
 * @ORM\Entity
 */
class Azienda
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="idazienda", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idazienda;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Azienda
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get idazienda
     *
     * @return integer
     */
    public function getIdazienda()
    {
        return $this->idazienda;
    }
}
