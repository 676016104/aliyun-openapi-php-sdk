<?php

namespace Mts\Request\V20140618;

/**
 * Request of UpdateMediaWorkflowTriggerMode
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMediaWorkflowId()
 * @method string getOwnerId()
 * @method string getTriggerMode()
 */
class UpdateMediaWorkflowTriggerModeRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Mts',
            '2014-06-18',
            'UpdateMediaWorkflowTriggerMode',
            'Mts'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $mediaWorkflowId
     *
     * @return $this
     */
    public function setMediaWorkflowId($mediaWorkflowId)
    {
        $this->requestParameters['MediaWorkflowId'] = $mediaWorkflowId;
        $this->queryParameters['MediaWorkflowId'] = $mediaWorkflowId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $triggerMode
     *
     * @return $this
     */
    public function setTriggerMode($triggerMode)
    {
        $this->requestParameters['TriggerMode'] = $triggerMode;
        $this->queryParameters['TriggerMode'] = $triggerMode;

        return $this;
    }
}
