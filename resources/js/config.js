window.CONFIG = {
    API_URL: 'https://myapp.com/api',
    APP_URL: 'https://myapp.com',
}

if (location.hostname === "localhost" || location.hostname === "127.0.0.1") {
    window.CONFIG.API_URL = 'http://127.0.0.1:8000/api';
    window.CONFIG.APP_URL = 'http://127.0.0.1:8000';
}
