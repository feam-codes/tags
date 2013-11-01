<?php

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{tags_legend},disabledTagObjects'; 

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['disabledTagObjects'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['disabledTagObjects'],
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_settings_tags', 'getTagTables'),
	'eval'                    => array('multiple'=>true)
);

class tl_settings_tags extends tl_settings
{
	/**
	 * Return available tag tables
	 *
	 * @return array Array of tag tables
	 */
	public function getTagTables()
	{
		$tables = array();
		foreach ($GLOBALS['tags_extension']['sourcetable'] as $sourcetable)
		{
			$tables[$sourcetable] = $sourcetable;
		}
		return $tables;
	}
}

