<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Biblioteca
 *
 * @ORM\Table(name="biblioteca")
 * @ORM\Entity
 */
class Biblioteca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="biblioteca_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="biblioteca_biblioteca_id_seq", allocationSize=1, initialValue=1)
     */
    private $bibliotecaId;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="cep", type="integer", nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=255, nullable=false)
     */
    private $endereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_endereco", type="integer", nullable=true)
     */
    private $numeroEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=255, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=255, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=false)
     */
    private $estado;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="Livro",mappedBy="biblioteca")     
     *  
     */    
    private $livros;
 /**
     * @return the $bibliotecaId
     */
    public function getBibliotecaId()
    {
        return $this->bibliotecaId;
    }

 /**
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }
    
    /**
     * @JMS\VirtualProperty
     * @JMS\SerializedName("totalLivros")
     */
    public function getTotalLivros()
    {
        return count($this->getLivros());
    }

 /**
     * @return the $cep
     */
    public function getCep()
    {
        return $this->cep;
    }

 /**
     * @return the $endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

 /**
     * @return the $numeroEndereco
     */
    public function getNumeroEndereco()
    {
        return $this->numeroEndereco;
    }

 /**
     * @return the $bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

 /**
     * @return the $cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

 /**
     * @return the $estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

 /**
     * @return the $livros
     */
    public function getLivros()
    {
        return $this->livros;
    }

 /**
     * @param integer $bibliotecaId
     */
    public function setBibliotecaId($bibliotecaId)
    {
        $this->bibliotecaId = $bibliotecaId;
    }

 /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

 /**
     * @param integer $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

 /**
     * @param string $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

 /**
     * @param integer $numeroEndereco
     */
    public function setNumeroEndereco($numeroEndereco)
    {
        $this->numeroEndereco = $numeroEndereco;
    }

 /**
     * @param string $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

 /**
     * @param string $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

 /**
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

 /**
     * @param field_type $livros
     */
    public function setLivros($livros)
    {
        $this->livros = $livros;
    }

    
    


}

