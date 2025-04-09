import axios from 'axios';
import { API_BASE_URL } from './apiConfig';

const api = axios.create({
    baseURL: API_BASE_URL, 
    withCredentials: true, 
});

export const createPlan = async (planData) => {
    try {
        const response = await api.post('/plans', planData);
        return response.data; 
    } catch (error) {
        console.error('Create plan error:', error);
        throw error;
    }
}

export const getPlans = async () => {
    try {
        const response = await api.get('/plans');
        return response.data; 
    } catch (error) {
        console.error('Get plans error:', error);
        throw error;
    }
}