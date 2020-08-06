<?php
function get_CURL($url)
{
    //Menggunakan curl
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}
//UCkXmLjEr95LVtGuIm3l2dPg
$datadariyutub = 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCkXmLjEr95LVtGuIm3l2dPg&key=AIzaSyCsAzu9Sapz3od9-UGZUbH4GMX3UjezNGw';
$result = get_CURL($datadariyutub);
$youtubeProfilePic[0] = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName[0] = $result['items'][0]['snippet']['title'];
$subscriber[0] = $result['items'][0]['statistics']['subscriberCount'];

$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCsAzu9Sapz3od9-UGZUbH4GMX3UjezNGw&channelId=UCkXmLjEr95LVtGuIm3l2dPg&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId[0] = $result['items'][0]['id']['videoId'];

//UC8butISFwT-Wl7EV0hUK0BQ
$datadariyutub = 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC8butISFwT-Wl7EV0hUK0BQ&key=AIzaSyCsAzu9Sapz3od9-UGZUbH4GMX3UjezNGw';
$result = get_CURL($datadariyutub);
$youtubeProfilePic[1] = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName[1] = $result['items'][0]['snippet']['title'];
$subscriber[1] = $result['items'][0]['statistics']['subscriberCount'];

$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCsAzu9Sapz3od9-UGZUbH4GMX3UjezNGw&channelId=UC8butISFwT-Wl7EV0hUK0BQ&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId[1] = $result['items'][0]['id']['videoId'];

//UCVyRiMvfUNMA1UPlDPzG5Ow
$datadariyutub = 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCVyRiMvfUNMA1UPlDPzG5Ow&key=AIzaSyCsAzu9Sapz3od9-UGZUbH4GMX3UjezNGw';
$result = get_CURL($datadariyutub);
$youtubeProfilePic[2] = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName[2] = $result['items'][0]['snippet']['title'];
$subscriber[2] = $result['items'][0]['statistics']['subscriberCount'];

$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCsAzu9Sapz3od9-UGZUbH4GMX3UjezNGw&channelId=UCVyRiMvfUNMA1UPlDPzG5Ow&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId[2] = $result['items'][0]['id']['videoId'];
