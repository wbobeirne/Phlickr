<?php

/**
 * @version $Id$
 * @author  Andrew Morton <drewish@katherinehouse.com>
 * @license http://opensource.org/licenses/lgpl-license.php
            GNU Lesser General Public License, Version 2.1
 * @package Phlickr
 */


/**
 * Phlickr_Api includes the core classes.
 */
require_once dirname(__FILE__) . '/Api.php';
/**
 * This class implements IPhotoSortStrategy.
 */
require_once dirname(__FILE__) . '/Framework/IPhotoSortStrategy.php';


/**
 * An object sort Phlickr_Photo objects by thier id value, and hopefully their
 * upload order.
 *
 * @author      Andrew Morton <drewish@katherinehouse.com>
 * @package     Phlickr
 * @subpackage  PhotoSortStrategy
 * @since       0.2.4
 * @see         Phlickr_PhotoSorter
 */
class Phlickr_PhotoSortStrategy_ById implements Phlickr_Framework_IPhotoSortStrategy {
    /**
     * Reformat the photo's id into a fixed width string that can be sorted.
     *
     * @param   object Phlickr_Photo $photo
     * @return  string
     */
    function stringFromPhoto(Phlickr_Photo $photo) {
        return sprintf('%012d', $photo->getId());
    }
}
