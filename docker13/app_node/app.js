const express = require('express');
const app = express();
const PORT = 3000;

app.get('/', (req, res) => {
  res.send("<h2>Contenedor node en Docker</h2>");
});

app.listen(PORT, () => {
  console.log("Servidor en el puerto ${PORT}");
});