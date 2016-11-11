<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['https://openidp.feide.no'] = array(
	'name' => array(
		'en' => 'Feide OpenIdP - guest users',
		'no' => 'Feide Gjestebrukere',
	),
	'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',

	'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
	'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
	'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
);

$metadata['https://idp.testshib.org/idp/shibboleth'] = array (
  'entityid' => 'https://idp.testshib.org/idp/shibboleth',
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' => 'https://idp.testshib.org/idp/profile/Shibboleth/SSO',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://idp.testshib.org/idp/profile/SAML2/POST/SSO',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.testshib.org/idp/profile/SAML2/Redirect/SSO',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://idp.testshib.org/idp/profile/SAML2/SOAP/ECP',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' => 'https://idp.testshib.org:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://idp.testshib.org:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' => 2,
    ),
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIEpQIBAAKCAQEA9EvbQiIcl3cLty4hwf+X7Q5bj/9MTzJPfAWHSxZeYQZJj1+G
xkGGp5tHhBvgha3BB3DU88aFJW9BwegxBZ3OcyHddCswkuYfK2EfXx1bMn6jyZ+v
W5/dC8oOM6p2faxCS3rSuJ4S4m/M0tA06Sb+jYVIGFDBS0nOttp2FZRkjLpqoCX4
pWFskxKwPKQqAF+JbTibxve7YXGj3n4vFMsjcg2spA/10sgtBdlh4i+v3B3hGGLM
3FZH/UDIotI6tVWxKMBt/wHCqW8RRUjKnc+tJb1tVlDgxv6bGVC3kHVVaywhCYAm
CPrlWdaFNe5gFzNVC5gArQApDfaXGOyO1bZfpwIDAQABAoIBAQC8qlyxjVCRdSG6
HUl63l7Bd+YkpiCTxSH3gPmEdsj6m3Vx4W9fazmH9Xbcwv65nn/FtFDx1y36xBp/
m0dItB+9cLjrP3Oq70fBI6eruCs3KvBpBQbTdvmqYihnpE0QL1mfm0Jjy8h/0aHY
aW2DZlcOipEsHim5cE3Rj5PEhK7Gsqre0yAd1PjUmLjm46bGMWoVq4TYvDltXb1X
slyg1kDqFhjzfpB3qoLyDMs9KLjwDME59PgdSD96kchtzppDW3lXD9tNK658t2FO
x6j716wNIY4fHCu499LFbDbXf6PMWaVSlQWpBn7PsDzGtoQNShIEu58ovp+rwzoF
YNgm8wc5AoGBAPxeXXmn4z2oxckVJoY8RcFWQDP6LCqIs22vpKJgJhFynYA6nLcl
UdVB5xTcKiue1erW8Bb8p8yUW9z+LKpTnjj3z6K6xb0XqF+PuZJcRHm8rEULqUNN
2MMsFI5YY4VimqT9H2lzEr1Wik+jKvSPaj+WhoCkzd1hxMx5AG5NoG7jAoGBAPfP
wYLilDKEyfBgfx+XaEkFwo+BADf5jFyQ3XFQzPql/h2arALGT/HNut5w4cLadvgw
c8b+aDKM4rM1S4GSdjurbIK1pRAQEI+Y6o2U7nbijo3ERcoWzCqoswcIlS6p1wx6
YyxjGoeWdF9WXUudkIdlAYmj7ZDHKgnoPf+BA4NtAoGBAKNPxZm2ZT0/fE5122o+
kr1cPUvldrNHpyUx5o4VPk1IKFgUldmG0v/4F7vOBZQYw0GnOdMGSOgAkbne2bSX
S+p9ouYhi1ikeJbugR4Pi1hkGe7MbwpY1A7o9Zxv4mcsufpOuwcYKmZQHE0Qv/lm
3VCs7flNrNK4NAxFuVun7EwVAoGAKsMaBGju48zQP/+W0C/DWh55VWQQUphoZSzG
WaB0zqfIMvmWxx/LedFjdrEJ9CLYtrk9sVADUP3IvN3sep54cpGBNwj7Q8tR4EWl
6+qQP8mWidYdqOLINnBH/GW5wISkTE3uQSGU2WLYD/+KN9snroV6f3LfMsV7dpwx
3p43qf0CgYEAwO4Cx2RDdAxeMOiicgBBaWbeJ6mM8GB/zUvN0FLAPbCa4yf8VFU0
SE5pLW+36o+uTNzfryzDYhaCRs+evaG5a+6teWmyNbYpSxBOuZU/qpKlv46bX9iV
qKXuWV2LmyFq4+sofgcRqIvnC384KG5Kl9wJ1tEHWohv/RXAnXRnal0=
                        ',
    ),
  ),
);

$metadata['http://sso.catintranet.com/adfs/services/trust'] = array (
  'entityid' => 'http://sso.catintranet.com/adfs/services/trust',
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'support',
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://sso.catintranet.com/adfs/ls/',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sso.catintranet.com/adfs/ls/',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://sso.catintranet.com/adfs/ls/',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sso.catintranet.com/adfs/ls/',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://sso.catintranet.com/adfs/services/trust/artifactresolution',
      'index' => 0,
    ),
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC6DCCAdCgAwIBAgIQHmV7TV/yBbtBx9P1XfY+hjANBgkqhkiG9w0BAQsFADAwMS4wLAYDVQQDEyVBREZTIEVuY3J5cHRpb24gLSBzc28uY2F0aW50cmFuZXQuY29tMB4XDTE2MDQwNDA0NTkxNloXDTE3MDQwNDA0NTkxNlowMDEuMCwGA1UEAxMlQURGUyBFbmNyeXB0aW9uIC0gc3NvLmNhdGludHJhbmV0LmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANCqLDKxUNA1xO0m1akDI587y2AUHgd3pgbhN6Gy5/SSG1UM+fn6dCYbsUtRlCmp465HE2YSfm5/7BbAA5JJ8cWWkhkK4wtTRLgjfel20zmrPrR7laTRgo/i9ih8BQhzPK85B4XUIL2PjaivRjhx6HoKs/BfYm+OmPuminjcfR+q0AZlxytM1/MiIab/hjHVJJQRaHEKNoipCJlB+ur+t74GTGnKuGuJhZeHVY7UuIiU/r0jJhyXsL0kewQrHWI2Fn4TKT2oPvavZu+QutECjsoP5mAXc4bIv3rgtGn8gzFFthSjd10FAzR3/OPtamMMicxqDA6K0nGcTeQsUhn+/hkCAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAlOOJQhHcT5HJV+KBN0W6MkMBBS6rnSissKWWOS9mpLWvqwS6X3tboxXQ0OunLKkcdx97JT5S86AF8FuZELLe3Ea8YF4VsIqVfnuPiXTTNd2nYJ7AJDhLn7xqbjY8hU1kTAHPSUO+An6+qdSwoTrW/XXHI1Gb4S8FneAaQkT8FWyRdV625CQXVqY0d0QSw2tGH2130G9/mA2+V/cXDzfjMTgMEoJVnSd3XXiqPy03JwcqQLCM4k50cpyO0RtXVAFacgL7NzBP7dfJwIZoOKILBSL85aURqMJgyu/pSW9rJVecBBAqvxDWfCgwbM+u4EsHhw6exkgNcRCBW0lOb5MZAQ==',
    ),
    1 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC4jCCAcqgAwIBAgIQNhcwNc0DI5hKO/cSoO0d6TANBgkqhkiG9w0BAQsFADAtMSswKQYDVQQDEyJBREZTIFNpZ25pbmcgLSBzc28uY2F0aW50cmFuZXQuY29tMB4XDTE2MDQwNDA0NTkxOFoXDTE3MDQwNDA0NTkxOFowLTErMCkGA1UEAxMiQURGUyBTaWduaW5nIC0gc3NvLmNhdGludHJhbmV0LmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALWt836YSYaZt/oTVEndlQvK8vqs9nwZGj4QuazGqQFn8YyeopikiHkgoRuaqBCBy9018npCw6IZ+8AbSnoRzmRp1uw3O4cmqBGQfHEkdYMblYM6wo0BzgO0VyeEazcWV9/ZDy5xRIu6Tqb2Z7dzpmddie4yuqGoXapKyPywHidkikt6ZcFUTHkzZAgmnEf7g1noUrodBm15vtjpkz2uNQfIFrYEL9CDKfu3WfPo29LUIVZhfNTfRdf6N+jMNF9YwOsWtU4xI/sFoSZFSx2mO+yGW5SgMHru5aKU/guyM1TY9m0ZtPn1iLjaDGh2M1YHPIcp8LFv07xvml8bW9JdTU8CAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAHyxv/QDel+/IRYyDP7avBzKEK/sbzkYIWjzL6L6GQWdVbLP0lfZfSeJGGXmplmtQleUKGLUeFLuekxg2MWDxrw/hd2DR79ghw/8kHvI/7ZHsP6MltrklbL9XJkAezaIR75DMItwq96geCxIJoOLR4ybUe80OkPc5TGi0runKlVBtjc38iD4bf8o6fRhY0uxhjXxwmf5SAsSMe/AF3u8JNkNVIxJ9HIrkTii0u1hPY56SW5ghfxzuEGpzXrtCazbIIAdcrEB+oMEY0tA8NuNXWTUZQKp9NrYOZ3HFr9SkzSozqUoL+d6Ei1jPfpgmH3xO8pfuVXlkbaNcqi9v5xu3PQ==',
    ),
  ),
);