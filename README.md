# Yii 2 jQuiteLight Widget
Yii 2 Widget for jQuery Search Highlight Plugin: [jQuiteLight](https://github.com/iamwebdesigner/jQuiteLight)
## Installation

Composer command to install this package
```
composer require iamwebdesigner/yii2-jquitelight
```

## Usage

```php
<?php
use iamwebdesigner\jquitelight\Jquitelight;

Jquitelight::begin([
    'keywords' => ['sit amet', 'donec'],
    'clientOptions' => ['markData' => ['class' => 'highlighted-css']],
]);
?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ligula est. Phasellus a eros nec tellus tincidunt lobortis sed eget ex. Integer imperdiet non justo vitae varius. Sed eu consectetur lectus, eget pulvinar elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras bibendum mauris metus, sit amet euismod risus tempus sit amet. Nullam neque massa, ullamcorper id sem sit amet, consequat mattis sem.</p>
<p>Vivamus nec porttitor ipsum, in elementum lacus. Donec in accumsan augue. Curabitur malesuada ornare tortor vel tincidunt. Nullam sit amet posuere purus, id pharetra urna. Fusce mollis vulputate ex, et ultricies metus molestie sit amet. Maecenas ut elementum enim, eget lacinia purus. Proin ultrices ullamcorper auctor.</p>
<?php Jquitelight::end(); ?>
```
## Options
`keywords`  
Type: array  
**Required**  
Default: `[]`  
List of keywords to be highlighted. May be an as associative array, which is passed to the first argument of js plugin.

`clientOptions`  
Type: array  
Default: `[]`  
Options to be passed for js plugin. List of options available [here.](https://github.com/iamwebdesigner/jQuiteLight#options)

`htmlOptions`  
Type: array  
Default: `[]`  
HTML attributes of the container div.

`wrapContent`  
Type: bool  
Default: `true`
Whether to keep the container div wrap or not.
