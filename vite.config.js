import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input:['resources/js/app.jsx',
            'resources/js/Pages/Fournisseur/All.jsx', 
            'resources/js/Components/Table.jsx',
            'resources/js/Pages/DemandeAchat/All.jsx',
            'resources/js/Pages/DemandeAchat/Edit.jsx',
            ],
            ssr: 'resources/js/ssr.jsx',

            refresh: true,
        }),
        react(),
    ],
});
