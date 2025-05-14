import React, { useState } from 'react';
import api from '../api';

function TestConnection() {
    const [connectionStatus, setConnectionStatus] = useState(null);
    const [error, setError] = useState(null);

    const testConnection = async () => {
        try {
            const response = await api.get('/api/test-connection');
            setConnectionStatus(response.data);
            setError(null);
        } catch (err) {
            setError(err.message);
            setConnectionStatus(null);
        }
    };

    return (
        <div className="p-4">
            <h2 className="text-xl font-bold mb-4">Backend Connection Test</h2>
            
            <button 
                onClick={testConnection}
                className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            >
                Test Connection
            </button>

            {connectionStatus && (
                <div className="mt-4 p-4 bg-green-100 rounded">
                    <p className="text-green-700">✅ Connection Successful!</p>
                    <p>Message: {connectionStatus.message}</p>
                    <p>Timestamp: {new Date(connectionStatus.timestamp).toLocaleString()}</p>
                </div>
            )}

            {error && (
                <div className="mt-4 p-4 bg-red-100 rounded">
                    <p className="text-red-700">❌ Connection Failed</p>
                    <p>Error: {error}</p>
                </div>
            )}
        </div>
    );
}

export default TestConnection; 