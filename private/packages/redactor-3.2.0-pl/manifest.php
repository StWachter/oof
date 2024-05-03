<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'This license is a legal agreement between you and modmore for the use of the Redactor extra for MODX. By downloading or installing Redactor, you agree to the terms and conditions of this license. modmore reserves the right to alter this agreement at any time, for any reason, without notice.

modmore grants you a non-exclusive non-transferable license to use Redactor on one MODX installation, identified by its domain name. A license code is embedded in this package, which is associated with your account on modmore.com and is not transferable to other accounts. Changes to the MODX installation, such as moving to a different domain, invalidates this license. For your convenience, you will receive automatic instructions on resolving such invalidations via email.

Neither the installable package nor the source code may be redistributed, changed, stripped of its license information or license verification code, or otherwise modified without upfront written permission. Any attempt to block, jeopardize or fool built-in protections and/or license verification is strictly forbidden and cause for account termination.

Should you require multiple environments (test/staging) for a single MODX installations, each environment requires its own license. Free development licenses may be available. Please see: https://modmore.com/free-development-licenses/

Support is available for the most recent major version via support@modmore.com. Upon the release of a new major version or discontinuation, support will remain available for 6 months. For the current supported versions and timelines, please see: https://modmore.com/about/support/

modmore is not liable for any damages directly or indirectly caused by usage of Redactor.

modmore may revoke this license at any time.

---

This extra includes third party software, for which we are thankful.

- Redactor.js by Imperavi (imperavi.com), including plugins, OEM License.
- CodeMirror, MIT license
- Autocomplete.js by Algolia, MIT license
',
    'readme' => 'Welcome to Redactor 3.

Redactor is a powerful and user friendly rich text editor for MODX. It is based on the commercial Redactor editor built by Imperavi, enhanced with MODX-specific customisations and management.

With Redactor you get a tightly integrated editor experience. The editor integrates with the MODX media manager and media sources, allows direct linking to resources, and looks great within the manager design.

Redactor also integrates nicely with other extras. Third party extras can seamlessly enable Redactor on fields they want to use a rich text editor for. We love pairing Redactor with ContentBlocks ourselves.

For more information about the functionality offered by Redactor 3, please visit https://modmore.com/redactor/ or the documentation at https://docs.modmore.com/en/Redactor/v3.x/index.html

Standard unlimited support is included with your license purchase. If you have questions or need help, please email support@modmore.com.
',
    'changelog' => 'Redactor 3.2.0-pl
------------------
Released on 2023-11-21

- Promote to stable release.

Redactor 3.2.0-rc1
------------------
Released on 2023-11-09

- Fix copy/pasting URLs getting the manager url prepended, also cleaning up any instances that may already be there on load [#540, #523, #471, #381]
- Support inserting multiple images at once (requires MODX 3.1, see modxcms/revolution#16348)
- Change http:// to https:// when inserting a link without the protocol [#541]
- Add ability to disable the fixed toolbar in the Toolbar tab of the configurator [#524]

Redactor 3.1.6-pl
------------------
Released on 2022-12-12

- Disable fixed toolbar when air mode is active to avoid conflicts [S31035]
- Fix inability to get back to visual mode after activating source mode with the air toolbar [S31035]

Redactor 3.1.5-pl
------------------
Released on 2022-11-24

- Fix using the Redactor input type for ContentBlocks while using a different (or no) editor by default [S34411]

Redactor 3.1.4-pl
------------------
Released on 2022-09-26

- Fix path placeholders not working [F2379]
- Fix some more strict type checks that would prevent functionality from working in 3.0
- Fix uploaded file url generation losing the first filename character in some edge cases [#528]

Redactor 3.1.3-pl
------------------
Released on 2022-09-19

- Fix TypeError when Redactor encounters an image without a src
- Add redactor.allow_data_uris system setting to opt-in to supporting data URIs for images
- Fix error in Redactor TV on MODX3 [#535]
- Fix template-specific configuration set not applying in MODX3 [#534]

Redactor 3.1.2-pl
------------------
Released on 2021-10-27

- Further license-related tweaks for MODX 3.0.0-alpha3

Redactor 3.1.1-pl
------------------
Released on 2021-10-27

- Allow installation on MODX 3.0.0-alpha3
- Updated Redactor.js from v3.4.8 to v3.5.2, for details: https://imperavi.com/redactor/log/

Redactor 3.1.0-pl
------------------
Released on 2021-02-09

- Adjust z-index for fullscreen Ace editor to prevent navbar issues [F2035-11]
- Fix z-index for redactor modals hiding behind MIGX and other popups after a Redactor.js update changed modal IDs [#522]
- Update divider plugin to work more reliably with improved toolbar.addButton behavior in redactor.js
- Sort button-related plugins by order in which they are used, to improve reliability of positioning [#519, S24844]
- Update Redactor.js from v3.4.5 to v3.4.8, including improved XSS protections: https://imperavi.com/redactor/log/
- Patch toolbar.addButton with fix for buttons disappearing if the button before it isn\'t yet loaded
- Add ability to customise the font family and color options available in fontfamily and fontcolor dropdowns [#509]

Redactor 3.0.2-pl
------------------
Released on 2020-10-27

- Allow installation on PHP 7.1 again
- Guard against calling MODx.loadRTE/loadRedactorConfigurationSet without an element [#22971]
- Make sure resources are marked as having changes pending when editing in the RTE [#515]
- Fix image resize handler not being visible when Redactor is used in a modal popup [#507]
- Updated Redactor.js from v3.3.3 to 3.4.5, for details: https://imperavi.com/redactor/log/

Redactor 3.0.1-pl
------------------
Released on 2020-04-06

- Fix resource-related path placeholders not working [#21971]

Redactor 3.0.0-pl
------------------
Released on 2020-02-14

- Fix error in MODX3 due to strict typing
- Update to redactor.js v3.3.3; this prevents the editor from breaking when unlisting content. [#502]
- Automatically enable the imported configuration set when upgrading from v2 [#504]
- Add the .redactor-editor content style class to the set imported from v2 [S21929]
- Support custom configuration set to use with MIGX TVs, see: https://docs.modmore.com/en/Redactor/v3.x/Usage/MIGX.html [#501]

Changelog for redactor.js v3.3.3:
- Fixed: When formatting the list, the content is removed if the editor within the list.
- Fixed: Adding rows and columns to the table is available even if the cursor is not in the table.
- Improved: XSS sanitize when inserting svg and img.
- New: Setting source.codemirrorSrc if codemirror is used as a module.

Redactor 3.0.0-rc3
------------------
Released on 2020-02-05

- Prevent installation from continuing if server requirements aren\'t met
- Fix autocomplete for links only working in the first redactor instance per page (e.g. in ContentBlocks) [#500]
- Fix CSS scoping issue for CodeMirror, causing conflict with standalone CodeMirror extension [#503]

Redactor 3.0.0-rc2
------------------
Released on 2020-01-16

- Don\'t load English translation file to avoid emptying plugin translation strings (alignment, clips) [S21859]
- Fix z-index issues with the MODX media browser, by not overriding the z-index to make it appear in front of Redactor-built modals but closing the initiating Redactor modal window instead. [S21859]
- Add support for shift+tab to outdent within lists [B31]
- Fix replaced images not being saved [B31]
- Restore fixed toolbar to normal toolbar when opening full screen mode [#492]
- Split autoparse options in the configurator to a separate tab
- Add options for resource links: limit to current context, include introtext [S21862]
- Make directory depth for the simple browser configurable
- When adding a link, the resource search will now automatically query for the selected text
- Fix link styles not working correctly with multiple classnames
- Fix image styles not preselecting current styles when it has multiple classnames

Redactor 3.0.0-rc1
------------------
Released on 2020-01-14

Welcome to Redactor 3. A refreshed and modernised take on the rich text editor.

This is a major release and paid upgrade for users of Redactor 2. Learn more in the release announcement: https://modmore.com/blog/2020/redactor-3/

Some of the highlights in Redactor 3:

- Configuration is now managed with Configuration Sets. After installation, browse to Extras > Redactor Configuration to start. On upgrade, your previous settings will be (as much as possible) migrated to the new format, including context-specific overrides
- Much simpler media manager is now included by default. You can also use the standard MODX browser, or both!
- New input type for ContentBlocks allowing you to choose a configuration set per field
- You can now choose a configuration set per template
- New `divider` button lets you visually separate toolbar buttons
- Different themes are now supported, including the new default, a Redactor 2-inspired theme, and one filled with rainbows
- New properties plugin to set IDs and classes on any block element
- Improved core editing experience with better cleanup and some long-standing issues resolved
- redactor.css setting now support a comma separated list of CSS files rather than just one
- Sanitising file names now supports transliteration
- New Image Styles option lets you define classes that can be added to an image
- Experimental support for Fred
- Redactor plugins from Imperavi, which often do not ship with a translation, can now be translated through the MODX lexicon system

Powered by Imperavi\'s redactor.js v3.3.2.
',
    'standard-set' => '<?xml version="1.0" encoding="UTF-8"?>
<data package="redactor" exported="2019-08-26@13:09:31" total="2">
	<redConfigurationSet>
		<class_key><![CDATA[redConfigurationSet]]></class_key>
		<name><![CDATA[Standard]]></name>
		<description><![CDATA[]]></description>
		<content><![CDATA[{"buttons":"format, bold, italic, underline, divider, table, link, image, file, divider, ol, ul, indent, outdent, divider, redo, undo, divider, html","buttonsTextLabeled":"0","formatting":"p, h2, h3, h4, h5, h6, blockquote, pre","formattingAdd":"","air":"0","toolbar":"1","toolbarContext":"1","lang":"en","theme":"default","minHeight":"200","maxHeight":"","maxWidth":"","animation":"1","structure":"0","counter":"0","stylesClass":"redactor-styles","direction":"ltr","cleanOnEnter":"1","cleanInlineOnEnter":"1","removeScript":"1","removeNewLines":"0","removeComments":"1","pasteClean":"1","pastePlainText":"0","pasteLinks":"1","pasteLinkTarget":"false","pasteImages":"1","pasteBlockTags":"pre, h1, h2, h3, h4, h5, h6, table, tbody, thead, tfoot, th, tr, td, ul, ol, li, blockquote, p, figure, figcaption","pasteInlineTags":"a, img, br, strong, ins, code, del, span, samp, kbd, sup, sub, mark, var, cite, small, b, u, em, i","pasteKeepStyle":"","pasteKeepClass":"","pasteKeepAttrs":"","markup":"p","enterKey":"1","breakline":"0","preClass":"false","preSpaces":"4","tabAsSpaces":"","imageFigure":"1","imageCaption":"1","imagePosition":"1","imageFloatMargin":"1em","imageEditable":"1","imageResizable":"1","dragUpload":"1","clipboardUpload":"1","baseurlsMode":"relative","imageSimpleBrowser":"1","imageSimpleBrowserSource":"1","imageSimpleBrowserPath":"\\/assets\\/","fileSimpleBrowser":"1","fileSimpleBrowserSource":"1","fileSimpleBrowserPath":"\\/assets\\/","imageMODXBrowser":"1","imageMODXBrowserSource":"1","imageMODXBrowserPath":"\\/assets\\/","fileMODXBrowser":"1","fileMODXBrowserSource":"1","fileMODXBrowserPath":"\\/assets\\/","linkTitle":"1","linkNewTab":"1","linkNofollow":"0","linkToAnchor":"0","linkSize":"30","linkValidation":"1","definedlinks":"","autoparse":"1","autoparseLinks":"1","autoparseImages":"1","autoparseVideo":"1","source":"1","sourceCodemirror":"1","showSource":"0","limiter":"","clips":"","textexpander":"","variables":"","placeholder":"false","spellcheck":"1","grammarly":"0","tabKey":"1"}]]></content>
	</redConfigurationSet>
	<redConfigurationSet>
		<class_key><![CDATA[redConfigurationSet]]></class_key>
		<name><![CDATA[Minimal]]></name>
		<description><![CDATA[]]></description>
		<content><![CDATA[{"buttons":"format, divider, bold, italic, underline, deleted, divider, link, image","buttonsTextLabeled":"0","formatting":"p, h2, h3, h4, blockquote, code","formattingAdd":"","air":"0","toolbar":"1","toolbarContext":"1","lang":"en","theme":"default","minHeight":"100","maxHeight":"","maxWidth":"","animation":"1","structure":"0","counter":"0","stylesClass":"redactor-styles","direction":"","cleanOnEnter":"1","cleanInlineOnEnter":"1","removeScript":"1","removeNewLines":"0","removeComments":"1","pasteClean":"1","pastePlainText":"0","pasteLinks":"1","pasteLinkTarget":"false","pasteImages":"1","pasteBlockTags":"h1, h2, h3, h4, h5, h6, table, tbody, thead, tfoot, th, tr, td, ul, ol, li, blockquote, pre","pasteInlineTags":"strong, b, u, em, i, code, del, span, ins, samp, kbd, sup, sub, mark, var, cite, small","pasteKeepStyle":"","pasteKeepClass":"","pasteKeepAttrs":"","markup":"p","enterKey":"1","breakline":"0","preClass":"false","preSpaces":"4","tabAsSpaces":"","imageFigure":"1","imageCaption":"1","imagePosition":"0","imageFloatMargin":"10px","imageEditable":"1","imageResizable":"1","dragUpload":"1","clipboardUpload":"1","baseurlsMode":"relative","imageSimpleBrowser":"0","imageSimpleBrowserSource":"1","imageSimpleBrowserPath":"\\/","fileSimpleBrowser":"0","fileSimpleBrowserSource":"1","fileSimpleBrowserPath":"\\/","imageMODXBrowser":"1","imageMODXBrowserSource":"1","imageMODXBrowserPath":"\\/","fileMODXBrowser":"1","fileMODXBrowserSource":"1","fileMODXBrowserPath":"\\/","linkTitle":"1","linkNewTab":"0","linkNofollow":"0","linkToAnchor":"0","linkSize":"50","linkValidation":"1","definedlinks":"","autoparse":"1","autoparseLinks":"1","autoparseImages":"1","autoparseVideo":"1","source":"1","sourceCodemirror":"1","showSource":"0","limiter":"","clips":"","textexpander":"","variables":"","placeholder":"false","spellcheck":"1","grammarly":"1","tabKey":"1"}]]></content>
	</redConfigurationSet>
</data>',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'fb7a8063628fafe98b89259d08681dc2',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/ebddd655fc3a788834e8340ff5c39098.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'ce2af2c8635193405ad050fa4760fb56',
      'native_key' => 'ce2af2c8635193405ad050fa4760fb56',
      'filename' => 'xPDOFileVehicle/4b922cabdd678ac40845307176c0a78c.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '9834dcb1e1c3483d73ecc2c51e451f35',
      'native_key' => '9834dcb1e1c3483d73ecc2c51e451f35',
      'filename' => 'xPDOFileVehicle/1234d44043ceb0b68db4da506907b713.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e098b471a58129438821558e5bb460f5',
      'native_key' => 'redactor.configuration_set',
      'filename' => 'modSystemSetting/6515a0e37f3d810426e254657b83e1b6.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f96609334a7ed161d13b4a333f559dbf',
      'native_key' => 'redactor.introtext',
      'filename' => 'modSystemSetting/2f5daee86a0fade90e2016af8b26db62.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5a5f51b6edf9fd163dd0c2380583a578',
      'native_key' => 'redactor.introtext.configuration_set',
      'filename' => 'modSystemSetting/df04a0b1601c34bb6b1288b60f8c41f2.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd26ec6920971993ac79a3b01a2d7f800',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/3fc8fbc4487e3b2523d2e13674badfdb.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5fa8ed883a375f2a71f083cbc26b7fd4',
      'native_key' => 'redactor.js',
      'filename' => 'modSystemSetting/c6c753da55aa24fe1248c6f9a2e02bb2.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3587e620abc95bab9f079da807626213',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/6f2c12803b17ded13e30bf22d0e4f335.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '38119257bc207efa61b9756f77cddcd2',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/314107806d708dda89ea6323b6aaebc7.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd7b99a4feb7c3565469e2fb100257bd5',
      'native_key' => 'redactor.translit',
      'filename' => 'modSystemSetting/297d44541e78f96b5f286012d01bed91.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '170dd664be04cd815ae2ac2b74d5d7a4',
      'native_key' => 'redactor.translit_class',
      'filename' => 'modSystemSetting/e690c7dadb43ded7539552f02c4c56e9.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '06e2da9d83f34fcf4e16ea6eb00f3e08',
      'native_key' => 'redactor.translit_class_path',
      'filename' => 'modSystemSetting/d7e9664ae33bf5e1eddddc14adc78792.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '384069c7f5ab8f87e605fe315f8c151b',
      'native_key' => 'redactor.allow_data_uris',
      'filename' => 'modSystemSetting/bdfd3f3638ce36c39c485e8ef3581245.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '934d3e57cd092525c09fafff592b4a6a',
      'native_key' => 'redactor.configuration',
      'filename' => 'modMenu/5b9dd6bc21bd2b090a7ab8424dd590c6.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '80094eaa793d47eac6c8f7322ca6c61d',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/924c6459de7852b9e8bd88ac0372cb9c.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'encryptedVehicle',
      'class' => 'modPlugin',
      'guid' => 'db81c71a525480038a2b24be36f0991c',
      'native_key' => NULL,
      'filename' => 'modPlugin/d40cdec2338625b42766afbeb4b46e49.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => 'bff7a029f72899f59fe977c2de812a1a',
      'native_key' => 'bff7a029f72899f59fe977c2de812a1a',
      'filename' => 'xPDOScriptVehicle/d341826ecf977a1989afd8eaeb0eef71.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);