<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Livro
 *
 * @ORM\Table(name="livro", indexes={@ORM\Index(name="IDX_4CB6A6876A5EDAE9", columns={"biblioteca_id"})})
 * @ORM\Entity
 */
class Livro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="livro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="livro_livro_id_seq", allocationSize=1, initialValue=1)
     */
    private $livroId;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=100, nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitulo", type="string", length=255, nullable=true)
     */
    private $subtitulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="paginas", type="integer", nullable=false)
     */
    private $paginas;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="edicao", type="integer", nullable=true)
     */
    private $edicao;

    /**
     * @var string
     *
     * @ORM\Column(name="editora", type="string", length=255, nullable=false)
     */
    private $editora;

    /**
     * @var Biblioteca
     *
     * @ORM\ManyToOne(targetEntity="Biblioteca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="biblioteca_id", referencedColumnName="biblioteca_id")
     * })
     * 
     * @JMS\MaxDepth(1)
     */
    private $biblioteca;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Autor")
     * @ORM\JoinTable(name="autor_livro",
     * joinColumns={@ORM\JoinColumn(name="livro_id", referencedColumnName="livro_id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="autor_id", referencedColumnName="autor_id")}
     * )
     */
    private $autores;
 /**
     * @return the $livroId
     */
    public function getLivroId()
    {
        return $this->livroId;
    }

 /**
     * @return the $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

 /**
     * @return the $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

 /**
     * @return the $subtitulo
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

 /**
     * @return the $paginas
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

 /**
     * @return the $ano
     */
    public function getAno()
    {
        return $this->ano;
    }

 /**
     * @return the $edicao
     */
    public function getEdicao()
    {
        return $this->edicao;
    }

 /**
     * @return the $editora
     */
    public function getEditora()
    {
        return $this->editora;
    }

 /**
     * @return the $biblioteca
     */
    public function getBiblioteca()
    {
        return $this->biblioteca;
    }

 /**
     * @return the $autores
     */
    public function getAutores()
    {
        return $this->autores;
    }

 /**
     * @param integer $livroId
     */
    public function setLivroId($livroId)
    {
        $this->livroId = $livroId;
    }

 /**
     * @param string $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

 /**
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

 /**
     * @param string $subtitulo
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;
    }

 /**
     * @param integer $paginas
     */
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    }

 /**
     * @param integer $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

 /**
     * @param integer $edicao
     */
    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;
    }

 /**
     * @param string $editora
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

 /**
     * @param Biblioteca $biblioteca
     */
    public function setBiblioteca($biblioteca)
    {
        $this->biblioteca = $biblioteca;
    }

 /**
     * @param field_type $autores
     */
    public function setAutores($autores)
    {
        $this->autores = $autores;
    }
    
    public function toArray()
    {
        return ['id'=>$this->getLivroId(),'autores'=>$this->getAutores()];
    }

    
    


}

