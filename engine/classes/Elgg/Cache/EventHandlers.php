<?php

namespace Elgg\Cache;

/**
 * Contains the cache event handlers
 *
 * @since 4.0
 */
class EventHandlers {
	
	/**
	 * Disables the caches in the system
	 *
	 * @return void
	 */
	public static function disable() {
		_elgg_services()->bootCache->disable();
		_elgg_services()->pluginsCache->disable();
		_elgg_services()->sessionCache->disable();
		_elgg_services()->dataCache->disable();
		_elgg_services()->autoloadManager->getCache()->disable();
		_elgg_services()->systemCache->disable();
		_elgg_services()->serverCache->disable();
	}
	
	/**
	 * Enables the caches in the system
	 *
	 * @return void
	 */
	public static function enable() {
		_elgg_services()->bootCache->enable();
		_elgg_services()->pluginsCache->enable();
		_elgg_services()->sessionCache->enable();
		_elgg_services()->dataCache->enable();
		_elgg_services()->autoloadManager->getCache()->enable();
		_elgg_services()->systemCache->enable();
		_elgg_services()->serverCache->enable();
	}

	/**
	 * Purge the caches in the system
	 *
	 * @return void
	 */
	public static function purge() {
		_elgg_services()->bootCache->purge();
		_elgg_services()->pluginsCache->purge();
		_elgg_services()->sessionCache->purge();
		_elgg_services()->dataCache->purge();
		_elgg_services()->simpleCache->purge();
		_elgg_services()->systemCache->purge();
		_elgg_services()->localFileCache->purge();
		_elgg_services()->serverCache->purge();
	}

	/**
	 * Invalidates the caches in the system
	 *
	 * @return void
	 */
	public static function invalidate() {
		_elgg_services()->bootCache->invalidate();
		_elgg_services()->pluginsCache->invalidate();
		_elgg_services()->sessionCache->invalidate();
		_elgg_services()->dataCache->invalidate();
		_elgg_services()->systemCache->invalidate();
		_elgg_services()->localFileCache->invalidate();
		_elgg_services()->serverCache->invalidate();
	}

	/**
	 * Invalidates the caches in the system
	 *
	 * @return void
	 */
	public static function clear() {
		_elgg_services()->boot->clearCache();
		_elgg_services()->pluginsCache->clear();
		_elgg_services()->sessionCache->clear();
		_elgg_services()->dataCache->clear();
		_elgg_services()->simpleCache->clear();
		_elgg_services()->autoloadManager->deleteCache();
		_elgg_services()->systemCache->clear();
		_elgg_services()->localFileCache->clear();
		_elgg_services()->serverCache->clear();
		
		if (function_exists('opcache_reset')) {
			opcache_reset();
		}
	}
}
