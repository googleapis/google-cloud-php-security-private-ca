<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateAuthority;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User-defined URLs for accessing content published by this
 * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateAuthority.UserDefinedAccessUrls</code>
 */
class UserDefinedAccessUrls extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of URLs where the issuer CA certificate may be
     * downloaded, which appears in the "Authority Information Access" extension
     * in the certificate. If specified, the default [Cloud Storage
     * URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.ca_certificate_access_url]
     * will be omitted.
     *
     * Generated from protobuf field <code>repeated string aia_issuing_certificate_urls = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $aia_issuing_certificate_urls;
    /**
     * Optional. A list of URLs where to obtain CRL information, i.e.
     * the DistributionPoint.fullName described by
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.13.
     * If specified, the default
     * [Cloud Storage
     * URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.crl_access_urls]
     * will be omitted.
     *
     * Generated from protobuf field <code>repeated string crl_access_urls = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $crl_access_urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $aia_issuing_certificate_urls
     *           Optional. A list of URLs where the issuer CA certificate may be
     *           downloaded, which appears in the "Authority Information Access" extension
     *           in the certificate. If specified, the default [Cloud Storage
     *           URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.ca_certificate_access_url]
     *           will be omitted.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $crl_access_urls
     *           Optional. A list of URLs where to obtain CRL information, i.e.
     *           the DistributionPoint.fullName described by
     *           https://tools.ietf.org/html/rfc5280#section-4.2.1.13.
     *           If specified, the default
     *           [Cloud Storage
     *           URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.crl_access_urls]
     *           will be omitted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of URLs where the issuer CA certificate may be
     * downloaded, which appears in the "Authority Information Access" extension
     * in the certificate. If specified, the default [Cloud Storage
     * URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.ca_certificate_access_url]
     * will be omitted.
     *
     * Generated from protobuf field <code>repeated string aia_issuing_certificate_urls = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAiaIssuingCertificateUrls()
    {
        return $this->aia_issuing_certificate_urls;
    }

    /**
     * Optional. A list of URLs where the issuer CA certificate may be
     * downloaded, which appears in the "Authority Information Access" extension
     * in the certificate. If specified, the default [Cloud Storage
     * URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.ca_certificate_access_url]
     * will be omitted.
     *
     * Generated from protobuf field <code>repeated string aia_issuing_certificate_urls = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAiaIssuingCertificateUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->aia_issuing_certificate_urls = $arr;

        return $this;
    }

    /**
     * Optional. A list of URLs where to obtain CRL information, i.e.
     * the DistributionPoint.fullName described by
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.13.
     * If specified, the default
     * [Cloud Storage
     * URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.crl_access_urls]
     * will be omitted.
     *
     * Generated from protobuf field <code>repeated string crl_access_urls = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCrlAccessUrls()
    {
        return $this->crl_access_urls;
    }

    /**
     * Optional. A list of URLs where to obtain CRL information, i.e.
     * the DistributionPoint.fullName described by
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.13.
     * If specified, the default
     * [Cloud Storage
     * URLs][google.cloud.security.privateca.v1.CertificateAuthority.AccessUrls.crl_access_urls]
     * will be omitted.
     *
     * Generated from protobuf field <code>repeated string crl_access_urls = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCrlAccessUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->crl_access_urls = $arr;

        return $this;
    }

}


