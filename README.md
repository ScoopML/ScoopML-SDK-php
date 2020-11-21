# ScoopML-SDK-php
A SDK for integration of ScoopML into apps built using php


# Usage
```Usage

<?php
use ScoopMLApi\ScoopMLRestClient;

$scoopml_client = ScoopMLClient::create([
  'base_uri' => 'Unique url',
  'payload' => 'text',
]);
$result_object = $scoopml_client->Getscoopml();
$result_array = $result_object->toArray();

```
