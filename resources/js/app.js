import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import TestConnection from './components/TestConnection';

const container = document.getElementById('app');
const root = createRoot(container);

root.render(
    <React.StrictMode>
        <TestConnection />
    </React.StrictMode>
);

// Example of how to use the API
// api.get('/api/your-endpoint')
//     .then(response => {
//         console.log(response.data);
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
