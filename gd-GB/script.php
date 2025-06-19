<?php
/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2025
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  4.0.0v1
 */
class Pkg_deDEInstallerScript extends InstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @since   4.0.0v1
	 */
	public function __construct()
	{
		// Define the minimum versions to be supported.
		$this->minimumJoomla = '5.0';
		$this->minimumPhp    = '8.1.0';

		$this->deleteFiles = [
            // Previous availbale version was for 2.5 - assume already removed

			// Old files from Joomla 3 language packs

			// Old files from Joomla 4 language packs

			// Old files from Joomla 5 language packs (Only relevant for Joomla 6, should then be included in the deletion array with the 6.0-dev branch once created)
			// '/administrator/language/de-DE/plg_captcha_recaptcha_invisible.ini',
			// '/administrator/language/de-DE/plg_captcha_recaptcha_invisible.sys.ini',
		];
	}

	/**
	 * Function to perform changes during postflight
	 *
	 * @param   string            $type    The action being performed
	 * @param   ComponentAdapter  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since   4.0.0v1
	 */
	public function postflight($type, $parent)
	{
		$this->removeFiles();
	}
}
