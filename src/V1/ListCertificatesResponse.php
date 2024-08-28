<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [CertificateAuthorityService.ListCertificates][google.cloud.security.privateca.v1.CertificateAuthorityService.ListCertificates].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.ListCertificatesResponse</code>
 */
class ListCertificatesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of [Certificates][google.cloud.security.privateca.v1.Certificate].
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.Certificate certificates = 1;</code>
     */
    private $certificates;
    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCertificatesRequest.next_page_token][] to retrieve the
     * next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * A list of locations (e.g. "us-west1") that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Security\PrivateCA\V1\Certificate>|\Google\Protobuf\Internal\RepeatedField $certificates
     *           The list of [Certificates][google.cloud.security.privateca.v1.Certificate].
     *     @type string $next_page_token
     *           A token to retrieve next page of results. Pass this value in
     *           [ListCertificatesRequest.next_page_token][] to retrieve the
     *           next page of results.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           A list of locations (e.g. "us-west1") that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of [Certificates][google.cloud.security.privateca.v1.Certificate].
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.Certificate certificates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCertificates()
    {
        return $this->certificates;
    }

    /**
     * The list of [Certificates][google.cloud.security.privateca.v1.Certificate].
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.Certificate certificates = 1;</code>
     * @param array<\Google\Cloud\Security\PrivateCA\V1\Certificate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1\Certificate::class);
        $this->certificates = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCertificatesRequest.next_page_token][] to retrieve the
     * next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCertificatesRequest.next_page_token][] to retrieve the
     * next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * A list of locations (e.g. "us-west1") that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * A list of locations (e.g. "us-west1") that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

