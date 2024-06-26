<!-- VERSION DE PHP 8.1 -->

<!-- LAS FIJAS GAAAAAAA -->
1. composer install
2. copiar el .env example
3. php artisan key:generate
4. php artisan migrate --seed

<!-- FLOROOOOOOOOOOOOOOO -->
# [Material Dashboard Laravel - Free Frontend Preset for Laravel](https://material-dashboard-laravel-bs4.creative-tim.com/?ref=adnp-readme) [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&logo=twitter)](https://twitter.com/home?status=Material%20Dashboard%20Laravel%20is%20a%20Free%20Frontend%20Preset%20for%20Laravel%20%E2%9D%A4%EF%B8%8F%0Ahttps%3A//material-dashboard-laravel.creative-tim.com/%20%23%material%20%23design%20%23dashboard%20%23laravel%20%23free%20via%20%40CreativeTim)

![version](https://img.shields.io/badge/version-1.0.9-blue.svg) ![license](https://img.shields.io/badge/license-MIT-blue.svg) [![GitHub issues open](https://img.shields.io/github/issues/creativetimofficial/material-dashboard-laravel-bs4.svg?maxAge=2592000)](https://github.com/creativetimofficial/material-dashboard-laravel-bs4/issues?q=is%3Aopen+is%3Aissue) [![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/creativetimofficial/material-dashboard-laravel-bs4.svg?maxAge=2592000)](https://github.com/creativetimofficial/material-dashboard-laravel-bs4/issues?q=is%3Aissue+is%3Aclosed)

*Frontend version*: Material Dashboard v2.1.1. More info at https://www.creative-tim.com/product/material-dashboard

[<img src="https://s3.amazonaws.com/creativetim_bucket/products/154/original/opt_md_laravel_thumbnail.jpg" width="100%" />](https://www.creative-tim.com/live/material-dashboard-laravel-bs4) 


Speed up your web development with the Bootstrap 4 Admin Dashboard built for Laravel Framework 9.x and up.

## Note

We recommend installing this preset on a project that you are starting from scratch, otherwise your project's design might break.

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md   
And Laravel: https://laravel.com/docs/9.x/installation

## Installation

After initializing a fresh instance of Laravel (and making all the necessary configurations), install the preset using one of the provided methods:

### Via composer

1. `Cd` to your Laravel app  
2. Type in your terminal: `composer require laravel/ui` and `php artisan ui vue --auth`
3. Install this preset via `composer require laravel-frontend-presets/material-dashboard 1.1.3`. No need to register the service provider. Laravel 5.5 & up can auto detect the package.
4. Run `php artisan ui material` command to install the Argon preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
5. In your terminal run `composer dump-autoload`
6. Run `php artisan migrate --seed` to create basic users table

### By using the archive

1. In your application's root create a **presets** folder
2. [Download an archive](https://github.com/laravel-frontend-presets/material-dashboard/archive/master.zip) of the repo and unzip it
3. Copy and paste **material-dashboard-master** folder in presets (created in step 2) and rename it to **material**
4. Open `composer.json` file 
5. Add `"LaravelFrontendPresets\\MaterialPreset\\": "presets/material/src"` to `autoload/psr-4` and to `autoload-dev/psr-4`
6. Add `LaravelFrontendPresets\MaterialPreset\MaterialPresetServiceProvider::class` to `config/app.php` file
7. Type in your terminal: `composer require laravel/ui` and `php artisan ui vue --auth`
8. In your terminal run `composer dump-autoload`
9. Run `php artisan ui material` command to install the Material preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
10. Run `php artisan migrate --seed` to create basic users table


## Usage

Register a user or login using **admin@material.com** and **secret** and start testing the preset (make sure to run the migrations and seeders for these credentials to be available).

Besides the dashboard and the auth pages this preset also has an edit profile page. All the necessary files (controllers, requests, views) are installed out of the box and all the needed routes are added to `routes/web.php`. Keep in mind that all of the features can be viewed once you login using the credentials provided above or by registering your own user. 

### Dashboard

You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/home** in the url. 

### Profile edit

You have the option to edit the current logged in user's profile (change name, email and password). To access this page just click the "**User profile**" link in the left sidebar or by adding **/profile** in the url.

The `App\Http\Controllers\ProfileController` handles the update of the user information. 

```
public function update(ProfileRequest $request)
{
    auth()->user()->update($request->all());

    return back()->withStatus(__('Profile successfully updated.'));
}
```

Also you shouldn't worry about entering wrong data in the inputs when editing the profile, validation rules were added to prevent this (see `App\Http\Requests\ProfileRequest`). If you try to change the password you will see that other validation rules were added in `App\Http\Requests\PasswordRequest`. Notice that in this file you have a custom validation rule that can be found in `App\Rules\CurrentPasswordCheckRule`.

```
public function rules()
{
    return [
        'old_password' => ['required', 'min:6', new CurrentPasswordCheckRule],
        'password' => ['required', 'min:6', 'confirmed', 'different:old_password'],
        'password_confirmation' => ['required', 'min:6'],
    ];
}
```
## Table of Contents

* [Versions](#versions)
* [Demo](#demo)
* [Documentation](#documentation)
* [File Structure](#file-structure)
* [Browser Support](#browser-support)
* [Resources](#resources)
* [Reporting Issues](#reporting-issues)
* [Licensing](#licensing)
* [Useful Links](#useful-links)

## Versions

[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/html-logo.jpg?raw=true" width="60" height="60" />](https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/dashboard.html?ref=mdl-readme)
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/laravel_logo.png?raw=true" width="60" height="60" />](https://argon-dashboard-pro-laravel.creative-tim.com/?ref=mdl-readme)
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/vue.jpg" width="60" height="60" />](https://www.creative-tim.com/product/vue-material-dashboard?ref=mdl-readme)
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/json-api.png" width="140" height="60" />](https://www.creative-tim.com/product/vue-material-dashboard-laravel?ref=mdl-readme)

| HTML | LARAVEL |
| --- | --- |
| [![Material Dashboard HTML](https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg)](https://demos.creative-tim.com/material-dashboard/examples/dashboard.html?ref=mdl-readme) | [![Material Dashboard Laravel](https://s3.amazonaws.com/creativetim_bucket/products/154/original/opt_md_laravel_thumbnail.jpg?1554814177)](https://material-dashboard-laravel-bs4.creative-tim.com/?ref=mdl-readme)


| Vue | Vue & Laravel |
| --- | --- |
| [<img src="https://s3.amazonaws.com/creativetim_bucket/products/81/thumb/opt_md_vue_thumbnail.jpg" width="472px"/>](https://www.creative-tim.com/product/vue-material-dashboard?ref=mdl-readme) | [<img src="https://s3.amazonaws.com/creativetim_bucket/products/331/thumb/opt_md_vuelaravel_thumbnail.jpg" width="485px" />](https://www.creative-tim.com/product/vue-material-dashboard-laravel?ref=mdl-readme) |

## Demo

| Register | Login | Dashboard |
| --- | --- | ---  |
| [![Register](/screens/Register.png)](https://material-dashboard-laravel.creative-tim.com/register?ref=mdl-readme)  | [![Login](/screens/Login.png)](https://material-dashboard-laravel-bs4.creative-tim.com/login?ref=mdl-readme)  | [![Dashboard](/screens/Dashboard.png)](https://material-dashboard-laravel-bs4.creative-tim.com/?ref=mdl-readme)

| Profile Page | Users Page | Tables Page  |
| --- | --- | ---  |
| [![Profile Page](screens/Profile.png)](https://material-dashboard-laravel-bs4.creative-tim.com/profile?ref=mdlp-readme)  | [![Users Page](screens/Users.png)](https://material-dashboard-laravel-bs4.creative-tim.com/user?ref=mdl-readme) | [![Tables Page](screens/Tables.png)](https://material-dashboard-laravel-bs4.creative-tim.com/table-list?ref=mdl-readme)
[View More](https://material-dashboard-laravel-bs4.creative-tim.com/?ref=mdl-readme)

## Documentation
The documentation for the Material Dashboard Laravel is hosted at our [website](https://material-dashboard-laravel-bs4.creative-tim.com/docs/getting-started/laravel-setup.html?ref=mdl-readme).

## File Structure
```
+---app
|   +---Http
|   |   +---Controllers
|   |   |       HomeController.php
|   |   |       ProfileController.php
|   |   |       UserController.php
|   |   |       
|   |   \---Requests
|   |           PasswordRequest.php
|   |           ProfileRequest.php
|   |           UserRequest.php
|   |           
|   \---Rules
|           CurrentPasswordCheckRule.php
|           
+---database
|   \---seeds
|           DatabaseSeeder.php
|           UsersTableSeeder.php
|           
\---resources
    +---assets
    |   +---css
    |   |       material-dashboard-rtl.css
    |   |       material-dashboard.css
    |   |       material-dashboard.css.map
    |   |       material-dashboard.min.css
    |   |       
    |   +---demo
    |   |       demo.css
    |   |       demo.js
    |   |       
    |   +---img
    |   +---js
    |   |   |   material-dashboard.js
    |   |   |   material-dashboard.js.map
    |   |   |   material-dashboard.min.js
    |   |   |   settings.js
    |   |   |   
    |   |   +---core
    |   |   |       bootstrap-material-design.min.js
    |   |   |       jquery.min.js
    |   |   |       popper.min.js
    |   |   |       
    |   |   \---plugins
    |   |           arrive.min.js
    |   |           bootstrap-datetimepicker.min.js
    |   |           bootstrap-notify.js
    |   |           bootstrap-selectpicker.js
    |   |           bootstrap-tagsinput.js
    |   |           chartist.min.js
    |   |           fullcalendar.min.js
    |   |           jasny-bootstrap.min.js
    |   |           jquery-jvectormap.js
    |   |           jquery.bootstrap-wizard.js
    |   |           jquery.dataTables.min.js
    |   |           jquery.tagsinput.js
    |   |           jquery.validate.min.js
    |   |           moment.min.js
    |   |           nouislider.min.js
    |   |           perfect-scrollbar.jquery.min.js
    |   |           sweetalert2.js
    |   |           
    |   \---scss
    |       |   material-dashboard.scss
    |       |   
    |       \---material-dashboard
    |           |   _alerts.scss
    |           |   _buttons.scss
    |           |   _cards.scss
    |           |   _checkboxes.scss
    |           |   _core-bootstrap.scss
    |           |   _dropdown.scss
    |           |   _example-pages.scss
    |           |   _fixed-plugin.scss
    |           |   _footers.scss
    |           |   _forms.scss
    |           |   _headers.scss
    |           |   _images.scss
    |           |   _info-areas.scss
    |           |   _input-group.scss
    |           |   _misc.scss
    |           |   _mixins.scss
    |           |   _navbar.scss
    |           |   _popover.scss
    |           |   _popups.scss
    |           |   _radios.scss
    |           |   _responsive.scss
    |           |   _ripples.scss
    |           |   _sidebar-and-main-panel.scss
    |           |   _social-buttons.scss
    |           |   _tables.scss
    |           |   _tabs.scss
    |           |   _togglebutton.scss
    |           |   _tooltip.scss
    |           |   _type.scss
    |           |   _variables.scss
    |           |   
    |           +---bootstrap
    |           |   \---scss
    |           |       |   bootstrap-grid.scss
    |           |       |   bootstrap-reboot.scss
    |           |       |   bootstrap.scss
    |           |       |   _alert.scss
    |           |       |   _badge.scss
    |           |       |   _breadcrumb.scss
    |           |       |   _button-group.scss
    |           |       |   _buttons.scss
    |           |       |   _card.scss
    |           |       |   _carousel.scss
    |           |       |   _close.scss
    |           |       |   _code.scss
    |           |       |   _custom-forms.scss
    |           |       |   _dropdown.scss
    |           |       |   _forms.scss
    |           |       |   _functions.scss
    |           |       |   _grid.scss
    |           |       |   _images.scss
    |           |       |   _input-group.scss
    |           |       |   _jumbotron.scss
    |           |       |   _list-group.scss
    |           |       |   _media.scss
    |           |       |   _mixins.scss
    |           |       |   _modal.scss
    |           |       |   _nav.scss
    |           |       |   _navbar.scss
    |           |       |   _pagination.scss
    |           |       |   _popover.scss
    |           |       |   _print.scss
    |           |       |   _progress.scss
    |           |       |   _reboot.scss
    |           |       |   _root.scss
    |           |       |   _tables.scss
    |           |       |   _tooltip.scss
    |           |       |   _transitions.scss
    |           |       |   _type.scss
    |           |       |   _utilities.scss
    |           |       |   _variables.scss
    |           |       |   
    |           |       +---mixins
    |           |       |       _alert.scss
    |           |       |       _background-variant.scss
    |           |       |       _badge.scss
    |           |       |       _border-radius.scss
    |           |       |       _box-shadow.scss
    |           |       |       _breakpoints.scss
    |           |       |       _buttons.scss
    |           |       |       _caret.scss
    |           |       |       _clearfix.scss
    |           |       |       _float.scss
    |           |       |       _forms.scss
    |           |       |       _gradients.scss
    |           |       |       _grid-framework.scss
    |           |       |       _grid.scss
    |           |       |       _hover.scss
    |           |       |       _image.scss
    |           |       |       _list-group.scss
    |           |       |       _lists.scss
    |           |       |       _nav-divider.scss
    |           |       |       _navbar-align.scss
    |           |       |       _pagination.scss
    |           |       |       _reset-text.scss
    |           |       |       _resize.scss
    |           |       |       _screen-reader.scss
    |           |       |       _size.scss
    |           |       |       _table-row.scss
    |           |       |       _text-emphasis.scss
    |           |       |       _text-hide.scss
    |           |       |       _text-truncate.scss
    |           |       |       _transition.scss
    |           |       |       _visibility.scss
    |           |       |       
    |           |       \---utilities
    |           |               _align.scss
    |           |               _background.scss
    |           |               _borders.scss
    |           |               _clearfix.scss
    |           |               _display.scss
    |           |               _embed.scss
    |           |               _flex.scss
    |           |               _float.scss
    |           |               _position.scss
    |           |               _screenreaders.scss
    |           |               _sizing.scss
    |           |               _spacing.scss
    |           |               _text.scss
    |           |               _visibility.scss
    |           |               
    |           +---cards
    |           |       _card-plain.scss
    |           |       _card-profile.scss
    |           |       _card-stats.scss
    |           |       
    |           +---mixins
    |           |       _alert.scss
    |           |       _animations.scss
    |           |       _breakpoints.scss
    |           |       _buttons.scss
    |           |       _chartist.scss
    |           |       _colored-shadows.scss
    |           |       _drawer.scss
    |           |       _forms.scss
    |           |       _hover.scss
    |           |       _layout.scss
    |           |       _navbar-colors.scss
    |           |       _navs.scss
    |           |       _sidebar-color.scss
    |           |       _transparency.scss
    |           |       _type.scss
    |           |       _utilities.scss
    |           |       _variables.scss
    |           |       _vendor-prefixes.scss
    |           |       
    |           +---plugins
    |           |       _animate.scss
    |           |       _chartist.scss
    |           |       _perfect-scrollbar.scss
    |           |       
    |           \---variables
    |                   _body.scss
    |                   _bootstrap-material-design-base.scss
    |                   _bootstrap-material-design.scss
    |                   _brand.scss
    |                   _buttons.scss
    |                   _card.scss
    |                   _code.scss
    |                   _colors-map.scss
    |                   _colors.scss
    |                   _custom-forms.scss
    |                   _drawer.scss
    |                   _dropdown.scss
    |                   _forms.scss
    |                   _layout.scss
    |                   _list-group.scss
    |                   _menu.scss
    |                   _modals.scss
    |                   _nav.scss
    |                   _pagination.scss
    |                   _shadow.scss
    |                   _snackbar.scss
    |                   _spacing.scss
    |                   _state.scss
    |                   _tables.scss
    |                   _tooltip.scss
    |                   _type.scss
    |                   
    \---views
        |   dashboard.blade.php
        |   home.blade.php
        |   welcome.blade.php
        |   
        +---auth
        |   |   login.blade.php
        |   |   register.blade.php
        |   |   verify.blade.php
        |   |   
        |   \---passwords
        |           email.blade.php
        |           reset.blade.php
        |           
        +---layouts
        |   |   app.blade.php
        |   |   
        |   +---footers
        |   |       auth.blade.php
        |   |       guest.blade.php
        |   |       
        |   +---navbars
        |   |   |   sidebar.blade.php
        |   |   |   
        |   |   \---navs
        |   |           auth.blade.php
        |   |           guest.blade.php
        |   |           
        |   \---page_templates
        |           auth.blade.php
        |           guest.blade.php
        |           
        +---pages
        |       icons.blade.php
        |       language.blade.php
        |       map.blade.php
        |       notifications.blade.php
        |       table_list.blade.php
        |       typography.blade.php
        |       upgrade.blade.php
        |       
        +---profile
        |       edit.blade.php
        |       
        \---users
                index.blade.php
```

## Browser Support

At present, we officially aim to support the last two versions of the following browsers:

<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/chrome-logo.png?raw=true" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/firefox-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/edge-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/safari-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/opera-logo.png" width="64" height="64">


## Resources
- Demo: <https://material-dashboard-laravel-bs4.creative-tim.com/?ref=mdlp-readme>
- Download Page: <https://www.creative-tim.com/product/material-dashboard-laravel-bs4?ref=mdl-readme>
- Documentation: <https://material-dashboard-laravel-bs4.creative-tim.com/docs/getting-started/laravel-setup.html?ref=mdl-readme>
- License Agreement: <https://www.creative-tim.com/license>
- Support: <https://www.creative-tim.com/contact-us>
- Issues: [Github Issues Page](https://github.com/creativetimofficial/material-dashboard-laravel-bs4/issues)
- **Dashboards:**

| HTML | LARAVEL |
| --- | --- |
| [![Material Dashboard HTML](https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg)](https://demos.creative-tim.com/material-dashboard/examples/dashboard.html?ref=mdl-readme) | [![Material Dashboard Laravel](https://s3.amazonaws.com/creativetim_bucket/products/154/original/opt_md_laravel_thumbnail.jpg?1554814177)](https://material-dashboard-laravel-bs4.creative-tim.com/?ref=mdl-readme)

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Creative Tim](https://creative-tim.com/?ref=mdl-readme)
- [UPDIVISION](https://updivision.com)

## Reporting Issues

We use GitHub Issues as the official bug tracker for the Material Dashboard Laravel. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Material Dashboard Laravel. Check the CHANGELOG from your dashboard on our [website](https://www.creative-tim.com/?ref=mdl-readme).
2. Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.
3. Some issues may be browser specific, so specifying in what browser you encountered the issue might help.

## Licensing

- Copyright Creative Tim (https://www.creative-tim.com/?ref=mdl-readme)
- Licensed under MIT (https://github.com/creativetimofficial/material-dashboard-laravel-bs4/blob/master/license.md)

## Useful Links

- [Tutorials](https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w)
- [Affiliate Program](https://www.creative-tim.com/affiliates/new) (earn money)
- [Blog Creative Tim](http://blog.creative-tim.com/)
- [Free Products](https://www.creative-tim.com/bootstrap-themes/free) from Creative Tim
- [Premium Products](https://www.creative-tim.com/bootstrap-themes/premium?ref=mdl-readme) from Creative Tim
- [React Products](https://www.creative-tim.com/bootstrap-themes/react-themes?ref=mdl-readme) from Creative Tim
- [Angular Products](https://www.creative-tim.com/bootstrap-themes/angular-themes?ref=mdl-readme) from Creative Tim
- [VueJS Products](https://www.creative-tim.com/bootstrap-themes/vuejs-themes?ref=mdl-readme) from Creative Tim
- [More products](https://www.creative-tim.com/bootstrap-themes?ref=mdl-readme) from Creative Tim
- Check our Bundles [here](https://www.creative-tim.com/bundles??ref=mdl-readme)

### Social Media

### Creative Tim:

Twitter: <https://twitter.com/CreativeTim?ref=mdl-readme>

Facebook: <https://www.facebook.com/CreativeTim?ref=mdl-readme>

Dribbble: <https://dribbble.com/creativetim?ref=mdl-readme>

Instagram: <https://www.instagram.com/CreativeTimOfficial?ref=mdl-readme>

### Updivision:

Twitter: <https://twitter.com/updivision?ref=mdl-readme>

Facebook: <https://www.facebook.com/updivision?ref=mdl-readme>

Linkedin: <https://www.linkedin.com/company/updivision?ref=mdl-readme>

Updivision Blog: <https://updivision.com/blog/?ref=mdl-readme>

## Credits

- [Creative Tim](https://creative-tim.com/?ref=mdl-readme)
- [UPDIVISION](https://updivision.com)
