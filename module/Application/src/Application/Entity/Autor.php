<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Autor
 *
 * @ORM\Table(name="autor")
 * @ORM\Entity
 */
class Autor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="autor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="autor_autor_id_seq", allocationSize=1, initialValue=1)
     * @JMS\Groups({"autor"})
     */
    private $autorId;

    /**
     * @var string
     * @JMS\Groups({"autor"})
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=64, nullable=false)
     * @JMS\Exclude
     */
    private $senha;

    /**
     * @var string
     * @JMS\Groups({"autor","livro"})
     * @ORM\Column(name="sobrenome", type="string", length=100, nullable=false)
     */
    private $sobrenome;

    /**
     * @var string
     * @JMS\Groups({"autor","livro"})
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Livro")
     * @ORM\JoinTable(name="autor_livro",
     * joinColumns={@ORM\JoinColumn(name="autor_id", referencedColumnName="autor_id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="livro_id", referencedColumnName="livro_id")}
     * )
     * 
     */
    private $livros;
    
 /**
     * @return the $autorId
     */
    public function getAutorId()
    {
        return $this->autorId;
    }

 /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

 /**
     * @return the $senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

 /**
     * @return the $sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

 /**
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

 /**
     * @param integer $autorId
     */
    public function setAutorId($autorId)
    {
        $this->autorId = $autorId;
    }

 /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

 /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

 /**
     * @param string $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

 /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function toArray()
    {
        return ['id'=>$this->getAutorId()];
    }

    
    


}

