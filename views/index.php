<?php
$url = $app->pathToUrl('site:');

?>

<div id="preview">

    <div class="uk-navbar">
        <span class="uk-navbar-brand">@lang('Preview')</span>
        <ul class="uk-navbar-nav">
            <li><a target="_blank" href="<?php echo $url; ?>" title="@lang('View Website')" data-uk-tooltip="{pos:'right'}" data-cached-title="Preview Website"><i class="uk-icon-eye"></i></a></li>
        </ul>
    </div>


    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="app-panel">
                <iframe src="<?php echo $url; ?>" frameborder="0" style="width: 100%; height: 670px;"></iframe>
            </div>
        </div>
    </div>

</div>

