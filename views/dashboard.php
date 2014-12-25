<?php
    $url = $app->pathToUrl('site:');
    $href = $app->routeUrl("/preview");
    $payload = array(
        'key' => 'KJG8NXmqoMgzVAS31Mbh71TSLcV4PiR8dCscRaUJlumIUwpzrB',
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
    <a href="<?php echo $href; ?>">
        <img src="<?php echo $path; ?>" alt="Screenshot">
    </a>

</div>


