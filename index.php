<?php
include "GifCreator.php";
$frames = array(
'./images/frame_0_delay-0.6s.png',
'./images/frame_1_delay-0.6s.png',
'./images/frame_2_delay-0.6s.png',
'./images/frame_3_delay-0.6s.png',
'./images/frame_4_delay-0.6s.png',
'./images/frame_5_delay-0.6s.png',
'./images/frame_6_delay-0.6s.png',
'./images/frame_7_delay-0.6s.png'
);

$durations = array(60, 60, 60, 60,60,60,60,60);//60ms

$gc = new GifCreator();
$gc->create($frames, $durations, 0);

$gifBinary = $gc->getGif();

file_put_contents('./animated_picture.gif', $gifBinary);

echo 'finish';

?>