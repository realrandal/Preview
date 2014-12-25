<?php
    $url = $app->pathToUrl('site:');
    $payload = array(
        'key' => 'YeXuRO7DK0LWX4TyNg57i0M9QPWAxSVZYzIR4evICt55tFuwIE',
        'url' => ' ** YOUR URL HERE ** '
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
    <a target="_blank" href="<?php echo $url; ?>">
        <img src="<?php echo $path; ?>" alt="Screenshot">
    </a>

</div>


