<?php

namespace JoliCode\Forecast\Api\Model;

class Client
{
    /**
     * Is this client archived?
     *
     * @var bool|null
     */
    protected $archived;
    /**
     * id of this client in Harvest
     *
     * @var int|null
     */
    protected $harvestId;
    /**
     * id of this client
     *
     * @var int|null
     */
    protected $id;
    /**
     * Name of the client
     *
     * @var string|null
     */
    protected $name;
    /**
     * date when the client was last updated
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this client
     *
     * @var int|null
     */
    protected $updatedById;
    /**
     * Is this client archived?
     *
     * @return bool|null
     */
    public function getArchived() : ?bool
    {
        return $this->archived;
    }
    /**
     * Is this client archived?
     *
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * id of this client in Harvest
     *
     * @return int|null
     */
    public function getHarvestId() : ?int
    {
        return $this->harvestId;
    }
    /**
     * id of this client in Harvest
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
     * id of this client
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * id of this client
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the client
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the client
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * date when the client was last updated
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * date when the client was last updated
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * id of the user who last updated this client
     *
     * @return int|null
     */
    public function getUpdatedById() : ?int
    {
        return $this->updatedById;
    }
    /**
     * id of the user who last updated this client
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