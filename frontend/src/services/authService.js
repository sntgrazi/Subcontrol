import axios from 'axios';
import { API_BASE_URL } from './apiConfig';

const api = axios.create({
    baseURL: API_BASE_URL, 
    withCredentials: true, 
});

export const login = async (credentials) => {
    try {
        const response = await api.post('/login', credentials);
        return response.data; 
    } catch (error) {
        console.error('Login error:', error);
        throw error;
    }
}

export const logout = async () => {
    try {
        await api.post('/logout');
    } catch (error) {
        console.error('Logout error:', error);
        throw error;
    }
}

