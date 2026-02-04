import { useState } from "react";

function GuessTheNumber() {
  const [n, setN] = useState(Math.floor(Math.random() * 100 + 1));
  const [intentos, setIntentos] = useState(0);
  const [texto, setTexto] = useState("");
  const [valor, setValor] = useState("");

  function calcularDiferencia() {
    let aux = Number(valor);

    if (Number.isInteger(aux)) {
      console.log(n);
      console.log(aux);
      setIntentos(intentos + 1);
      aux > n
        ? setTexto("Demasiado alto")
        : aux < n
        ? setTexto("Muy bajo")
        : setTexto(`Has acertado en ${intentos + 1} intentos`);
    }
  }

  function reiniciar() {
    setN(Math.floor(Math.random() * 100 + 1));
    setIntentos(0);
    setTexto("");
    setValor("");
  }

  return (
    <div className="container">
      <h1>Juego: Adivina el número</h1>

      <p className="mensaje">{texto}</p>
      <br />
      <input
        className="input"
        type="number"
        placeholder="Ingresa un número entre 1 y 100"
        value={valor}
        onChange={(e) => setValor(e.target.value)}
      />
      <br />
      <br />
      <button className="button" onClick={calcularDiferencia}>
        Adivinar
      </button>
      <button className="button" onClick={reiniciar}>
        Reiniciar
      </button>
      <p>Intentos: {intentos}</p>
    </div>
  );
}

export default GuessTheNumber;
