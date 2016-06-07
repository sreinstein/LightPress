# LightPress
A lightweight WordPress theme &amp; plugin.

## Motivation
Inspired by the ability to have a great starting point for all WordPress projects, this theme & plugin is a lightweight mobile-first solution.

## Code Examples

### Breakpoints
Pre-configured variables:
```
$bp-alpha   : 320px;
$bp-bravo   : 480px;
$bp-charlie : 768px;
$bp-delta   : 960px;
$bp-echo    : 1250px;
```

Breakpoint usage:
```
.example {
  font-size: 16px;
  @include breakpoint($bp-charlie) {  
    font-size: 18px;  
  }
}
```

Result:
```
.example {
  font-size:16px
}
@media (min-width:768px) {
  .example {
    font-size:18px;
  }
}
```

## Installation

* Clone the repo
* Fill in core WordPress files
* Navigate to theme folder and run: `sudo npm install`
* Run: `gulp watch`
* Rename local-config-sample.php to local-config.php and configure
* Install WordPress
* Activate Light Plugin
* Enjoy!

## Creator
Stephen Reinstein (www.sreinstein.com)

## Shoutouts
Thanks to ThemeShaper.com, Jack Perry, Tammy Hart, and 10up

## License
GPLv3
