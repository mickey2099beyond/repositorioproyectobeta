<?php
namespace Views;
use http\Url;
class template
{
	public static function header()
	{
		require_once("Template/header.php");
	}
	public static function nav()
	{
		require_once("Template/nav.php");
	}
	public static function main()
	{
		require_once("Template/main.php");
	}
	public static function footer()
	{
		require_once("Template/footer.php");
	}
}
?>