<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CertificateAuthorityService.CreateCertificate][google.cloud.security.privateca.v1.CertificateAuthorityService.CreateCertificate].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CreateCertificateRequest</code>
 */
class CreateCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [CaPool][google.cloud.security.privateca.v1.CaPool] associated with the [Certificate][google.cloud.security.privateca.v1.Certificate],
     * in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`. This field is required when using a
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] in the Enterprise [CertificateAuthority.Tier][],
     * but is optional and its value is ignored otherwise.
     *
     * Generated from protobuf field <code>string certificate_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $certificate_id = '';
    /**
     * Required. A [Certificate][google.cloud.security.privateca.v1.Certificate] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Certificate certificate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $certificate = null;
    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If this is true, no [Certificate][google.cloud.security.privateca.v1.Certificate] resource will be persisted regardless
     * of the [CaPool][google.cloud.security.privateca.v1.CaPool]'s [tier][google.cloud.security.privateca.v1.CaPool.tier], and the returned [Certificate][google.cloud.security.privateca.v1.Certificate]
     * will not contain the [pem_certificate][google.cloud.security.privateca.v1.Certificate.pem_certificate] field.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;
    /**
     * Optional. The resource ID of the [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that should issue the
     * certificate.  This optional field will ignore the load-balancing scheme of
     * the Pool and directly issue the certificate from the CA with the specified
     * ID, contained in the same [CaPool][google.cloud.security.privateca.v1.CaPool] referenced by `parent`. Per-CA quota
     * rules apply. If left empty, a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] will be chosen from
     * the [CaPool][google.cloud.security.privateca.v1.CaPool] by the service. For example, to issue a [Certificate][google.cloud.security.privateca.v1.Certificate] from
     * a Certificate Authority with resource name
     * "projects/my-project/locations/us-central1/caPools/my-pool/certificateAuthorities/my-ca",
     * you can set the [parent][google.cloud.security.privateca.v1.CreateCertificateRequest.parent] to
     * "projects/my-project/locations/us-central1/caPools/my-pool" and the
     * [issuing_certificate_authority_id][google.cloud.security.privateca.v1.CreateCertificateRequest.issuing_certificate_authority_id] to "my-ca".
     *
     * Generated from protobuf field <code>string issuing_certificate_authority_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $issuing_certificate_authority_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the [CaPool][google.cloud.security.privateca.v1.CaPool] associated with the [Certificate][google.cloud.security.privateca.v1.Certificate],
     *           in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *     @type string $certificate_id
     *           Optional. It must be unique within a location and match the regular
     *           expression `[a-zA-Z0-9_-]{1,63}`. This field is required when using a
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] in the Enterprise [CertificateAuthority.Tier][],
     *           but is optional and its value is ignored otherwise.
     *     @type \Google\Cloud\Security\PrivateCA\V1\Certificate $certificate
     *           Required. A [Certificate][google.cloud.security.privateca.v1.Certificate] with initial field values.
     *     @type string $request_id
     *           Optional. An ID to identify requests. Specify a unique request ID so that if you must
     *           retry your request, the server will know to ignore the request if it has
     *           already been completed. The server will guarantee that for at least 60
     *           minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If this is true, no [Certificate][google.cloud.security.privateca.v1.Certificate] resource will be persisted regardless
     *           of the [CaPool][google.cloud.security.privateca.v1.CaPool]'s [tier][google.cloud.security.privateca.v1.CaPool.tier], and the returned [Certificate][google.cloud.security.privateca.v1.Certificate]
     *           will not contain the [pem_certificate][google.cloud.security.privateca.v1.Certificate.pem_certificate] field.
     *     @type string $issuing_certificate_authority_id
     *           Optional. The resource ID of the [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that should issue the
     *           certificate.  This optional field will ignore the load-balancing scheme of
     *           the Pool and directly issue the certificate from the CA with the specified
     *           ID, contained in the same [CaPool][google.cloud.security.privateca.v1.CaPool] referenced by `parent`. Per-CA quota
     *           rules apply. If left empty, a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] will be chosen from
     *           the [CaPool][google.cloud.security.privateca.v1.CaPool] by the service. For example, to issue a [Certificate][google.cloud.security.privateca.v1.Certificate] from
     *           a Certificate Authority with resource name
     *           "projects/my-project/locations/us-central1/caPools/my-pool/certificateAuthorities/my-ca",
     *           you can set the [parent][google.cloud.security.privateca.v1.CreateCertificateRequest.parent] to
     *           "projects/my-project/locations/us-central1/caPools/my-pool" and the
     *           [issuing_certificate_authority_id][google.cloud.security.privateca.v1.CreateCertificateRequest.issuing_certificate_authority_id] to "my-ca".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [CaPool][google.cloud.security.privateca.v1.CaPool] associated with the [Certificate][google.cloud.security.privateca.v1.Certificate],
     * in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the [CaPool][google.cloud.security.privateca.v1.CaPool] associated with the [Certificate][google.cloud.security.privateca.v1.Certificate],
     * in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`. This field is required when using a
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] in the Enterprise [CertificateAuthority.Tier][],
     * but is optional and its value is ignored otherwise.
     *
     * Generated from protobuf field <code>string certificate_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCertificateId()
    {
        return $this->certificate_id;
    }

    /**
     * Optional. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`. This field is required when using a
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] in the Enterprise [CertificateAuthority.Tier][],
     * but is optional and its value is ignored otherwise.
     *
     * Generated from protobuf field <code>string certificate_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate_id = $var;

        return $this;
    }

    /**
     * Required. A [Certificate][google.cloud.security.privateca.v1.Certificate] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Certificate certificate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\Certificate|null
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    public function hasCertificate()
    {
        return isset($this->certificate);
    }

    public function clearCertificate()
    {
        unset($this->certificate);
    }

    /**
     * Required. A [Certificate][google.cloud.security.privateca.v1.Certificate] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Certificate certificate = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\Certificate $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\Certificate::class);
        $this->certificate = $var;

        return $this;
    }

    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If this is true, no [Certificate][google.cloud.security.privateca.v1.Certificate] resource will be persisted regardless
     * of the [CaPool][google.cloud.security.privateca.v1.CaPool]'s [tier][google.cloud.security.privateca.v1.CaPool.tier], and the returned [Certificate][google.cloud.security.privateca.v1.Certificate]
     * will not contain the [pem_certificate][google.cloud.security.privateca.v1.Certificate.pem_certificate] field.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If this is true, no [Certificate][google.cloud.security.privateca.v1.Certificate] resource will be persisted regardless
     * of the [CaPool][google.cloud.security.privateca.v1.CaPool]'s [tier][google.cloud.security.privateca.v1.CaPool.tier], and the returned [Certificate][google.cloud.security.privateca.v1.Certificate]
     * will not contain the [pem_certificate][google.cloud.security.privateca.v1.Certificate.pem_certificate] field.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. The resource ID of the [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that should issue the
     * certificate.  This optional field will ignore the load-balancing scheme of
     * the Pool and directly issue the certificate from the CA with the specified
     * ID, contained in the same [CaPool][google.cloud.security.privateca.v1.CaPool] referenced by `parent`. Per-CA quota
     * rules apply. If left empty, a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] will be chosen from
     * the [CaPool][google.cloud.security.privateca.v1.CaPool] by the service. For example, to issue a [Certificate][google.cloud.security.privateca.v1.Certificate] from
     * a Certificate Authority with resource name
     * "projects/my-project/locations/us-central1/caPools/my-pool/certificateAuthorities/my-ca",
     * you can set the [parent][google.cloud.security.privateca.v1.CreateCertificateRequest.parent] to
     * "projects/my-project/locations/us-central1/caPools/my-pool" and the
     * [issuing_certificate_authority_id][google.cloud.security.privateca.v1.CreateCertificateRequest.issuing_certificate_authority_id] to "my-ca".
     *
     * Generated from protobuf field <code>string issuing_certificate_authority_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getIssuingCertificateAuthorityId()
    {
        return $this->issuing_certificate_authority_id;
    }

    /**
     * Optional. The resource ID of the [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that should issue the
     * certificate.  This optional field will ignore the load-balancing scheme of
     * the Pool and directly issue the certificate from the CA with the specified
     * ID, contained in the same [CaPool][google.cloud.security.privateca.v1.CaPool] referenced by `parent`. Per-CA quota
     * rules apply. If left empty, a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] will be chosen from
     * the [CaPool][google.cloud.security.privateca.v1.CaPool] by the service. For example, to issue a [Certificate][google.cloud.security.privateca.v1.Certificate] from
     * a Certificate Authority with resource name
     * "projects/my-project/locations/us-central1/caPools/my-pool/certificateAuthorities/my-ca",
     * you can set the [parent][google.cloud.security.privateca.v1.CreateCertificateRequest.parent] to
     * "projects/my-project/locations/us-central1/caPools/my-pool" and the
     * [issuing_certificate_authority_id][google.cloud.security.privateca.v1.CreateCertificateRequest.issuing_certificate_authority_id] to "my-ca".
     *
     * Generated from protobuf field <code>string issuing_certificate_authority_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setIssuingCertificateAuthorityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuing_certificate_authority_id = $var;

        return $this;
    }

}
