<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('password_trinity'))
{
	function password_trinity($username, $password)
	{
		return strtoupper(sha1(strtoupper($username) . ':' .strtoupper($password)));
	}
}
if ( ! function_exists('username_trinity'))
{
	function username_trinity($username)
	{
		return strtoupper($username);
	}
}