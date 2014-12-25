<?php
    $url = $app->pathToUrl('site:');
    $payload = array(
        'key' => 'YeXuRO7DK0LWX4TyNg57i0M9QPWAxSVZYzIR4evICt55tFuwIE',
        'url' => 'http://ac10.dk/projects/rhinobucket/'
    );

    $payload = json_encode($payload);

    $ch = curl_init('http://screeenly.com/api/v1/fullsize');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload))
        );

    $result = curl_exec($ch);


    $result = json_decode($result);
    $path = $result->path;

 ?>


<div class="uk-margin-bottom">
    <a href="<?php echo $url; ?>">
        <img src="<?php echo $path; ?>" alt="Screenshot">
<!-- <img id="p2i_demo" src="http://api.page2images.com/directlink?p2i_url=http://ac10.dk/projects/rhinobucket/&p2i_device=6&p2i_screen=1200x0&p2i_size=300x0&p2i_fullpage=1&p2i_refresh=1&p2i_key=662f87c1d144d63c" /> -->
    </a>

</div>


