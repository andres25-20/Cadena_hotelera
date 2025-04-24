import api from './axios';

export const getHoteles = async () => {
  try {
    const response = await api.get('/hoteles');
    return response.data;
  } catch (error) {
    console.error("Error al obtener hoteles", error);
    throw error;
  }
};

export const createHotel = async (data) => {
  try {
    const response = await api.post('/hoteles', data);
    return response.data;
  } catch (error) {
    console.error("Error al crear hotel", error);
    throw error;
  }
};
