<?php

namespace Rubens\CoreBundle\Entity;

/**
 * Post
 */
class Post
{
    /**
    */
    private $categories;

    /**
    */
    private $images;
    /**
    */
    private $videos;

    /**
    * function _construct()
    */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var string
     */
    private $chapo;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var boolean
     */
    private $published;

    /**
     * @var \DateTime
     */
    private $publishedAt;

   /**
     * @var boolean
     */
    private $enabledVideo;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     * @return Post
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set chapo
     *
     * @param string $chapo
     * @return Post
     */
    public function setChapo($chapo)
    {
        $this->chapo = $chapo;

        return $this;
    }

    /**
     * Get chapo
     *
     * @return string
     */
    public function getChapo()
    {
        return $this->chapo;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();


        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Post
     */
    public function setUpdatedAt()
    {
        $this->updatedAt = new \DateTime();


        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Post
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     * @return Post
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set enabledVideo
     *
     * @param boolean $enabledVideo
     * @return Post
     */
    public function setEnabledVideo($enabledVideo)
    {
        $this->enabledVideo = $enabledVideo;

        return $this;
    }

    /**
     * Get enabledVideo
     *
     * @return boolean
     */
    public function getEnabledVideo()
    {
        return $this->enabledVideo;
    }

    /**
     * Add image
     *
     * @param \Rubens\CoreBundle\Entity\Image $image
     * @return Post
     */
    public function addImage(\Rubens\CoreBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Rubens\CoreBundle\Entity\Image $image
     */
    public function removeImage(\Rubens\CoreBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add categorie
     *
     * @param \Rubens\CoreBundle\Entity\Categorie $categorie
     * @return Post
     */
    public function addCategory(\Rubens\CoreBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \Rubens\CoreBundle\Entity\Categorie $categorie
     */
    public function removeCategory(\Rubens\CoreBundle\Entity\Categorie $categorie)
    {
        $this->categories->removeElement($categorie);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add videos
     *
     * @param \Rubens\CoreBundle\Entity\Video $videos
     * @return Post
     */
    public function addVideo(\Rubens\CoreBundle\Entity\Video $videos)
    {
        $this->videos[] = $videos;

        return $this;
    }

    /**
     * Remove videos
     *
     * @param \Rubens\CoreBundle\Entity\Video $videos
     */
    public function removeVideo(\Rubens\CoreBundle\Entity\Video $videos)
    {
        $this->videos->removeElement($videos);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }
}
