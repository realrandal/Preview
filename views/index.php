<?php
$url = $app->pathToUrl('site:');

?>

<div id="preview">

    <div class="uk-navbar">
        <span class="uk-navbar-brand">@lang('Preview')</span>
    </div>


    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="app-panel">
                <iframe src="<?php echo $url; ?>" frameborder="0" style="width: 100%; height: 680px;"></iframe>
            </div>
        </div>
    </div>

</div>
