# Welcome to the Kilat Domain API

We divided our function into 5 types:
1.  Reseller Functions
2.  Domain Functions
3.  DNS Functions
4.  Domain Forwarding Functions
5.  DNSSEC Functions

# Reseller Functions
This type include several actions, such as:

|URI|Method|Description|Documentation|
|--- |--- |--- |--- |
|/credit|GET|Retrieve reseller credit balance|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/GetCreditBalance)|
|/pricing|GET|Retrieve reseller TLD pricing|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/GetTLDPricing)|
|/whois/{domain}|GET|Retrieve domain WHOIS information|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/Whois)|

# Domain Functions
This type include several actions, such as:

|URI|Method|Description|Documentation|
|--- |--- |--- |--- |
|/register|POST|Registration of a new domain|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/RegisterDomain)|
|/transfer/{domain}|POST|Transfer a domain|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/TransferDomain)|
|/renew/{domain}|POST|Renew a domain|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/RenewDomain)|
|/nameservers/{domain}|GET|Return up to 5 nameservers that are set for the domain|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/GetNameservers)|
|/nameservers{domain}|POST|Change a domains nameservers|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/SaveNameservers)|
|/lock/{domain}|GET|Return the current lock status of a domain|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/GetRegistrarLockStatus)|
|/lock/{domain}|POST|Activate/Non-activate lock status setting|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/SaveRegistrarLock)|
|/contact/{domain}|GET|Return WHOIS information|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/GetContactDetails)|
|/contact/{domain}|POST|Revised WHOIS information|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/SaveContactDetails)|
|/eppcode/{domain}|GET|Request EPP Code for a transfer out.|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/GetEPPCode)|
|/nameserver/register|POST|Child nameserver registration|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/RegisterNameserver)|
|/nameserver/modify|POST|Child nameserver modification|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/ModifyNameserver)|
|/nameserver/delete|POST|Child nameserver deletion|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DeleteNameserver)|
|/delete|POST|Domain deletion|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/RequestDelete)|
|/document/{domain}|POST|Upload domain documents|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/UploadFile)|

# DNS Functions
This type include several actions, such as:

|URI|Method|Description|Documentation|
|--- |--- |--- |--- |
|/dns/{domain}|GET|Return the DNS Records from specific domain|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DNS-GetRecords)|
|/dns/add|POST|Add DNS Host Record|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DNS-AddRecord)|
|/dns/delete|POST|Delete DNS Host Record|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DNS-DeleteRecord)|

# Domain Forwarding Functions
This type include several actions, such as:


|URI|Method|Description|Documentation|
|--- |--- |--- |--- |
|/url/{domain}|GET|Return the Domain Forwarding Records|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DF-GetRecords)|
|/url/add|POST|Add Domain Forwarding Record|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DF-AddRecord)|
|/url/delete|POST|Delete Domain Forwarding Record|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DF-DeleteRecord)|

# DNSSEC Functions
This type include several actions, such as:


|URI|Method|Description|Documentation|
|--- |--- |--- |--- |
|/dnssec/{domain}|GET|Return the DNSSEC Records|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DNSSEC-GetRecords)|
|/dnssec/add|POST|Add DNSSEC Record|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DNSSEC-AddRecord)|
|/dnssec/delete|POST|Delete DNSSEC Record|[Link](https://github.com/kilatdomain/kilatdomain-api/wiki/DNSSEC-DeleteRecord)|