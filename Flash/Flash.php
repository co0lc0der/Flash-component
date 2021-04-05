<?php

class Flash
{
	private static $root = 'flash_messages';

	public static function exists($name) {
		return (isset($_SESSION[self::$root][$name]) && $_SESSION[self::$root][$name] !== '') ? true : false;
	}

	private static function put($name, $value) {
		return (!empty($name)) ? $_SESSION[self::$root][$name] = $value : false;
	}

	private static function get($name) {
		return $_SESSION[self::$root][$name];
	}

	private static function delete($name) {
		if (empty($name)) return false;

		if (self::exists($name)) {
			unset($_SESSION[self::$root][$name]);
			return true;
		}
	}

	public static function setFlash($text, $name = 'danger', $rewrite = true) {
		if (empty($text)) return false;

		if (self::exists($name) && !$rewrite) {
			$prev = self::get($name) . ' ' . $text;
			self::put($name, $prev);
		} else {
			self::put($name, $text);
		}

		return true;
	}

	public static function getFlash($name) {
		if (empty($name)) return false;

		if (self::exists($name)) {
			$message = self::get($name);
			self::delete($name);
			return $message;
		}
	}
}
