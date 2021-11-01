<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create asset feed request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.CreateFeedRequest</code>
 */
class CreateFeedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project/folder/organization where this feed
     * should be created in. It can only be an organization number (such as
     * "organizations/123"), a folder number (such as "folders/123"), a project ID
     * (such as "projects/my-project-id")", or a project number (such as
     * "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. This is the client-assigned asset feed identifier and it needs to
     * be unique under a specific parent project/folder/organization.
     *
     * Generated from protobuf field <code>string feed_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feed_id = '';
    /**
     * Required. The feed details. The field `name` must be empty and it will be generated
     * in the format of:
     * projects/project_number/feeds/feed_id
     * folders/folder_number/feeds/feed_id
     * organizations/organization_number/feeds/feed_id
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.Feed feed = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feed = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project/folder/organization where this feed
     *           should be created in. It can only be an organization number (such as
     *           "organizations/123"), a folder number (such as "folders/123"), a project ID
     *           (such as "projects/my-project-id")", or a project number (such as
     *           "projects/12345").
     *     @type string $feed_id
     *           Required. This is the client-assigned asset feed identifier and it needs to
     *           be unique under a specific parent project/folder/organization.
     *     @type \Google\Cloud\Asset\V1\Feed $feed
     *           Required. The feed details. The field `name` must be empty and it will be generated
     *           in the format of:
     *           projects/project_number/feeds/feed_id
     *           folders/folder_number/feeds/feed_id
     *           organizations/organization_number/feeds/feed_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project/folder/organization where this feed
     * should be created in. It can only be an organization number (such as
     * "organizations/123"), a folder number (such as "folders/123"), a project ID
     * (such as "projects/my-project-id")", or a project number (such as
     * "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project/folder/organization where this feed
     * should be created in. It can only be an organization number (such as
     * "organizations/123"), a folder number (such as "folders/123"), a project ID
     * (such as "projects/my-project-id")", or a project number (such as
     * "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. This is the client-assigned asset feed identifier and it needs to
     * be unique under a specific parent project/folder/organization.
     *
     * Generated from protobuf field <code>string feed_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFeedId()
    {
        return $this->feed_id;
    }

    /**
     * Required. This is the client-assigned asset feed identifier and it needs to
     * be unique under a specific parent project/folder/organization.
     *
     * Generated from protobuf field <code>string feed_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFeedId($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed_id = $var;

        return $this;
    }

    /**
     * Required. The feed details. The field `name` must be empty and it will be generated
     * in the format of:
     * projects/project_number/feeds/feed_id
     * folders/folder_number/feeds/feed_id
     * organizations/organization_number/feeds/feed_id
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.Feed feed = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1\Feed|null
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : null;
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Required. The feed details. The field `name` must be empty and it will be generated
     * in the format of:
     * projects/project_number/feeds/feed_id
     * folders/folder_number/feeds/feed_id
     * organizations/organization_number/feeds/feed_id
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.Feed feed = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1\Feed $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\Feed::class);
        $this->feed = $var;

        return $this;
    }

}
