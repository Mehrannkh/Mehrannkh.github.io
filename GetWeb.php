<?php
function get_page_source($url) {
    $response = file_get_contents($url);
    if ($response === false) {
        return "Error: Unable to fetch page source";
    }
    return $response;
}

// Example usage
$link = $_POST['link'];

// Fetch the content of the link
$link_response = file_get_contents($link);

// Return the response to the Python script
echo $link_response;
// $page_source = get_page_source($data);
// echo $page_source;
?>