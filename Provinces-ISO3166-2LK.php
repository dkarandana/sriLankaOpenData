<?php

/*** code by @dkarandana ****/

class Data_API
{
	protected static $Districts = array(
		array(
			"code" => "LK-11",
			"name" => "Colombo",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Colombo_district.svg/500px-Colombo_district.svg.png"
		) ,
		array(
			"code" => "LK-12",
			"name" => "Gampaha",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Gampaha_district.svg/500px-Gampaha_district.svg.png"
		) ,
		array(
			"code" => "LK-13",
			"name" => "Kalutara",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Kalutara_district.svg/500px-Kalutara_district.svg.png"
		) ,
		array(
			"code" => "LK-21",
			"name" => "Kandy",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Kandy_district.svg/500px-Kandy_district.svg.png"
		) ,
		array(
			"code" => "LK-22",
			"name" => "Matale",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Matale_district.svg/500px-Matale_district.svg.png"
		) ,
		array(
			"code" => "LK-23",
			"name" => "Nuwara Eliya",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Nuwara_Eliya_district.svg/500px-Nuwara_Eliya_district.svg.png"
		) ,
		array(
			"code" => "LK-31",
			"name" => "Galle",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Galle_district.svg/500px-Galle_district.svg.png"
		) ,
		array(
			"code" => "LK-32",
			"name" => "Matara",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Matara_district.svg/500px-Matara_district.svg.png"
		) ,
		array(
			"code" => "LK-33",
			"name" => "Hambantota",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Hambantota_district.svg/500px-Hambantota_district.svg.png"
		) ,
		array(
			"code" => "LK-41",
			"name" => "Jaffna",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Jaffna_district.svg/500px-Jaffna_district.svg.png"
		) ,
		array(
			"code" => "LK-42",
			"name" => "Kilinochchi",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Kilinochchi_district.svg/500px-Kilinochchi_district.svg.png"
		) ,
		array(
			"code" => "LK-43",
			"name" => "Mannar",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Mannar_district.svg/500px-Mannar_district.svg.png"
		) ,
		array(
			"code" => "LK-44",
			"name" => "Vavuniya",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Vavuniya_district.svg/500px-Vavuniya_district.svg.png"
		) ,
		array(
			"code" => "LK-45",
			"name" => "Mullaittivu",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Mullaitivu_district.svg/500px-Mullaitivu_district.svg.png"
		) ,
		array(
			"code" => "LK-51",
			"name" => "Batticaloa",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Batticaloa_district.svg/500px-Batticaloa_district.svg.png"
		) ,
		array(
			"code" => "LK-52",
			"name" => "Ampara",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Ampara_district.svg/500px-Ampara_district.svg.png"
		) ,
		array(
			"code" => "LK-53",
			"name" => "Trincomalee",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Trincomalee_district.svg/500px-Trincomalee_district.svg.png"
		) ,
		array(
			"code" => "LK-61",
			"name" => "Kurunegala",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Kurunegala_district.svg/500px-Kurunegala_district.svg.png"
		) ,
		array(
			"code" => "LK-62",
			"name" => "Puttalam",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Puttalam_district.svg/500px-Puttalam_district.svg.png"
		) ,
		array(
			"code" => "LK-71",
			"name" => "Anuradhapura",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Anuradhapura_district.svg/500px-Anuradhapura_district.svg.png"
		) ,
		array(
			"code" => "LK-72",
			"name" => "Polonnaruwa",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Polonnaruwa_district.svg/500px-Polonnaruwa_district.svg.png"
		) ,
		array(
			"code" => "LK-81",
			"name" => "Badulla",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Badulla_district.svg/500px-Badulla_district.svg.png"
		) ,
		array(
			"code" => "LK-82",
			"name" => "Monaragala",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Moneragala_district.svg/500px-Moneragala_district.svg.png"
		) ,
		array(
			"code" => "LK-91",
			"name" => "Ratnapura",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Ratnapura_district.svg/500px-Ratnapura_district.svg.png"
		) ,
		array(
			"code" => "LK-92",
			"name" => "Kegalla",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Kegalle_district.svg/500px-Kegalle_district.svg.png"
		)
	);
	protected static $Provinces = array(
		array(
			"code" => "LK-1",
			"name" => "Western Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Sri_Lanka_Western_Province_locator_map.svg/200px-Sri_Lanka_Western_Province_locator_map.svg.png",
			"districts" => array(
				"LK-11",
				"LK-12",
				"LK-13"
			)
		) ,
		array(
			"code" => "LK-2",
			"name" => "Central Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Sri_Lanka_Central_Province_locator_map.svg/200px-Sri_Lanka_Central_Province_locator_map.svg.png",
			"districts" => array(
				"LK-21",
				"LK-22",
				"LK-23"
			)
		) ,
		array(
			"code" => "LK-3",
			"name" => "Southern Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Sri_Lanka_Southern_Province_locator_map.svg/200px-Sri_Lanka_Southern_Province_locator_map.svg.png",
			"districts" => array(
				"LK-31",
				"LK-32",
				"LK-33"
			)
		) ,
		array(
			"code" => "LK-4",
			"name" => "Northern Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Sri_Lanka_Northern_Province_locator_map.svg/200px-Sri_Lanka_Northern_Province_locator_map.svg.png",
			"districts" => array(
				"LK-41",
				"LK-42",
				"LK-43",
				"LK-44",
				"LK-45"
			)
		) ,
		array(
			"code" => "LK-5",
			"name" => "Eastern Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Sri_Lanka_Eastern_Province_locator_map.svg/200px-Sri_Lanka_Eastern_Province_locator_map.svg.png",
			"districts" => array(
				"LK-51",
				"LK-52",
				"LK-53"
			)
		) ,
		array(
			"code" => "LK-6",
			"name" => "North Western",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Sri_Lanka_North_Western_Province_locator_map.svg/200px-Sri_Lanka_North_Western_Province_locator_map.svg.png",
			"districts" => array(
				"LK-61",
				"LK-62"
			)
		) ,
		array(
			"code" => "LK-7",
			"name" => "North Central",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Sri_Lanka_North_Central_Province_locator_map.svg/200px-Sri_Lanka_North_Central_Province_locator_map.svg.png",
			"districts" => array(
				"LK-71",
				"LK-72"
			)
		) ,
		array(
			"code" => "LK-8",
			"name" => "Uva Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Sri_Lanka_Uva_locator_map.svg/200px-Sri_Lanka_Uva_locator_map.svg.png",
			"districts" => array(
				"LK-81",
				"LK-82"
			)
		) ,
		array(
			"code" => "LK-9",
			"name" => "Sabaragamuwa Province",
			"map" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Sri_Lanka_Sabaragamuwa_locator_map.svg/200px-Sri_Lanka_Sabaragamuwa_locator_map.svg.png",
			"districts" => array(
				"LK-91",
				"LK-92"
			)
		)
	);
	public

	function mapDistricts($province)
	{
		$Districts = self::$Districts;
		if (array_key_exists("districts", $province))
		{
			$districtList = array();
			foreach($province["districts"] as $code)
			{
				/* Will find the district index which contain this code `$code` */
				$index = array_search($code, array_column($Districts, 'code'));
				/* Replacing district code with district data */
				if (gettype($index) === "integer" && array_key_exists($index, $Districts))
				{
					$districtList[$code] = $Districts[$index];
				}
			}

			$province['districts'] = $districtList;
		}

		return $province;
	}

	public

	function allProvinces($extend = false)
	{
		return ($extend) ? array_map("self::mapDistricts", self::$Provinces) : self::$Provinces;
	}

	public

	function allDistricts()
	{
		return self::$Districts;
	}

	public

	function getProvince($field, $value)
	{
		$index = array_search($value, array_column(self::$Provinces, $field));
		if (gettype($index) === "integer")
		{
			return self::$Provinces[$index];
		}
	}

	public

	function getDistrict($field, $value)
	{
		$Districts = self::$Districts;
		$index = array_search($value, array_column($Districts, $field));
		if (gettype($index) === "integer")
		{
			return $Districts[$index];
		}
	}
}

$data = new Data_API();

// print_r( $data->allDistricts() );
// print_r( $data->allProvinces() );
// print_r( $data->allProvinces( true) ); //Extended

/* Get Province data individually */

// print_r( $data->getProvince('name','Sabaragamuwa Province') ); //Extended
// print_r( $data->getProvince('code','LK-2') ); //Extended

/* Get District data individually */

// print_r( $data->getDistrict('code','LK-11') );
// print_r( $data->getDistrict('name','Colombo') );

?>


 

 
