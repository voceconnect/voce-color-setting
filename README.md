Voce Color Setting
===================
Contributors: kevinlangleyjr, csloisel  
Tags: settings, color, iris  
Requires at least: 3.5  
Tested up to: 3.6  
Stable tag: 1.0.2  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

## Description
Voce Settings API Extension for creating color picker settings. Requires [Voce Settings API](https://github.com/voceconnect/voce-settings-api).

## Installation

### As standard plugin:
> See [Installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

### As theme or plugin dependency:
> After dropping the plugin into the containing theme or plugin, add the following:
```php
if( ! class_exists( 'Voce_Color_Setting' ) ) {
    require_once( $path_to_voce_color_setting . '/voce-color-setting.php' );
}
```

## Usage
See [Voce Settings API](https://github.com/voceconnect/voce-settings-api). 

Use `vs_display_color_picker` for the display callback arg and `vs_sanitize_color_picker` in the sanitize callbacks arg.

#### Example

```php
<?php
    $page->$group->add_setting( "Field Title", "field_id", array(
        'display_callback'   => 'vs_display_color_picker',
        'sanitize_callbacks' => array( 'vs_sanitize_color_picker' )
    ) );
?>
```

## Changelog

**1.1.0**
* Preventing fatal error for setups that load dependencies before WordPress

**1.0.2**
*Different regex for color sanitization.*

**1.0.1**
*Fixing regex for color sanitization.*

**1.0.0**
*Initial version.*