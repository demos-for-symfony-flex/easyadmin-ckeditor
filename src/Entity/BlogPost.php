<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogPost
 *
 * @ORM\Table(name="blog_post")
 * @ORM\Entity(repositoryClass="App\Repository\BlogPostRepository")
 * @ORM\HasLifecycleCallbacks
 */
class BlogPost
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    public $title;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    public $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000)
     */
    public $description;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    public $body;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    public $author;

    /*
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetimetz")
     */
    // public $createdAt;

    /*
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    // public $updatedAt;
    // An exception has been thrown during the rendering of a template ("Catchable Fatal Error: Object of class DateTime could not be converted to string").

    /*
     * @ORM\PrePersist
    public function prePersist()
    {
        if (!$this->createdAt) {
            $this->createdAt = new \DateTime();
        }

        if (!$this->updatedAt) {
            $this->updatedAt = new \DateTime();
        }
    }
     */

    /*
     * @ORM\PreUpdate
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
     */
}
