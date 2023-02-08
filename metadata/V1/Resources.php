<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Security\Privateca\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
�_
2google/cloud/security/privateca/v1/resources.proto"google.cloud.security.privateca.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/type/expr.proto"�
CertificateAuthority
name (	B�AS
type (2=.google.cloud.security.privateca.v1.CertificateAuthority.TypeB�A�AM
config (25.google.cloud.security.privateca.v1.CertificateConfigB�A�A3
lifetime (2.google.protobuf.DurationB�A�Aa
key_spec (2G.google.cloud.security.privateca.v1.CertificateAuthority.KeyVersionSpecB�A�AV
subordinate_config (25.google.cloud.security.privateca.v1.SubordinateConfigB�AB
tier (2/.google.cloud.security.privateca.v1.CaPool.TierB�AR
state (2>.google.cloud.security.privateca.v1.CertificateAuthority.StateB�A 
pem_ca_certificates	 (	B�Ad
ca_certificate_descriptions
 (2:.google.cloud.security.privateca.v1.CertificateDescriptionB�A

gcs_bucket (	B�A]
access_urls (2C.google.cloud.security.privateca.v1.CertificateAuthority.AccessUrlsB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�AY
labels (2D.google.cloud.security.privateca.v1.CertificateAuthority.LabelsEntryB�AH

AccessUrls!
ca_certificate_access_url (	
crl_access_urls (	�
KeyVersionSpec
cloud_kms_key_version (	H _
	algorithm (2J.google.cloud.security.privateca.v1.CertificateAuthority.SignHashAlgorithmH B

KeyVersion-
LabelsEntry
key (	
value (	:8">
Type
TYPE_UNSPECIFIED 
SELF_SIGNED
SUBORDINATE"p
State
STATE_UNSPECIFIED 
ENABLED
DISABLED

STAGED
AWAITING_USER_ACTIVATION
DELETED"�
SignHashAlgorithm#
SIGN_HASH_ALGORITHM_UNSPECIFIED 
RSA_PSS_2048_SHA256
RSA_PSS_3072_SHA256
RSA_PSS_4096_SHA256
RSA_PKCS1_2048_SHA256
RSA_PKCS1_3072_SHA256
RSA_PKCS1_4096_SHA256
EC_P256_SHA256
EC_P384_SHA384:��A�
-privateca.googleapis.com/CertificateAuthorityhprojects/{project}/locations/{location}/caPools/{ca_pool}/certificateAuthorities/{certificate_authority}"�
CaPool
name (	B�AE
tier (2/.google.cloud.security.privateca.v1.CaPool.TierB�A�AW
issuance_policy (29.google.cloud.security.privateca.v1.CaPool.IssuancePolicyB�A]
publishing_options (2<.google.cloud.security.privateca.v1.CaPool.PublishingOptionsB�AK
labels (26.google.cloud.security.privateca.v1.CaPool.LabelsEntryB�AK
PublishingOptions
publish_ca_cert (B�A
publish_crl (B�A�	
IssuancePolicyh
allowed_key_types (2H.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyTypeB�A8
maximum_lifetime (2.google.protobuf.DurationB�Al
allowed_issuance_modes (2G.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.IssuanceModesB�AP
baseline_values (22.google.cloud.security.privateca.v1.X509ParametersB�Ae
identity_constraints (2B.google.cloud.security.privateca.v1.CertificateIdentityConstraintsB�Ah
passthrough_extensions (2C.google.cloud.security.privateca.v1.CertificateExtensionConstraintsB�A�
AllowedKeyTypeb
rsa (2S.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.RsaKeyTypeH l
elliptic_curve (2R.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.EcKeyTypeH J

RsaKeyType
min_modulus_size (B�A
max_modulus_size (B�A�
	EcKeyType�
signature_algorithm (2g.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.EcKeyType.EcSignatureAlgorithmB�A"o
EcSignatureAlgorithm&
"EC_SIGNATURE_ALGORITHM_UNSPECIFIED 

ECDSA_P256

ECDSA_P384
EDDSA_25519B

key_type`
IssuanceModes%
allow_csr_based_issuance (B�A(
allow_config_based_issuance (B�A-
LabelsEntry
key (	
value (	:8"8
Tier
TIER_UNSPECIFIED 

ENTERPRISE

DEVOPS:_�A\\
privateca.googleapis.com/CaPool9projects/{project}/locations/{location}/caPools/{ca_pool}"�
CertificateRevocationList
name (	B�A
sequence_number (B�As
revoked_certificates (2P.google.cloud.security.privateca.v1.CertificateRevocationList.RevokedCertificateB�A
pem_crl (	B�A

access_url (	B�AW
state (2C.google.cloud.security.privateca.v1.CertificateRevocationList.StateB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
revision_id	 (	B�A^
labels
 (2I.google.cloud.security.privateca.v1.CertificateRevocationList.LabelsEntryB�A�
RevokedCertificate>
certificate (	B)�A&
$privateca.googleapis.com/Certificate
hex_serial_number (	O
revocation_reason (24.google.cloud.security.privateca.v1.RevocationReason-
LabelsEntry
key (	
value (	:8":
State
STATE_UNSPECIFIED 

ACTIVE

SUPERSEDED:��A�
2privateca.googleapis.com/CertificateRevocationList�projects/{project}/locations/{location}/caPools/{ca_pool}/certificateAuthorities/{certificate_authority}/certificateRevocationLists/{certificate_revocation_list}"�

Certificate:
name (	B,�A�A&
$privateca.googleapis.com/Certificate
pem_csr (	B�AH L
config (25.google.cloud.security.privateca.v1.CertificateConfigB�AH [
issuer_certificate_authority (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority3
lifetime (2.google.protobuf.DurationB�A�AR
certificate_template (	B4�A�A.
,privateca.googleapis.com/CertificateTemplateQ
subject_mode (26.google.cloud.security.privateca.v1.SubjectRequestModeB�Ab
revocation_details (2A.google.cloud.security.privateca.v1.Certificate.RevocationDetailsB�A
pem_certificate	 (	B�A`
certificate_description
 (2:.google.cloud.security.privateca.v1.CertificateDescriptionB�A"
pem_certificate_chain (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AP
labels (2;.google.cloud.security.privateca.v1.Certificate.LabelsEntryB�A�
RevocationDetailsN
revocation_state (24.google.cloud.security.privateca.v1.RevocationReason3
revocation_time (2.google.protobuf.Timestamp-
LabelsEntry
key (	
value (	:8:�A|
$privateca.googleapis.com/CertificateTprojects/{project}/locations/{location}/caPools/{ca_pool}/certificates/{certificate}B
certificate_config"�
CertificateTemplateB
name (	B4�A�A.
,privateca.googleapis.com/CertificateTemplateR
predefined_values (22.google.cloud.security.privateca.v1.X509ParametersB�Ae
identity_constraints (2B.google.cloud.security.privateca.v1.CertificateIdentityConstraintsB�Ah
passthrough_extensions (2C.google.cloud.security.privateca.v1.CertificateExtensionConstraintsB�A
description (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AX
labels (2C.google.cloud.security.privateca.v1.CertificateTemplate.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8:��A�
,privateca.googleapis.com/CertificateTemplateSprojects/{project}/locations/{location}/certificateTemplates/{certificate_template}"�
X509ParametersD
	key_usage (2,.google.cloud.security.privateca.v1.KeyUsageB�AU

ca_options (2<.google.cloud.security.privateca.v1.X509Parameters.CaOptionsB�AE

policy_ids (2,.google.cloud.security.privateca.v1.ObjectIdB�A
aia_ocsp_servers (	B�AU
additional_extensions (21.google.cloud.security.privateca.v1.X509ExtensionB�As
	CaOptions
is_ca (B�AH �(
max_issuer_path_length (B�AH�B
_is_caB
_max_issuer_path_length"�
SubordinateConfigV
certificate_authority (	B5�A�A/
-privateca.googleapis.com/CertificateAuthorityH m
pem_issuer_chain (2L.google.cloud.security.privateca.v1.SubordinateConfig.SubordinateConfigChainB�AH 7
SubordinateConfigChain
pem_certificates (	B�AB
subordinate_config"�
	PublicKey
key (B�AL
format (27.google.cloud.security.privateca.v1.PublicKey.KeyFormatB�A"0
	KeyFormat
KEY_FORMAT_UNSPECIFIED 
PEM"�
CertificateConfig`
subject_config (2C.google.cloud.security.privateca.v1.CertificateConfig.SubjectConfigB�AL
x509_config (22.google.cloud.security.privateca.v1.X509ParametersB�AF

public_key (2-.google.cloud.security.privateca.v1.PublicKeyB�A�
SubjectConfigA
subject (2+.google.cloud.security.privateca.v1.SubjectB�AR
subject_alt_name (23.google.cloud.security.privateca.v1.SubjectAltNamesB�A"�
CertificateDescriptionj
subject_description (2M.google.cloud.security.privateca.v1.CertificateDescription.SubjectDescriptionL
x509_description (22.google.cloud.security.privateca.v1.X509ParametersA

public_key (2-.google.cloud.security.privateca.v1.PublicKeyX
subject_key_id (2@.google.cloud.security.privateca.v1.CertificateDescription.KeyIdZ
authority_key_id (2@.google.cloud.security.privateca.v1.CertificateDescription.KeyId
crl_distribution_points (	$
aia_issuing_certificate_urls (	k
cert_fingerprint (2Q.google.cloud.security.privateca.v1.CertificateDescription.CertificateFingerprint�
SubjectDescription<
subject (2+.google.cloud.security.privateca.v1.SubjectM
subject_alt_name (23.google.cloud.security.privateca.v1.SubjectAltNames
hex_serial_number (	+
lifetime (2.google.protobuf.Duration3
not_before_time (2.google.protobuf.Timestamp2
not_after_time (2.google.protobuf.Timestamp
KeyId
key_id (	B�A-
CertificateFingerprint
sha256_hash (	"\'
ObjectId
object_id_path (B�A"�
X509ExtensionD
	object_id (2,.google.cloud.security.privateca.v1.ObjectIdB�A
critical (B�A
value (B�A"�
KeyUsageT
base_key_usage (2<.google.cloud.security.privateca.v1.KeyUsage.KeyUsageOptions`
extended_key_usage (2D.google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptionsQ
unknown_extended_key_usages (2,.google.cloud.security.privateca.v1.ObjectId�
KeyUsageOptions
digital_signature (
content_commitment (
key_encipherment (
data_encipherment (
key_agreement (
	cert_sign (
crl_sign (
encipher_only (
decipher_only	 (�
ExtendedKeyUsageOptions
server_auth (
client_auth (
code_signing (
email_protection (
time_stamping (
ocsp_signing ("�
Subject
common_name (	
country_code (	
organization (	
organizational_unit (	
locality (	
province (	
street_address (	
postal_code (	"�
SubjectAltNames
	dns_names (	
uris (	
email_addresses (	
ip_addresses (	F
custom_sans (21.google.cloud.security.privateca.v1.X509Extension"�
CertificateIdentityConstraints.
cel_expression (2.google.type.ExprB�A+
allow_subject_passthrough (B�AH �5
#allow_subject_alt_names_passthrough (B�AH�B
_allow_subject_passthroughB&
$_allow_subject_alt_names_passthrough"�
CertificateExtensionConstraints|
known_extensions (2].google.cloud.security.privateca.v1.CertificateExtensionConstraints.KnownCertificateExtensionB�AP
additional_extensions (2,.google.cloud.security.privateca.v1.ObjectIdB�A"�
KnownCertificateExtension+
\'KNOWN_CERTIFICATE_EXTENSION_UNSPECIFIED 
BASE_KEY_USAGE
EXTENDED_KEY_USAGE

CA_OPTIONS

POLICY_IDS
AIA_OCSP_SERVERS*�
RevocationReason!
REVOCATION_REASON_UNSPECIFIED 
KEY_COMPROMISE$
 CERTIFICATE_AUTHORITY_COMPROMISE
AFFILIATION_CHANGED

SUPERSEDED
CESSATION_OF_OPERATION
CERTIFICATE_HOLD
PRIVILEGE_WITHDRAWN"
ATTRIBUTE_AUTHORITY_COMPROMISE*]
SubjectRequestMode$
 SUBJECT_REQUEST_MODE_UNSPECIFIED 
DEFAULT
REFLECTED_SPIFFEB�
&com.google.cloud.security.privateca.v1BPrivateCaResourcesProtoPZDcloud.google.com/go/security/privateca/apiv1/privatecapb;privatecapb��"Google.Cloud.Security.PrivateCA.V1�"Google\\Cloud\\Security\\PrivateCA\\V1�&Google::Cloud::Security::PrivateCA::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

