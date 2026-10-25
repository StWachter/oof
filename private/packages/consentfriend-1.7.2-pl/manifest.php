<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'ConsentFriend is proprietary software, developed by Thomas Jakobi for Treehill
Studio. By purchasing ConsentFriend you have received a usage license for one
single MODX Revolution installation, including one year email support (starting
at the day of purchase).

While we hope that ConsentFriend is useful for you, and we will try to help you
successfully use ConsentFriend, Treehill Studio is not liable for loss of
revenue, damages or other financial loss resulting from the installation or use
of ConsentFriend.

By using and installing this package, you acknowledge that you shall only use
this on one single MODX installation.

Redistribution in any shape or form is strictly prohibited. You may customize or
change the provided source code of ConsentFriend for your own needs, as long as
there is no attempt to remove the license protection code. By changing the
source code you acknowledge that you lose your right of support unless the code
change is coordinated with the support of Treehill Studio.
',
    'readme' => '# ConsentFriend

Consent management platform for MODX

- Author: Thomas Jakobi <office@treehillstudio.com>
- License: Proprietary

## Features and License

For a list of features and licensing possibilities, please check https://modmore.com/consentfriend/

## Installation

MODX Package Management

## Documentation

For more information please read the documentation on https://docs.treehillstudio.de/en/consentfriend/

## Translations

Translations of ConsentFriend can be made on [Weblate](https://hosted.weblate.org/projects/treehillstudio/consentfriend/)

## Klaro license

This extra includes the Klaro frontend script, for which we are thankful.

- Klaro (by KIProtect GmbH), BSD 3-Clause License (core/components/consentfriend/docs/klaro-license.txt).

## Third party licenses

This extra includes third party software, for which we are thankful.

* composer/ca-bundle@1.5.0 [MIT]
* geoip2/geoip2@v2.13.0 [Apache-2.0]
* maxmind-db/reader@v1.11.1 [Apache-2.0]
* maxmind/web-service-common@v0.9.0 [Apache-2.0]
* symfony/deprecation-contracts@v2.5.2 [MIT]
* symfony/polyfill-ctype@v1.29.0 [MIT]
* symfony/yaml@v5.4.35 [MIT]
* tronovav/geoip2-update@v2.3.1 [MIT]',
    'changelog' => '# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.7.2] - 2024-05-08

### Added

- Add consentfriend.mmdb_account_id system setting.

### Security

- Switched dependency from tronovav/geoip2-update to danielsreichenbach/geoip2-update because of security reasons. See https://github.com/tronovav/geoip2-update/issues/12

## [1.7.1] - 2024-04-04

### Fixed

- Fix a module namespace issue in the Klaro javascript introduced in 1.7.0

## [1.7.0] - 2024-03-30

### Added

- Make consentfriend services required/not required on base of the country detected by GeoIP.

### Fixed

- Don\'t remove purposes, contexts and countries when editing values in the service grid

## [1.6.5] - 2024-02-22

### Changed

- Extend googleAnalytics service data for consent mode v2

## [1.6.4] - 2024-01-26

### Added

- Don\'t log the usage when an invalid session key is detected

## [1.6.3] - 2023-06-27

### Fixed

- Clear the translations and services cache after editing a service too

## [1.6.2] - 2023-06-18

### Fixed

- Fix a warning in the regular expression detection

## [1.6.1] - 2023-05-19

### Fixed

- Fix undefined array key "required"

## [1.6.0] - 2023-05-04

### Added

- Statistics tab in the custom manager page
- Clean and empty buttons for the statistics in the statistics tab

### Changed

- Use the order of services for the order logged services to avoid duplicate entries in the statistics

### Fixed

- Fix the height of the statistics widget in MODX 3

## [1.5.5] - 2023-03-31

### Changed

- Enable an a service in all contexts, when the contexts input is empty
- Use Google Analytics 4 service code and cookie settings (only in new installations)

### Removed

- Remove IE support in the consentfriend css

## [1.5.4] - 2023-03-02

### Fixed

- Fix importing YAML exports in PHP 8+

## [1.5.3] - 2022-09-10

### Fixed

- Fix a widget issue, when when the user is not an admin
- Fix some styling issues in the custom manager page

## [1.5.2] - 2022-08-15

### Fixed

- Fix date column renderer in Safari
- Fix html validator issue \'Element “script” must not have attribute “defer” unless attribute “src” is also specified\'

## [1.5.1] - 2022-07-04

### Added

- Enable/disable ConsentFriend for templates by system settings

## [1.5.0] - 2022-06-23

### Added

- Context based service configuration
- New system setting consentfriend.use_contexts
- New contexts tab for assigning services to contexts
- Clear the ConsentFriend cache, when the MODX cache is cleared
- Inline editing of some columns in the service and purpose grid

### Changed

- Don\'t allow invalid MODX lexicon strings to break the Klaro lexicon

## [1.4.6] - 2022-04-25

### Added

- Status message with a successful download
- Add missing data-type="text/css" automatically in a service

### Fixed

- Fix a PHP warning in the user agent check

## [1.4.5] - 2022-03-16

### Changed

- Update lexicon

## [1.4.4] - 2022-02-28

### Added

- Install the Composer dependencies directly on the server

### Fixed

- Fix loading the wrong javascript when a css_url is implicitly set

## [1.4.3] - 2022-02-25

### Fixed

- Fix a wrong DB query during logging
- Show the logs of the current day in the widget

## [1.4.2] - 2022-02-24

### Changed

- User agent filter for the logging

## [1.4.1] - 2022-02-16

### Changed

- Update the visitor consent state during logging (if needed).

### Added

- Link to the ConsentFriend manager page on the dashboard widget

## [1.4.0] - 2022-02-12

### Added

- Add Czech, Portuguese and Chinese lexicon
- Additional \'consentfriend-\' prefix for css variables
- Set a depending plugin priority for the OnHandleRequest event
- Log session-based status of accepted and denied services from visitors with an anonymized IP address for later analysis
- Dashbord widget to see the logged data of ConsentFriend usage

## [1.3.5] - 2021-11-12

### Fixed

- MODX 3 beta compatibility

## [1.3.4] - 2021-09-10

### Fixed

- Fix a wrong isArray check
- Fix a too greedy regular expression for selecting the starting head tag 

## [1.3.3] - 2021-06-10

### Fixed

- Fix registering the the script tag in the head section with attributes in the head tag
- Fix a loadDropZones script issue in the modal window in the MODX backend

## [1.3.2] - 2021-04-29

### Fixed

- Fix default themes because of renamed scss variables in Klaro

## [1.3.1] - 2021-04-25

### Fixed

- Fix a install resolver issue

## [1.3.0] - 2021-04-23

### Added

- Import configuration during package setup from file located in `{core_path}/config/consentfriend/`
- Add Facebook Pixel service to the demo services
- Add Google Tag Manager service to the demo services

### Changed

- Import/Export format changed to YAML (old XML exports can still be imported)
- Import/Export the full consentfriend configuration to one file
- Update Klaro! to 0.7.18
- Changing the themes to use the new Klaro vars.scss. If you have created your own theme, please check the display of the consent popup after the update and after compiling the scss file for your site.

### Fixed

- Fix a syntax error in the frontend when the description of a service contains a line feed

## [1.2.2] - 2021-01-02

### Added

- Allow to install \'essential only\' demo data (will install only the session and the consentfriend service)

### Changed

- Don\'t run the license check on the manager login page
- Remove the column menu for the cookies grid

### Fixed

- Fix a missing data-type attribute in a script tag

## [1.2.1] - 2020-12-04

### Fixed

- Fix a not displayed value change in the cookies grid

## [1.2.0] - 2020-12-02

### Added

- Callback code for services
- Enable ACE Editor in ConsentFriend
- Allow the demo data be skipped/installed/updated/replaced on install/update
- `no_autoLoad` system setting, that will keep ConsentFriend from automatically loading itself when the page is being loaded.

### Changed

- Update Klaro! to 0.7.9
- Change the database default values to the used default values

### Fixed

- Fix a not updated/saved value in the cookies grid

### Removed

- Removed `advertisement` service key and translation (changed to `advertising` during an package update)

## [1.1.3] - 2020-11-17

### Added

- Updated/Added strings in the lexicon 

### Fixed

- Fix a missing custom name in the purpose dropdown in the service edit window

## [1.1.2] - 2020-11-11

### Added

- Updated/Added strings in the lexicon 

## [1.1.1] - 2020-11-04

### Added

- Allow context/system settings tags in the service code

### Fixed

- Fix scss files in installed assets

## [1.1.0] - 2020-11-04

### Added

- Import/Export of services and purposes

## [1.0.1] - 2020-10-25

### Changed

- Update Klaro! to 0.6.18

## [1.0.0] - 2020-10-15

### Added

- Public release

## [0.9.0] - 2020-10-02

### Added

- Initial beta release
',
    'setup-options' => 'consentfriend-1.7.2-pl/setup-options.php',
    'requires' => 
    array (
      'php' => '>=7.2',
      'modx' => '>=2.7',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '169a49a7e3dd5d747832ed0f1d45c24f',
      'native_key' => 'consentfriend',
      'filename' => 'modNamespace/01976e359cc48424a92d5cdec0e0b663.vehicle',
      'namespace' => 'consentfriend',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => '8807c8852ad208d812992f26180222c2',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/0befe5554eeff4ed3d7e38757fcf397f.vehicle',
      'namespace' => 'consentfriend',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eaba635fd5e70331ef7f4f996b7ae447',
      'native_key' => 'consentfriend.debug',
      'filename' => 'modSystemSetting/4175fb6a63b3dff42e8086b783f66764.vehicle',
      'namespace' => 'consentfriend',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b5477e6610c727ee31791230891698a9',
      'native_key' => 'consentfriend.use_contexts',
      'filename' => 'modSystemSetting/72ee7045c6961dd7d89fee570e1b5671.vehicle',
      'namespace' => 'consentfriend',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b31862eb1a6b33a1851a7dad5137c6fd',
      'native_key' => 'consentfriend.enabled_templates',
      'filename' => 'modSystemSetting/0091b5b11ad353fa3fbc3e47a5118de4.vehicle',
      'namespace' => 'consentfriend',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '564a34c12bb906c05c05fb1024b93075',
      'native_key' => 'consentfriend.disabled_templates',
      'filename' => 'modSystemSetting/60cb581588daab81e30511c48f2a91eb.vehicle',
      'namespace' => 'consentfriend',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3e0e29a09bcb46b3c966b0f8e559dc84',
      'native_key' => 'consentfriend.css_url',
      'filename' => 'modSystemSetting/1290384743b7defddf860cd00a9ce857.vehicle',
      'namespace' => 'consentfriend',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b731d11202ec3a8180918c24a07faa93',
      'native_key' => 'consentfriend.js_url',
      'filename' => 'modSystemSetting/a179942c7aa91250dbad76e6d9019e4a.vehicle',
      'namespace' => 'consentfriend',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '26b9e92777ad9bf5c2e6d056efe2e613',
      'native_key' => 'consentfriend.privacy_policy_id',
      'filename' => 'modSystemSetting/7617d7fab0cb2235176eba2c4903504d.vehicle',
      'namespace' => 'consentfriend',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1e4e2527947c9acd995d798d2845880e',
      'native_key' => 'consentfriend.theme',
      'filename' => 'modSystemSetting/cde62409edfef795451372214c42606c.vehicle',
      'namespace' => 'consentfriend',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bf0b49cef57e0f3ecca616385a63032e',
      'native_key' => 'consentfriend.enable',
      'filename' => 'modSystemSetting/20c3a2cc4a7afd831512b969e2f3c2dd.vehicle',
      'namespace' => 'consentfriend',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c28cc9b9d9ca313979ec9f29a142db5c',
      'native_key' => 'consentfriend.element_id',
      'filename' => 'modSystemSetting/640f316228c364608c434017a4eaccfc.vehicle',
      'namespace' => 'consentfriend',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e8d5eb99bad9bcf7eb7c260433ede78',
      'native_key' => 'consentfriend.no_autoLoad',
      'filename' => 'modSystemSetting/3d381184e1bbef623d26a8accc453257.vehicle',
      'namespace' => 'consentfriend',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c3ebc93186757e05a7f52c034a6a02b8',
      'native_key' => 'consentfriend.html_texts',
      'filename' => 'modSystemSetting/69c2258802dc44c306403a9f1748d9dd.vehicle',
      'namespace' => 'consentfriend',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3bbccba9aa293c1dfe74727c68a5a833',
      'native_key' => 'consentfriend.embedded',
      'filename' => 'modSystemSetting/803f71df31fe4ccdbaf8e1c84af2ea18.vehicle',
      'namespace' => 'consentfriend',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7f1872a827329ca47484ca4c50e2960c',
      'native_key' => 'consentfriend.group_by_purpose',
      'filename' => 'modSystemSetting/d683de42ae4ba086bdca4aea0b84f8b4.vehicle',
      'namespace' => 'consentfriend',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '25aced13913f8ee233fa1ed5a0ebf1bf',
      'native_key' => 'consentfriend.storage_method',
      'filename' => 'modSystemSetting/df3118434c826d314a76269208e790b5.vehicle',
      'namespace' => 'consentfriend',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '19fe64a11b6e700db9423b9c0a807b8b',
      'native_key' => 'consentfriend.default',
      'filename' => 'modSystemSetting/c3d79f8329c78a06965d34432dba2584.vehicle',
      'namespace' => 'consentfriend',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a140f022874a53049b9115705d38912f',
      'native_key' => 'consentfriend.must_consent',
      'filename' => 'modSystemSetting/7248eeaeeeaaf7615d72d552e1d14c97.vehicle',
      'namespace' => 'consentfriend',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ffd366b0b374962d109ba2a259ef66ec',
      'native_key' => 'consentfriend.accept_all',
      'filename' => 'modSystemSetting/dca4a73cbc6cbecf71849e4295485420.vehicle',
      'namespace' => 'consentfriend',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b3b9c65450435a3696a98f645350590',
      'native_key' => 'consentfriend.hide_decline_all',
      'filename' => 'modSystemSetting/c8b092af2ee1f7fc3942dea0bfe30632.vehicle',
      'namespace' => 'consentfriend',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4b605429d490d47660b771c3f06a003f',
      'native_key' => 'consentfriend.hide_learn_more',
      'filename' => 'modSystemSetting/4ed88dae33ece176b9c4cbe088b466d7.vehicle',
      'namespace' => 'consentfriend',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '60e3a97427bb592f42c8624954cee820',
      'native_key' => 'consentfriend.hide_learn_more_required_only',
      'filename' => 'modSystemSetting/72f1f74c736664ca55c5ea229ff43cd2.vehicle',
      'namespace' => 'consentfriend',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '11ea27f5b840eec1b288709412ee96ce',
      'native_key' => 'consentfriend.notice_as_modal',
      'filename' => 'modSystemSetting/8813e4bd07426344e2d4303bfe835a09.vehicle',
      'namespace' => 'consentfriend',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '08d019281fffe7b30d65f7546487de19',
      'native_key' => 'consentfriend.hide_powered_by',
      'filename' => 'modSystemSetting/a0086b5a830b0fe43f7e188d9cbedfda.vehicle',
      'namespace' => 'consentfriend',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b074a5e1c1e09159bed135a5160d18f5',
      'native_key' => 'consentfriend.cookie_name',
      'filename' => 'modSystemSetting/02273b3276b819f2f9f5f0f2ec981ab1.vehicle',
      'namespace' => 'consentfriend',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '06d015e4e03dd811042d3648558b3dda',
      'native_key' => 'consentfriend.cookie_expires_after_days',
      'filename' => 'modSystemSetting/5eeacf564891b800eeb020a994ce1111.vehicle',
      'namespace' => 'consentfriend',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '15e613c2195c190366d962abd7fbc1c3',
      'native_key' => 'consentfriend.cookie_domain',
      'filename' => 'modSystemSetting/ddee7a3cba6447028c744356ff347fcd.vehicle',
      'namespace' => 'consentfriend',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d9af79ba133f220e8cb1546bb4e45d5',
      'native_key' => 'consentfriend.log_usage',
      'filename' => 'modSystemSetting/dc0137afc8c832804c97733647a441ac.vehicle',
      'namespace' => 'consentfriend',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '18d87a44a886c65baefc868cad6972f4',
      'native_key' => 'consentfriend.user_agent_filter',
      'filename' => 'modSystemSetting/3985c77bc0d6f256c2a144900d73665e.vehicle',
      'namespace' => 'consentfriend',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '801c8ca84eb9572a6fed8a7dc53aa8d2',
      'native_key' => 'consentfriend.mmdb_database',
      'filename' => 'modSystemSetting/399644789cc9c0e17bf7f3c3118c132a.vehicle',
      'namespace' => 'consentfriend',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ed88d00907bea69c9ee64723b1781531',
      'native_key' => 'consentfriend.mmdb_refresh',
      'filename' => 'modSystemSetting/951aa4c394099778ac78b0c0a2584ed1.vehicle',
      'namespace' => 'consentfriend',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '881448a5a991b5c91b872b6bb5ca66d2',
      'native_key' => 'consentfriend.mmdb_account_id',
      'filename' => 'modSystemSetting/624325e550c11916d8787948af535fdc.vehicle',
      'namespace' => 'consentfriend',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '30bfb55fe722162547963d7ad4bc73d6',
      'native_key' => 'consentfriend.mmdb_license_key',
      'filename' => 'modSystemSetting/cb9c4302b06d2bcc3c5ccd3c268da572.vehicle',
      'namespace' => 'consentfriend',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9d9fcf152cd73790f3de7cb739486035',
      'native_key' => 'consentfriend.use_geoip',
      'filename' => 'modSystemSetting/95579e0514ef59346475692a06aac25a.vehicle',
      'namespace' => 'consentfriend',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65fe5f784f9e1d49451da4112b835d9a',
      'native_key' => 'consentfriend.cronjob_id',
      'filename' => 'modSystemSetting/66b03bba8df5afb5edd71ef09848ae00.vehicle',
      'namespace' => 'consentfriend',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f16e18f54d2ecc055b32300b41e15e54',
      'native_key' => 'consentfriend.use_cron',
      'filename' => 'modSystemSetting/dae0f33e7df4237bd2c5464f225c261a.vehicle',
      'namespace' => 'consentfriend',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'a452c972cf88b92150381bdce61a3439',
      'native_key' => NULL,
      'filename' => 'modCategory/7ecc04f91c6c35cd1952aac3123cda59.vehicle',
      'namespace' => 'consentfriend',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '9e951c79d054773336d29e799182ae5b',
      'native_key' => 'consentfriend.menu_home',
      'filename' => 'modMenu/3fb79b0e0d2cdc82b231f693dc69aa91.vehicle',
      'namespace' => 'consentfriend',
    ),
  ),
);