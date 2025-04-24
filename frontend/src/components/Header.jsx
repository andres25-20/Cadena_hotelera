// src/components/Header.jsx
import React from 'react';
import { Link } from 'react-router-dom';

const Header = () => {
  return (
    <nav className="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
      <div className="container-fluid">
        <Link className="navbar-brand" to="/" style={{ fontSize: '24px' }}>Cadena Hotelera</Link>
        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarNav">
          <ul className="navbar-nav ms-auto"> 
            <li className="nav-item">
              <Link className="nav-link active" to="/">Hoteles</Link>
            </li>
            <li className="nav-item">
              <Link className="nav-link" to="/habitaciones">Habitaciones</Link>
            </li>
            <li className="nav-item">
              <Link className="nav-link" to="/accommodation">Acomodaciones</Link>
            </li>
            <li className="nav-item">
              <Link className="nav-link" to="/accommodation">Administrador</Link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Header;
