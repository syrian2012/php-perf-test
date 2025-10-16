<?php

// Number of processing tasks to perform
$totalTasks = 1000;

// Array to hold the time taken for each task
$taskTimes = [];

// Perform the tasks
for ($i = 0; $i < $totalTasks; $i++) {
    // Start time measurement for this task
    $startTime = microtime(true);

    // Simulate a heavy processing task
    $result = 0;
    
    // Complex mathematical operations
    for ($j = 0; $j < 500000; $j++) {
        $result += sqrt($j) * sin($j) * cos($j) * tan($j) * log($j + 1);
    }
    
    // Large array processing
    $largeArray = range(1, 10000);
    shuffle($largeArray);
    $sumArray = array_sum($largeArray);
    sort($largeArray);

    // String manipulation
    $str = "Benchmarking PHP";
    for ($k = 0; $k < 10000; $k++) {
        $str = strrev(base64_encode(md5($str)));
    }

    // End time measurement for this task
    $endTime = microtime(true);

    // Calculate the time taken for this task
    $taskTime = $endTime - $startTime;

    // Store the time taken
    $taskTimes[] = $taskTime;

    // Display the result of the task (just for reference, comment this out in production)
    // echo "Task $i result: " . number_format($result, 4) . "<br />";
}

// Calculate the total and average time taken for all tasks
$totalTime = array_sum($taskTimes);
$averageTime = $totalTime / $totalTasks;

// Output the results
echo "Benchmark Results<br />";
echo "=================<br />";
foreach ($taskTimes as $index => $time) {
    echo "Task " . ($index + 1) . " Time: " . number_format($time, 4) . " 
seconds<br />";
}
echo "<br />Total Time for $totalTasks Tasks: " . 
number_format($totalTime, 4) . " seconds<br />";
echo "Average Time per Task: " . number_format($averageTime, 4) . " 
seconds<br />";

?>