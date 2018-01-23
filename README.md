
# Subdivision names of Sri Lanka 
#### sriLankaOpenData | ISO 3166-2:LK

Public Data for a better future https://opengovdata.org

```php
<?php
  $data = new Data_API();

  $data->allDistricts(); // All Districts
  $data->allProvinces(); // All Provinces with district codes
  $data->allProvinces( true) ); // All Provinces with expanded district array

/* Get Province data individually */

  $data->getProvince('name','Sabaragamuwa');
  $data->getProvince('code','LK-2');

/* Get District data individually */

  $data->getDistrict('code','LK-11');
  $data->getDistrict('name','Colombo');

?>
```

####  json_encode( $data->allProvinces( true) )

First block of the allProvinces()

```json
[{
	"code": "LK-1",
	"name": "Western",
	"map": "https:\/\/upload.wikimedia.org\/wikipedia\/commons\/thumb\/0\/0f\/Sri_Lanka_Western_Province_locator_map.svg\/200px-Sri_Lanka_Western_Province_locator_map.svg.png",
	"districts": {
		"LK-11": {
			"code": "LK-11",
			"name": "Colombo",
			"map": "https:\/\/upload.wikimedia.org\/wikipedia\/commons\/thumb\/a\/af\/Colombo_district.svg\/500px-Colombo_district.svg.png"
		},
		"LK-12": {
			"code": "LK-12",
			"name": "Gampaha",
			"map": "https:\/\/upload.wikimedia.org\/wikipedia\/commons\/thumb\/6\/62\/Gampaha_district.svg\/500px-Gampaha_district.svg.png"
		},
		"LK-13": {
			"code": "LK-13",
			"name": "Kalutara",
			"map": "https:\/\/upload.wikimedia.org\/wikipedia\/commons\/thumb\/2\/20\/Kalutara_district.svg\/500px-Kalutara_district.svg.png"
		}
	}
}, {}]
```
## Useful Links

- [ISO_3166-2:LK](https://en.wikipedia.org/wiki/ISO_3166-2:LK)

