// src/pages/HotelesPage.jsx
import React, { useEffect } from 'react';

const HotelesPage = () => {
  useEffect(() => {
    console.log("HotelesPage cargada");
  }, []);

  return (
    <div>
      <h1>Lista de Hoteles</h1>
      <p>Aquí se mostrarán los hoteles.</p>
    </div>
  );
};

export default HotelesPage;
