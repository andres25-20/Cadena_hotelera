// src/App.jsx
import React from 'react';
import Header from './components/Header';

const App = ({ children }) => {
  return (
    <>
      <Header /> {/* Aquí se incluye el Header */}
      <main className="container mt-5"> {/* Aumentamos el margen superior */}
        {children}
      </main>
    </>
  );
};

export default App;
