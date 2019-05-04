<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_firedrive
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

JLoader::register('FiredriveHelper', JPATH_ADMINISTRATOR . '/components/com_firedrive/helpers/firedrive.php');

$this->subtemplatename = 'items';
echo JLayoutHelper::render('joomla.content.category_default', $this);
echo FiredriveHelper::getFdkey();
