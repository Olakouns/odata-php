<?php

// docs https://github.com/saintsystems/odata-client-php
use SaintSystems\OData\ODataClient;

require_once dirname(__DIR__) . '/vendor/autoload.php';


class UsageExample
{
	public function __construct()
	{
		$odataServiceUrl = 'https://services.odata.org/V4/TripPinService';

		$odataClient = new ODataClient($odataServiceUrl);
        

		// Retrieve all entities from the "People" Entity Set
		$people = $odataClient->from('People')->get();
		// Or retrieve a specific entity by the Entity ID/Key
		try {
			$person = $odataClient->from('People')->find('russellwhyte');
            print_r($person);
			echo "Hello, I am $person->FirstName ";
		} catch (Exception $e) {
			echo $e->getMessage();
		}

		// Want to only select a few properties/columns?
		$people = $odataClient->from('People')->select('FirstName','LastName')->get();
	}
}

$example = new UsageExample();