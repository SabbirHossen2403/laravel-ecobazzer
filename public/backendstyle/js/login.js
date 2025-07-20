 document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const rememberMe = document.getElementById('remember').checked;
            
            // Here you would typically send this data to a server
            console.log('Login attempt with:', { email, password, rememberMe });
            
            // For demonstration, just show an alert
            alert(`Login submitted!\nEmail: ${email}\nRemember me: ${rememberMe}`);
            
            // In a real app, you would:
            // 1. Validate inputs
            // 2. Send to server for authentication
            // 3. Handle response (redirect on success, show error on failure)
        });

        // Optional: Add some interactive effects
        const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#007bff';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = '#ddd';
            });
        });