<?php
// Sample data for historical sites
$historicalSites = [
  [
    'name' => 'Historical Site 1',
    'location' => 'Location 1',
    'description' => 'Description of Historical Site 1',
    'multimedia' => ['image1.jpg', 'video1.mp4']
  ],
  [
    'name' => 'Historical Site 2',
    'location' => 'Location 2',
    'description' => 'Description of Historical Site 2',
    'multimedia' => ['image2.jpg']
  ]
];

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($historicalSites);
?>
