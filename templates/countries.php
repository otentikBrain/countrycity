<?php

namespace CountryCity\Templates;

use CountryCity\API\Location;

/** @var Location $Location */
$Location = new Location('countrycity','geo');

echo $Location->getAllCountries();