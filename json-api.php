<?php

	header('Content-Type: application/json');

/**
 * Sri Lanka Provinces data fetching API
 * =====================
 *
 * @author      Dhananjaya Karandana <https://twitter.com/dkarandana>
 * @version     1.0.2
 *
 */
	
 
 /**
  * Collecting params to fetch relevant data.
  *
  * @param string $fetch Type of the fetch [ allDistricts | allProvinces | district | province ]
  * @param string $field The name of the field - Only required for $fetch == district|province
  * @param string $search The value to search in the given field - Only required for $fetch == district|province
  * @param string $expanded allProvinces data expander - this will ask to return full detail version of district inside the allProvinces array
  *
  *
  */

 	$error = [];
   	$data = [];
 

	$fetch =  trim( filter_input(INPUT_GET, 'fetch', FILTER_SANITIZE_SPECIAL_CHARS) );
	$field =  trim( filter_input(INPUT_GET, 'field', FILTER_SANITIZE_SPECIAL_CHARS) );
	$search =  trim( filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS) );
	$expanded =  filter_input(INPUT_GET, 'expanded', FILTER_SANITIZE_SPECIAL_CHARS);

	$expanded = ( $expanded == true ) ? trim( $expanded ) : null;

	if( $fetch ){

		require 'Provinces-ISO3166-2LK.php';

		$jsonAPI = new Data_API();

		if( $fetch === "allDistricts"){

			$data = $jsonAPI->allDistricts();

		}elseif($fetch === "allProvinces" && $expanded == 'true' ){

			$data = $jsonAPI->allProvinces( true );

		}elseif( $fetch === "allProvinces" ){

			$data = $jsonAPI->allProvinces( false );

		}elseif( $fetch === "district" && in_array( $field, $jsonAPI->districtFields() ) ){

			$data = $jsonAPI->getDistrict( $field, $search );

			if( !$data ){
				$error[] = [
					"error"=>"Failed to retrieve `District` data with given criteria"
				];
			}

		}elseif( $fetch === "province" && in_array( $field, $jsonAPI->provinceFields() ) ){

			$data = $jsonAPI->getProvince( $field, $search );

			if( !$data ){
				$error[] = [
					"error"=>"Failed to retrieve `Province` data with given criteria"
				];
			}

		}else{
			$error[] = [
				"error"=>"Incorrect `field` name - Unable to process request"
			];
		}

	}else{
		$error[] = [
			"error"=>"Required parameter `fetch` is missing"
		];
	}

	/* Returning Error object if something went wrong */

	$data = (!empty( $error ) ? $error : $data );
	echo json_encode( $data );

?>