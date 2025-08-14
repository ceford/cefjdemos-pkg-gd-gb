<?php
/**
 * @package    Joomla.Language
 *
 * @copyright (C) 2025 Clifford E Ford. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * gd-GB localise class.
 *
 * @since  1.6
 */
abstract class Gd_GBLocalise
{
    /**
     * Returns the potential suffixes for a specific number of items
     *
     * @param int $count  The number of items.
     *
     * @return  array  An array of potential suffixes.
     *
     * @since   1.6
     */
    public static function getPluralSuffixes($count)
    {
        if ($count == 0) {
            return ['0'];
        } elseif ($count == 1) {
            return ['ONE', '1'];
        } else {
            return ['OTHER', 'MORE'];
        }
    }

    /**
     * Returns the ignored search words
     *
     * @return  array  An array of ignored search words.
     *
     * @since   1.6
     *
     * @deprecated  5.1 will be removed in 7.0 without replacement
     */
    public static function getIgnoredSearchWords()
    {
        return [
            'agus',   // and
            'ann',    // in (before consonants, contraction of ann an)
            'ann an', // in (full form)
            'air',    // on
            'am',     // the (masculine before b, f, m, p)
            'an',     // the (masculine singular before consonants, also negative particle)
            'na',     // the (plural/feminine, genitive)
            'is',     // is (copula)
            'cha',    // not (negative particle)
            'a',      // vocative particle / possessive
            'do',     // to/for
            'le',     // with
            'sa',     // in the (contraction)
            'san',    // in the (before certain consonants)
            'de',     // of, from
            'bhon',   // from the
        ];
    }

    /**
     * Returns the lower length limit of search words
     *
     * @return  integer  The lower length limit of search words.
     *
     * @since   1.6
     *
     * @deprecated  5.1 will be removed in 7.0 without replacement
     */
    public static function getLowerLimitSearchWord()
    {
        return 3;
    }

    /**
     * Returns the upper length limit of search words
     *
     * @return  integer  The upper length limit of search words.
     *
     * @since   1.6
     *
     * @deprecated  5.1 will be removed in 7.0 without replacement
     */
    public static function getUpperLimitSearchWord()
    {
        return 20;
    }

    /**
     * Returns the number of chars to display when searching
     *
     * @return  int  The number of chars to display when searching.
     *
     * @since   1.6
     *
     * @deprecated  5.1 will be removed in 7.0 without replacement
     *
     */
    public static function getSearchDisplayedCharactersNumber()
    {
        return 200;
    }
}
