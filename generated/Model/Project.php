<?php

namespace JoliCode\Forecast\Api\Model;

class Project
{
    /**
     * 
     *
     * @var bool
     */
    protected $archived;
    /**
     * 
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * 
     *
     * @var string|null
     */
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $color;
    /**
     * 
     *
     * @var string|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $harvestId;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * literature
     *
     * @var string|null
     */
    protected $notes;
    /**
     * 
     *
     * @var string|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string[]
     */
    protected $tags;
    /**
     * date when the Project was last updated
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this Project
     *
     * @var int|null
     */
    protected $updatedById;
    /**
     * 
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getClientId() : ?int
    {
        return $this->clientId;
    }
    /**
     * 
     *
     * @param int|null $clientId
     *
     * @return self
     */
    public function setClientId(?int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHarvestId() : ?int
    {
        return $this->harvestId;
    }
    /**
     * 
     *
     * @param int|null $harvestId
     *
     * @return self
     */
    public function setHarvestId(?int $harvestId) : self
    {
        $this->harvestId = $harvestId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * literature
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * literature
     *
     * @param string|null $notes
     *
     * @return self
     */
    public function setNotes(?string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param string[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
    /**
     * date when the Project was last updated
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * date when the Project was last updated
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * id of the user who last updated this Project
     *
     * @return int|null
     */
    public function getUpdatedById() : ?int
    {
        return $this->updatedById;
    }
    /**
     * id of the user who last updated this Project
     *
     * @param int|null $updatedById
     *
     * @return self
     */
    public function setUpdatedById(?int $updatedById) : self
    {
        $this->updatedById = $updatedById;
        return $this;
    }
}