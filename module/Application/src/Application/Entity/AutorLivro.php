<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * AutorLivro
 *
 * @ORM\Table(name="autor_livro", indexes={@ORM\Index(name="IDX_4282BCBC14D45BBE", columns={"autor_id"}), @ORM\Index(name="IDX_4282BCBC5864C5AF", columns={"livro_id"})})
 * @ORM\Entity
 */
class AutorLivro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="autor_livro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Autor
     *
     * @ORM\ManyToOne(targetEntity="Autor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="autor_id", referencedColumnName="autor_id")
     * })
     */
    private $autor;

    /**
     * @var Livro
     *
     * @ORM\ManyToOne(targetEntity="Livro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="livro_id", referencedColumnName="livro_id")
     * })
     */
    private $livro;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

 /**
     * @return the $livro
     */
    public function getLivro()
    {
        return $this->livro;
    }

 /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param Autor $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

 /**
     * @param Livro $livro
     */
    public function setLivro($livro)
    {
        $this->livro = $livro;
    }


    

}

