import api from './api';

async function testConnection() {
    try {
        const response = await api.get('/api/test-connection');
        console.log('Connection successful!', response.data);
        return response.data;
    } catch (error) {
        console.error('Connection failed:', error);
        throw error;
    }
}

export default testConnection; 