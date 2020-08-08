<?php
	require_once './db/dbmapworkrs_dbManager.php';
	
/*
 * SCHEMA DB map_info
 * 
	{
		c_lang: {
			type: 'String'
		},
		c_long: {
			type: 'String'
		},
		cre_date: {
			type: 'Date'
		},
		cre_user: {
			type: 'String'
		},
		e_lang: {
			type: 'String'
		},
		e_long: {
			type: 'String'
		},
		map_base: {
			type: 'String'
		},
		map_bld_co: {
			type: 'String'
		},
		map_dist: {
			type: 'String'
		},
		map_input_date: {
			type: 'Date'
		},
		map_memo: {
			type: 'String'
		},
		map_name: {
			type: 'String'
		},
		map_sppy_user: {
			type: 'String'
		},
		mapid: {
			type: 'String'
		},
		mobile_table: {
			type: 'String'
		},
		s_lang: {
			type: 'String'
		},
		s_long: {
			type: 'String'
		},
		url: {
			type: 'String'
		},
		ver: {
			type: 'String'
		},
		//RELAZIONI
		
		
		//RELAZIONI ESTERNE
		
		mar_rel: {
			type: Schema.ObjectId,
			ref : "map_info"
		},
		
	}
 * 
 */


//CRUD METHODS


//CRUD - CREATE


$app->post('/map_info',	function () use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'c_lang'	=> isset($body->c_lang)?$body->c_lang:'',
		'c_long'	=> isset($body->c_long)?$body->c_long:'',
		'cre_date'	=> isset($body->cre_date)?$body->cre_date:'',
		'cre_user'	=> isset($body->cre_user)?$body->cre_user:'',
		'e_lang'	=> isset($body->e_lang)?$body->e_lang:'',
		'e_long'	=> isset($body->e_long)?$body->e_long:'',
		'map_base'	=> isset($body->map_base)?$body->map_base:'',
		'map_bld_co'	=> isset($body->map_bld_co)?$body->map_bld_co:'',
		'map_dist'	=> isset($body->map_dist)?$body->map_dist:'',
		'map_input_date'	=> isset($body->map_input_date)?$body->map_input_date:'',
		'map_memo'	=> isset($body->map_memo)?$body->map_memo:'',
		'map_name'	=> isset($body->map_name)?$body->map_name:'',
		'map_sppy_user'	=> isset($body->map_sppy_user)?$body->map_sppy_user:'',
		'mapid'	=> isset($body->mapid)?$body->mapid:'',
		'mobile_table'	=> isset($body->mobile_table)?$body->mobile_table:'',
		's_lang'	=> isset($body->s_lang)?$body->s_lang:'',
		's_long'	=> isset($body->s_long)?$body->s_long:'',
		'url'	=> isset($body->url)?$body->url:'',
		'ver'	=> isset($body->ver)?$body->ver:'',
		
		'mar_rel' => isset($body->mar_rel)?$body->mar_rel:'',
	);

	$obj = makeQuery("INSERT INTO map_info (_id, c_lang, c_long, cre_date, cre_user, e_lang, e_long, map_base, map_bld_co, map_dist, map_input_date, map_memo, map_name, map_sppy_user, mapid, mobile_table, s_lang, s_long, url, ver , mar_rel )  VALUES ( null, :c_lang, :c_long, :cre_date, :cre_user, :e_lang, :e_long, :map_base, :map_bld_co, :map_dist, :map_input_date, :map_memo, :map_name, :map_sppy_user, :mapid, :mobile_table, :s_lang, :s_long, :url, :ver , :mar_rel   )", $params, false);
    
	
	echo json_encode($body);
	
});


/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>