<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Timer</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }
  
  .card {
    display: inline-block;
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  #timer {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
  }

  #controls {
    margin-bottom: 20px;
  }

  button {
    margin: 0 10px;
    padding: 8px 20px;
    font-size: 1em;
    cursor: pointer;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    outline: none;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #45a049;
  }

  button:active {
    background-color: #3e8e41;
  }
</style>
</head>
<body>
    <br>
  <div class="card">
    <h1>Timer</h1>
    <div>
    <label for="days">Days:</label>
      <input type="number" id="days" value="0">
      <label for="hours">Hours:</label>
      <input type="number" id="hours" value="0">
    </div>
    <br>
    <div id="controls">
      <button onclick="startTimer()">Start</button>
      <button onclick="pauseTimer()" id="pauseButton" disabled>Pause</button>
      <button onclick="stopTimer()" id="stopButton" disabled>Stop</button>
    </div>
    <div id="timer" style="display: none;">00:00:00</div>
  </div>

  <script>
    let timerInterval;
    let timeInSeconds = 0;
    let isPaused = false;
    const timerElement = document.getElementById('timer');
    const hoursInput = document.getElementById('hours');
    const daysInput = document.getElementById('days');
    const pauseButton = document.getElementById('pauseButton');
    const stopButton = document.getElementById('stopButton');

    function startTimer() {
      const hours = parseInt(hoursInput.value);
      const days = parseInt(daysInput.value);
      timeInSeconds = (days * 86400) + (hours * 3600);

      // Enable pause and stop buttons
      pauseButton.disabled = false;
      stopButton.disabled = false;

      timerInterval = setInterval(updateTimer, 1000);

      // Hide hours and days inputs and show timer
      hoursInput.style.display = 'none';
      daysInput.style.display = 'none';
      timerElement.style.display = 'block';
    }

    function updateTimer() {
      if (!isPaused) {
        const days = Math.floor(timeInSeconds / 86400);
        const hours = Math.floor((timeInSeconds % 86400) / 3600);
        const minutes = Math.floor((timeInSeconds % 3600) / 60);
        const seconds = timeInSeconds % 60;

        timerElement.textContent = `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        if (timeInSeconds <= 0) {
          clearInterval(timerInterval);
          timerElement.textContent = 'Time is up!';
        } else {
          timeInSeconds--;
        }
      }
    }

    function pauseTimer() {
      isPaused = !isPaused;
      pauseButton.textContent = isPaused ? 'Resume' : 'Pause';
    }

    function stopTimer() {
      clearInterval(timerInterval);
      timerElement.textContent = '00:00:00';
      timeInSeconds = 0;
      isPaused = false;

      // Disable pause and stop buttons
      pauseButton.disabled = true;
      stopButton.disabled = true;

      // Show hours and days inputs and hide timer
      hoursInput.style.display = 'block';
      daysInput.style.display = 'block';
      timerElement.style.display = 'none';
    }
  </script>
</body>
</html>
