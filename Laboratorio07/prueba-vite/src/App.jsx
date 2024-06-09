import { useState } from 'react'
import { useRef } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function Prueba() {
  const nombreRef = useRef();
  const resultadoRef = useRef();

  const procesador = () => {
    resultadoRef.current.innerHTML = nombreRef.current.value;
  }


  return (
    <>
    <div>
      <input type='text' ref={nombreRef}/>
      <button onClick={procesador}>Enviar</button>
      <h1 ref={resultadoRef}></h1>
    </div>
    </>
  )
}



function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <div>
        <a href="https://vitejs.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Vite + React</h1>
      <div className="card">
        <Prueba/>
      </div>
    </>
  )
}

export default App
