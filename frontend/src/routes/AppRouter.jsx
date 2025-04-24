// src/routes/AppRouter.jsx
import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import App from '../App';
import HotelesPage from '../pages/HotelesPage';

function AppRouter() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<App><HotelesPage /></App>} />
        {/* Puedes agregar más rutas aquí */}
      </Routes>
    </Router>
  );
}

export default AppRouter;
