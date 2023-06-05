<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2021 modmore <support@modmore.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
',
    'readme' => 'Big Brother
-----------

A collection of MODX Dashboard Widgets for Google Analytics v4.

Supports MODX 2.8+ and 3.0.0-alpha3+.

INSTALL INSTRUCTIONS:

- Install the package
- Add one (or more) of the Big Brother widgets to your dashboard via System > Dashboards on MODX2, or the Add button on the top right of the dashboard on MODX3.
- Navigate to the dashboard, and follow the provided information to authorize with your Google account.

NOTES & CREDITS:

- Developed by modmore
- Original 1.x development by @lossendae

BUGS AND DEVELOPMENT

To request improvements or report bugs, please visit GitHub: https://github.com/modmore/BigBrother

To support our open source work, please consider a donation via: https://modmore.com/extras/bigbrother/donate/
',
    'changelog' => 'Big Brother 3.0.0-rc1
----------------------
Released on 2022-08-27

In light of Google\'s deprecation of Out-Of-Band (OOB) authorizations, we\'ve implemented a proxy to keep authorizations smooth and quick. Existing authorizations will remain valid after this update.

IMPORTANT: Custom OAuth credentials are no longer supported for new authorizations!

Other changes:

- Remove some more legacy settings on update (account, account_name, total_account)


Big Brother 2.2.0-pl
----------------------
Released on 2021-10-02

- Add new "Top Referrers" widget to show common domain referrals. This is a standalone widget, so add it to your dashboard to use.
- Catch JS errors when instantiating widgets to avoid subsequent widgets from breaking if one fails
- Fix error in acquisitions widget if only one time period is returned (i.e. on freshly created properties)
- Fix incorrect values and comparison arrow in popular pages and top countries widgets
- Fix "Invalid argument supplied for foreach()" in key metrics widget if only one time period is returned [S29809]

Big Brother 2.1.1-pl
----------------------
Released on 2021-09-25

- Fix default credentials missing from the v2 build. If you installed an earlier v2 release and do not want to use custom oAuth credentials, delete the bigbrother.native_app_client_id and bigbrother.native_app_client_secret system settings (yes, delete them entirely) and reinstall the package to return to the default. [S29488]

Big Brother 2.1.0-pl
----------------------
Released on 2021-09-16

- Fix javascript error when profiles can\'t be loaded in the authorized screen, and adjust error message to indicate potential reasons [#78]
- Add BigBrother Admin policy/template and assign to admin on install
- Restrict authorization page to users with the bigbrother_authorize permission
- Update dependencies: chart.js to 3.5.1, luxon to 1.28.0, chartjs-adapter-luxon to 1.1.0, uglify-js to 3.14.2, google/analytics-admin to 0.4.0, google/analytics-data to 0.7.0

Big Brother 2.0.2-pl
----------------------
Released on 2021-08-03

- Fix issue installing guzzle7 due to incorrect version requirement

Big Brother 2.0.1-pl
----------------------
Released on 2021-08-03

- Remove guzzlehttp/guzzle from Big Brother, instead depend on the new guzzle7 package to avoid dependency conflicts (https://modx.com/extras/package/guzzle7)

Big Brother 2.0.0-pl
----------------------
Released on 2021-08-02

- Bump minimum PHP version to 7.2; this matches the updated MODX3 minimum version and resolves a Guzzle version conflict
- On MODX3 alpha4+, use the core-provided PSR7 Client with the Google SDK
- Update dependencies (uglify-js 3.14.1, chart.js 3.5.0, luxon 1.28, google/analytics-data 0.5.1, google/analytics-admin 0.3.0)
- Fix v1 widget not being replaced correctly on upgrade
- Remove v1 menu item on upgrade

Big Brother 2.0.0-dev4
----------------------
Released on 2021-06-08

- Fail installation if bcmath extension is not loaded; this is a requirement in the Google Protobuf dependency
- Catch API errors in listing accounts/properties, generating reports, verifying oAuth code, and refreshing access token [#47]
- Downgrade some dependencies to allow installation on 7.1 and up (once requirement goes up to 7.3+ this can be reverted)

Big Brother 2.0.0-dev3
----------------------
Released on 2021-06-07

- Make sure v1 widget is removed on upgrade to v2, attempt to automatically migrate
- Adjust the build to be more in line with our other packages

Big Brother 2.0.0-dev2
----------------------
Released on 2021-06-07

- Fix broken lexicons in the dashboard widget selection
- Fix requirements disallowing MODX3 (left-over from 1.5)

Big Brother 2.0.0-dev1
----------------------
Released on 2021-06-07

This is the first development build of Big Brother v2, containing 6 dashboard widgets.

Big Brother v2 is a complete rewrite to support Google Analytics v4 and MODX3. It cannot be used with Universal Analytics. It can be used on MODX 2.8 and up.

',
    'setup-options' => 'bigbrother-3.0.0-rc1/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '750a67fff081dc39c2d3c5dabdcc4a38',
      'native_key' => 'bigbrother',
      'filename' => 'modNamespace/4c11f0c78da49ca6b951cd0af545d5b2.vehicle',
      'namespace' => 'bigbrother',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'b89042a6506d74aa0f5beb853fef1e77',
      'native_key' => 'b89042a6506d74aa0f5beb853fef1e77',
      'filename' => 'xPDOFileVehicle/bbf342ad39ef9bbd310e0e5538d69f01.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => 'f1dd5c553f11f93820315b70171c558d',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/c4c5f216f7dfd8469c3e6f1c0c214c5b.vehicle',
      'namespace' => 'bigbrother',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'e32c1ad2acc0bf791235fe1124cae6e8',
      'native_key' => 'e32c1ad2acc0bf791235fe1124cae6e8',
      'filename' => 'xPDOFileVehicle/4438677ab72b3dd4c5bb98078f81ced9.vehicle',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c773074e541dd6dc752837c6877e6a97',
      'native_key' => 'bigbrother.oauth_flow',
      'filename' => 'modSystemSetting/725f5c7a81dceeba2ecaaa588fcd35e3.vehicle',
      'namespace' => 'bigbrother',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '177886196566915c94062b1d927f38f9',
      'native_key' => 'bigbrother.oauth_client_id',
      'filename' => 'modSystemSetting/531316caa8ceef00704d2399b3f4a2f0.vehicle',
      'namespace' => 'bigbrother',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e68d8e2e890cb68e32c4066ba6c38955',
      'native_key' => 'bigbrother.oauth_client_secret',
      'filename' => 'modSystemSetting/83c0c9ced9c2e578fc4186cc85260700.vehicle',
      'namespace' => 'bigbrother',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8dd6e7562e4d8cd4af529d4c4aae9d8e',
      'native_key' => 'bigbrother.property_id',
      'filename' => 'modSystemSetting/f7b52d9143c37936c3cc7be9a8846056.vehicle',
      'namespace' => 'bigbrother',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '225f0638b2cabe822655f7cf41adf22a',
      'native_key' => 'bigbrother.refresh_token',
      'filename' => 'modSystemSetting/5d3c6d40e3995dcebf180d305ba28390.vehicle',
      'namespace' => 'bigbrother',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cdc7cb199b5258d411d47c3dd57f6521',
      'native_key' => 'bigbrother.assets_url',
      'filename' => 'modSystemSetting/706cf2225525e045baa25805b1b06942.vehicle',
      'namespace' => 'bigbrother',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'acd2c71d7fa5f0ccc4624904c6710a3d',
      'native_key' => 'bigbrother.assets_path',
      'filename' => 'modSystemSetting/d2221506d1bd51cfaa226a0a8ef30e82.vehicle',
      'namespace' => 'bigbrother',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'efcb7de123c06cf857e4fae13b532203',
      'native_key' => 'bigbrother.core_path',
      'filename' => 'modSystemSetting/de1f742fdb7a6ba443f43ed700626965.vehicle',
      'namespace' => 'bigbrother',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1765406b58534855685c7a4d0bf0423f',
      'native_key' => 'bigbrother.scripts_dev',
      'filename' => 'modSystemSetting/ab2804ad65df049dcc20ab4fb2e38bfe.vehicle',
      'namespace' => 'bigbrother',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => 'af878e2c7574cb9efa0fb5c9082d8ecd',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/8cbee7d81e13a243dddb004b0aa2fceb.vehicle',
      'namespace' => 'bigbrother',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => '919e5f4f605638ba4e74857a9a0fc652',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/af2ed41569e442c1b2eea863a637eacb.vehicle',
      'namespace' => 'bigbrother',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => '2bdb33dd6042db5e7fe9e63d85953e02',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/ad0b295940151de2ae4c23f80b3786fc.vehicle',
      'namespace' => 'bigbrother',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => 'f70b24a8f90c4fc61fe73b7c51cd76b5',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/6496d3f454b21a67c3b1710be7eff0a3.vehicle',
      'namespace' => 'bigbrother',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => '7d90ac3b59335cb46f4ba29a533fdcfe',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/685c40cb39639da74da164f3755b49ee.vehicle',
      'namespace' => 'bigbrother',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => '2632819638ee7bc6efa099cb9be15c35',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/14eedd1105b6bafc7e4853abee6e7512.vehicle',
      'namespace' => 'bigbrother',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modDashboardWidget',
      'guid' => '6ab682e0c7187b62107d34aec28fb627',
      'native_key' => NULL,
      'filename' => 'modDashboardWidget/b7a93f26781e02aa4e0830826f76137d.vehicle',
      'namespace' => 'bigbrother',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '1d52379312b873671c280b7be192a86e',
      'native_key' => '1d52379312b873671c280b7be192a86e',
      'filename' => 'xPDOScriptVehicle/e089c61201414f7d07c5a832ddf1a309.vehicle',
      'namespace' => 'bigbrother',
    ),
  ),
);