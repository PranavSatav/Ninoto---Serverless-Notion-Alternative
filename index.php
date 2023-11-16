<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Tailwind CSS Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <style>
    body{
        font-family: 'Work Sans', sans-serif;
    }
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
        /* Additional styles specific to this app */
        .time-remaining {
            @apply text-gray-600;
        }
         .completed {
            text-decoration: line-through;
        }
    </style>
    <!-- Add the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="font-family: 'Work Sans', sans-serif;" class="flex">

   <!-- Sidebar -->

  <aside class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    <a href="#">
        <img class="w-auto h-16" src="https://i.imgur.com/PMgap1M.png" alt="">
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-3 ">
            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>

                <span class="mx-2 text-sm font-medium">Task List</span>
            </a>

            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                </svg>

                <span class="mx-2 text-sm font-medium">Issue</span>
            </a>

          <!--  <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                </svg>

                <span class="mx-2 text-sm font-medium">Projects</span>
            </a>

            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                </svg>

                <span class="mx-2 text-sm font-medium">Tasks</span>
            </a>

            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>

                <span class="mx-2 text-sm font-medium">Reporting</span>
            </a>

            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>

                <span class="mx-2 text-sm font-medium">Users</span>
            </a> -->
        </nav>

        <div>
            <div class="flex items-center justify-between">
                <h2 class="text-base font-semibold text-gray-800 dark:text-white">Useful Links</h2>

                <button class="p-0.5 hover:bg-gray-100 duration-200 transition-colors text-gray-500 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800 border rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>

            <nav class="mt-4 -mx-3 space-y-3 ">
                <button class="flex items-center justify-between w-full px-3 py-2 text-xs font-medium text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <div class="flex items-center gap-x-2 ">
                        <span class="w-2 h-2 bg-pink-500 rounded-full"></span>
                        <span>GitHub</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                

                <button class="flex items-center justify-between w-full px-3 py-2 text-xs font-medium text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                    <div class="flex items-center gap-x-2 ">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full"></span>
                        <span>App Version</span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                
            </nav>
        </div>
    </div>
</aside>
<!-- Main Content -->
    <div class="flex-1 p-10">
        <?php
$todoFile = 'tasks.txt';

// Set the timezone to Asia/Kolkata
date_default_timezone_set('Asia/Kolkata');

function readTasks($file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $tasks = unserialize($content);
        return $tasks ? $tasks : [];
    }
    return [];
}

function writeTasks($file, $tasks) {
    $content = serialize($tasks);
    file_put_contents($file, $content);
}

function calculateTimeRemaining($dueDateTime) {
    $currentTime = time();
    $dueTimestamp = strtotime($dueDateTime);

    if ($currentTime < $dueTimestamp) {
        $timeRemaining = $dueTimestamp - $currentTime;
        $hours = floor($timeRemaining / 3600);
        $minutes = floor(($timeRemaining % 3600) / 60);
        $seconds = $timeRemaining % 60;
        return "$hours hours, $minutes minutes, $seconds seconds";
    }

    return "Past Due";
}

if (isset($_POST['addCard'])) {
    $tasks = readTasks($todoFile);
    $tasks[] = [];
    writeTasks($todoFile, $tasks);
}

if (isset($_POST['addTask'])) {
    $cardIndex = $_POST['cardIndex'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];
    $dueDateTime = $_POST['dueDateTime'];

    if (!empty($task) && !empty($dueDateTime)) {
        $tasks = readTasks($todoFile);
        $tasks[$cardIndex][] = "unchecked | $priority | $dueDateTime | $task";
        writeTasks($todoFile, $tasks);
    }
}

if (isset($_POST['toggleTask'])) {
    $taskToToggle = $_POST['toggleTask'];
    list($cardIndex, $taskIndex) = explode('|', $taskToToggle);
    $tasks = readTasks($todoFile);

    if (isset($tasks[$cardIndex][$taskIndex])) {
        $taskInfo = explode(' | ', $tasks[$cardIndex][$taskIndex]);

        if ($taskInfo[0] === 'checked') {
            // If the task is marked as done, mark as undone
            $taskInfo[0] = 'unchecked';
        } else {
            // If the task is not marked as done, mark as done
            $taskInfo[0] = 'checked';
        }

        $tasks[$cardIndex][$taskIndex] = implode(' | ', $taskInfo);
        writeTasks($todoFile, $tasks);
    }
}

// Handle card deletion
if (isset($_POST['deleteCard'])) {
    $cardIndexToDelete = $_POST['deleteCard'];
    $tasks = readTasks($todoFile);

    if (isset($tasks[$cardIndexToDelete])) {
        unset($tasks[$cardIndexToDelete]);
        // Reindex the array to remove any gaps
        $tasks = array_values($tasks);
        writeTasks($todoFile, $tasks);
    }
}




if (isset($_POST['deleteTask'])) {
    $taskToDelete = $_POST['deleteTask'];
    list($cardIndex, $taskIndex) = explode('|', $taskToDelete);
    $tasks = readTasks($todoFile);

    if (isset($tasks[$cardIndex][$taskIndex])) {
        unset($tasks[$cardIndex][$taskIndex]);
        // Reindex the array to remove any gaps
        $tasks[$cardIndex] = array_values($tasks[$cardIndex]);
        writeTasks($todoFile, $tasks);
    }
}

$tasks = readTasks($todoFile);
?>

<?php
function countTasksByPriority($tasks, $priority) {
    $count = 0;
    foreach ($tasks as $card) {
        foreach ($card as $task) {
            list(, $taskPriority, $dueDateTime, ) = explode(' | ', $task);
            if ($taskPriority === $priority) {
                $count++;
            }
        }
    }
    return $count;
}

function countPastDueTasks($tasks) {
    $count = 0;
    foreach ($tasks as $card) {
        foreach ($card as $task) {
            list(, , $dueDateTime, ) = explode(' | ', $task);
            $currentTime = time();
            $dueTimestamp = strtotime($dueDateTime);
            if ($currentTime > $dueTimestamp) {
                $count++;
            }
        }
    }
    return $count;
}
?>


<div class="flex space-x-4">

    <!-- First Card -->
   <div class="max-w-xs overflow-hidden bg-white rounded-lg border border-grey-300 dark:bg-gray-800">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">High Priority</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">These are your high priority tasks, do those as soon as possible!</p>
    </div>

    <img src="https://i.pinimg.com/564x/1f/2c/67/1f2c671e2bbacb8791b6ae29336bd6c6.jpg" alt="Your Image" class="w-full object-cover rounded-t-xl h-32">

    <div class="flex items-center justify-between px-4 py-2" style="background-color:  rgba(0,0,0,0); backdrop-filter: blur(10px);">
        <h1 class="text-xs font-bold text-gray-800 uppercase dark:text-white">Needs Attention</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-gray-200 rounded hover:bg-gray-200 focus:bg-gray-100 focus:outline-none">High - <?= countTasksByPriority($tasks, 'high') ?></button>
    </div>
</div>



    <!-- Second Card -->
    <div class="max-w-xs overflow-hidden bg-white rounded-lg border border-grey-300 dark:bg-gray-800">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Medium Priority</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">These are your medium priority tasks, do those as soon as possible!</p>
    </div>

    <img src="https://i.pinimg.com/564x/5f/a5/7e/5fa57e72b3ce5cba688ad94c9e06e7ae.jpg" alt="Your Image" class="w-full object-cover rounded-t-xl h-32">

    <div class="flex items-center justify-between px-4 py-2" style="background-color:  rgba(0,0,0,0); backdrop-filter: blur(10px);">
        <h1 class="text-xs font-bold text-gray-800 uppercase dark:text-white">Moderate</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-gray-200 rounded hover:bg-gray-200 focus:bg-gray-100 focus:outline-none">Medium - <?= countTasksByPriority($tasks, 'mid') ?></button>
    </div>
</div>

    <!-- Third Card -->
    <div class="max-w-xs overflow-hidden bg-white rounded-lg border border-grey-300 dark:bg-gray-800">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Low Priority</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">These are your low priority tasks, do those as soon as possible!</p>
    </div>

    <img src="https://i.pinimg.com/564x/31/0d/d8/310dd833414481534e4c1331051f97cc.jpg" alt="Your Image" class="w-full object-cover rounded-t-xl h-32">

    <div class="flex items-center justify-between px-4 py-2" style="background-color:  rgba(0,0,0,0); backdrop-filter: blur(10px);">
        <h1 class="text-xs font-bold text-gray-800 uppercase dark:text-white">Casual</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-gray-200 rounded hover:bg-gray-200 focus:bg-gray-100 focus:outline-none">Low - <?= countTasksByPriority($tasks, 'low') ?></button>
    </div>
</div>
    
    
    
    <!-- fourth Card -->
     <div class="max-w-xs overflow-hidden bg-white rounded-lg border border-grey-300 dark:bg-gray-800">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">Past Due</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">These are your expired tasks, do those as soon as possible!</p>
    </div>

    <img src="https://i.pinimg.com/564x/d8/88/e6/d888e60318d918529b3e60f729eb7f2a.jpg" alt="Your Image" class="w-full object-cover rounded-t-xl h-32">

    <div class="flex items-center justify-between px-4 py-2" style="background-color:  rgba(0,0,0,0); backdrop-filter: blur(10px);">
        <h1 class="text-xs font-bold text-gray-800 uppercase dark:text-white">Expired</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-gray-200 rounded hover:bg-gray-200 focus:bg-gray-100 focus:outline-none">Past Due - <?= countPastDueTasks($tasks) ?></button>
    </div>
</div>

</div>



<div class="container flex flex-col items-center justify-between px-6 py-8 mx-auto lg:flex-row">
    <?php
// Set the timezone to India
date_default_timezone_set('Asia/Kolkata');

// Get the current time in India
$current_time = date('h:i A');

// Display the current time
echo "<p><b>It's currently $current_time</b></p>";
?>

        <div class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
            
            
            
            
            <form method="post" action="" class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
    
    
    <button type="submit" name="addCard" class="px-8 py-2 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-gray-200 rounded hover:bg-gray-200 focus:bg-gray-100 focus:outline-none">+ Add New Card</button>
</form>
        </div>

        
    </div>











<div class="flex flex-wrap -mx-4">
  <?php foreach ($tasks as $cardIndex => $card): ?>
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
      <div class="task-card p-4 rounded-xl border border-gray-400">
        <?php if (empty($card)): ?>
          <p class="text-gray-500 mt-2 mb-2">Add some tasks in this empty card</p>
        <?php endif; ?>

        <form method="post" action="" class="mb-4 flex items-center">
  <button type="button" onclick="addNewTask(<?= $cardIndex ?>)" class="flex items-center text-gray-500 hover:text-blue-500 focus:outline-none">
    <svg class="w-6 h-6 fill-current mr-2">
      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
      <path d="M14 7h-4c-.55 0-1 .45-1 1s.45 1 1 1h4c.55 0 1-.45 1-1s-.45-1-1-1z"></path>
    </svg>
    <span class="text-xs">Add Subtask</span>
  </button>
  <button type="submit" name="deleteCard" value="<?= $cardIndex ?>" class="flex items-center text-gray-500 hover:text-red-500 ml-2 focus:outline-none">
    <svg class="w-6 h-6 fill-current mr-2">
      <path d="M19 6h-4V5c0-1.1-.9-2-2-2s-2 .9-2 2v1H5c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM7 5c0-1.1.9-2 2-2s2 .9 2 2v1H7V5zm10 14H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1-1s-.45 1-1 1zm-1-9c-.55 0-1 .45-1 1s.45 1 1 1s1-.45 1-1s-.45-1-1-1z"></path>
    </svg>
    <span class="text-xs">Delete Card</span>
  </button>
</form>


        <?php foreach ($card as $taskIndex => $task): ?>
          <?php list($status, $priority, $dueDateTime, $task) = explode(' | ', $task); ?>
          <div class="<?= $status === 'checked' ? 'completed border p-2 bg-gray-100' : 'border p-2' ?> task mb-4 flex flex-col md:flex-row items-start md:items-center relative">
    <div class="flex-1">
              <div class="max-w-xs">
    <span class="text-xl font-bold text-gray-800 uppercase dark:text-white whitespace-normal"><?= $task ?></span>
</div>
              <div class="flex mt-4 ">
                  <div class="mt-2">
                <span class="text-gray-500 ">Priority:</span>
                <span class="px-2 py-1 bg-green-500 text-white text-xs  ml-2"><?= ucfirst($priority) ?></span>
                <span class="text-gray-500 ml-2">Due Date:</span>
                <span class="px-2 py-1 bg-blue-500 text-white text-xs  ml-2"><?= $dueDateTime ?></span></div>
              </div>
              <span class="time-remaining text-sm mt-2" id="timeRemaining<?= $cardIndex ?><?= $taskIndex ?>">
                Time Due: <?= calculateTimeRemaining($dueDateTime) ?>
              </span>
            </div>
            <form method="post" action="" class="ml-4 md:absolute top-0 right-0 mt-2 md:mt-0">
        <button type="submit" name="toggleTask" value="<?= $cardIndex ?>|<?= $taskIndex ?>" class="px-4 py-2 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-gray-200  hover:bg-gray-200 focus:bg-gray-100 focus:outline-none">
            <?php if ($status === 'checked'): ?>
                <span>Undo</span>
            <?php else: ?>
                <span>Done</span>
            <?php endif; ?>
        </button>
    </form>

   <form method="post" action="" class="absolute bottom-0 right-0 mb-2 mr-2">
    <button type="submit" name="deleteTask" value="<?= $cardIndex ?>|<?= $taskIndex ?>" class="bg-black text-white w-8 h-6 flex items-center justify-center hover:bg-gray-800 focus:outline-none">
        <span>X</span>
    </button>
</form>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>






<script>
    // Function to calculate and update time remaining
    function updateTimeRemaining(index, dueDateTime) {
        var dueTimestamp = new Date(dueDateTime).getTime();
        var timeElement = document.getElementById('timeRemaining' + index);

        function update() {
            var currentTime = new Date().getTime();
            var timeRemaining = dueTimestamp - currentTime;

            if (timeRemaining > 0) {
                var hours = Math.floor(timeRemaining / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
                timeElement.innerText =
                    'Time Due: ' + hours + ' hours, ' + minutes + ' minutes, ' + seconds + ' seconds';
            } else {
                timeElement.innerText = 'Time Due: Past Due';
            }
        }

        // Initial update
        update();

        // Update time remaining every second
        setInterval(update, 1000);
    }

    // Function to add a new task within a card
    function addNewTask(cardIndex) {
        var card = document.getElementsByClassName('task-card')[cardIndex];

        // Check if the form already exists
        if (card.getElementsByClassName('new-task-form').length > 0) {
            return; // Exit the function if the form already exists
        }

        var newTaskForm = document.createElement('form');
        newTaskForm.setAttribute('method', 'post');
        newTaskForm.setAttribute('action', '');
        newTaskForm.classList.add('new-task-form'); // Add a class to identify the form

        // Create prioritySelect
        var prioritySelect = document.createElement('select');
        prioritySelect.setAttribute('name', 'priority');
        prioritySelect.classList.add('form-select', 'mt-1', 'w-3/2', 'mr-2', 'rounded', 'shadow-md', 'focus:outline-none', 'bg-white', 'px-3', 'py-2', 'text-gray-800');

        var priorities = ['high', 'mid', 'low'];
        for (var i = 0; i < priorities.length; i++) {
            var option = document.createElement('option');
            option.setAttribute('value', priorities[i]);
            option.appendChild(document.createTextNode(priorities[i].charAt(0).toUpperCase() + priorities[i].slice(1)));
            prioritySelect.appendChild(option);
        }

        // Create dueDateTimeInput
        var dueDateTimeInput = document.createElement('input');
        dueDateTimeInput.setAttribute('type', 'datetime-local');
        dueDateTimeInput.setAttribute('name', 'dueDateTime');
        dueDateTimeInput.setAttribute('required', 'required');
        dueDateTimeInput.classList.add('form-input', 'mt-1', 'w-1/2', 'mr-2', 'rounded', 'shadow-md', 'focus:outline-none', 'bg-white', 'px-3', 'py-2');

        // Create newTaskInput
        var newTaskInput = document.createElement('input');
        newTaskInput.setAttribute('type', 'text');
        newTaskInput.setAttribute('name', 'task');
        newTaskInput.setAttribute('required', 'required');
        newTaskInput.setAttribute('placeholder', 'Enter your task...');
        newTaskInput.classList.add('form-input', 'mt-1', 'w-full', 'rounded', 'shadow-md', 'focus:outline-none', 'bg-white', 'px-3', 'py-2');

        // Create addTaskButton
var addTaskButton = document.createElement('button');
addTaskButton.setAttribute('type', 'submit');
addTaskButton.setAttribute('name', 'addTask');
addTaskButton.className = 'bg-blue-500 hover:bg-blue-700 text-white inline-block  mt-4 px-8 py-2 focus:outline-none mr-2 rounded';
addTaskButton.textContent = 'Add';

// Create cancelTaskButton
var cancelTaskButton = document.createElement('button');
cancelTaskButton.setAttribute('type', 'button');
cancelTaskButton.className = 'bg-gray-700 hover:bg-gray-900 text-white inline-block  mt-4 px-8 py-2 focus:outline-none rounded';
cancelTaskButton.textContent = 'Cancel';
cancelTaskButton.addEventListener('click', function () { card.removeChild(newTaskForm); });

// Create a div container for buttons and make it a flex container
var buttonsContainer = document.createElement('div');
buttonsContainer.className = 'flex flex-row';

// Append buttons to the container
buttonsContainer.appendChild(addTaskButton);
buttonsContainer.appendChild(cancelTaskButton);

// Append the container to the card or any other parent element
card.appendChild(buttonsContainer);



        var cardIndexInput = document.createElement('input');
        cardIndexInput.setAttribute('type', 'hidden');
        cardIndexInput.setAttribute('name', 'cardIndex');
        cardIndexInput.setAttribute('value', cardIndex);

        newTaskForm.appendChild(newTaskInput);
        newTaskForm.appendChild(prioritySelect);
        newTaskForm.appendChild(dueDateTimeInput);
        newTaskForm.appendChild(addTaskButton);
        newTaskForm.appendChild(cancelTaskButton);
        newTaskForm.appendChild(cardIndexInput);

        card.appendChild(newTaskForm);

    // Update time remaining for the new task
    var taskIndex = card.children.length - 2; // Index of the newly added task
    updateTimeRemaining(cardIndex + '' + taskIndex, dueDateTimeInput.value);
}

</script>
    </div>
</body>
</html>
