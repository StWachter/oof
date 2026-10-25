<?php
/**
 * Setup options
 *
 * @package consentfriend
 * @subpackage build
 *
 * @var modX $modx
 * @var array $options
 */

$output = '';
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
        $output .= '<h2>Install ConsentFriend</h2>
        <p>ConsentFriend will be installed. Please review the installation options carefully.</p><br>';

        $output .= '<div style="position: relative">
                        <label for="mode">Install the ConsentFriend demo service/purpose data:</label>
                        <select name="mode" id="mode" style="font-size: 13px; padding: 5px; width: 100%; height: 32px; margin-bottom: 10px; background-color: #fbfbfb; background-image: none; border-radius: 3px; border: 1px solid #cccccc;">
                            <option value="skip" selected="selected">Skip</option>
                            <option value="setup">Install</option>
                            <option value="essential">Essential only</option>
                        </select>
                    </div>';
        break;
    case xPDOTransport::ACTION_UPGRADE:
        $output .= '<h2>Upgrade ConsentFriend</h2>
        <p>ConsentFriend will be upgraded. Please review the installation options carefully.</p><br>';

        $output .= '<div><label for="mode">Update the ConsentFriend service/purpose data:</label>
                        <select name="mode" id="mode" style="font-size: 13px; padding: 5px; width: 100%; height: 32px; margin-bottom: 10px; background-color: #fbfbfb; background-image: none; border-radius: 3px; border: 1px solid #cccccc;">
                            <option value="skip" selected="selected">Skip</option>
                            <option value="replace">Replace existing (Reset default services - delete custom services)</option>
                            <option value="append">Append new (Append not existing default services - keep all other services)</option>
                            <option value="update">Update all (Reset default services - keep custom services)</option>
                        </select>
                    </div>';
        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return $output;
