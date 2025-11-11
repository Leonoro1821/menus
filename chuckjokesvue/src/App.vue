<template>
  <div id="app">
    <header>
      <h1>😂 Chuck Norris Jokes</h1>
    </header>

    <main>
      <ul class="jokes-list">
        <li v-for="(joke, index) in chuck" :key="index" class="joke-item">
          {{ joke.value }}
        </li>
      </ul>
    </main>
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      chuck: [
        { value: "Chuck Norris can skydive into outer space." },
        { value: "The chief export of Chuck Norris is pain." },
        { value: "Chuck Norris doesn't read books. He stares them down until he gets the information he wants." },
        { value: "Time waits for no man. Unless that man is Chuck Norris." },
        { value: "If you spell Chuck Norris in Scrabble, you win. Forever." },
      ]
    }
  }
}
</script>

<style>
body {
  background: #121212;
  font-family: 'Poppins', sans-serif;
  color: #f5f5f5;
  margin: 0;
  padding: 0;
}

#app {
  text-align: center;
  max-width: 700px;
  margin: 50px auto;
  padding: 20px;
  border-radius: 12px;
  background: #1f1f1f;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
}

header h1 {
  font-size: 2em;
  color: #ff9800;
  margin-bottom: 20px;
}

.jokes-list {
  list-style-type: none;
  padding: 0;
}

.joke-item {
  background: #2b2b2b;
  margin: 10px 0;
  padding: 15px 20px;
  border-radius: 10px;
  line-height: 1.4;
  transition: transform 0.2s ease, background 0.2s ease;
}

.joke-item:hover {
  transform: scale(1.02);
  background: #333333;
}
</style>
