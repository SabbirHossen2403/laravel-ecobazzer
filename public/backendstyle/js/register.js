 document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset error states
            document.getElementById('email-error').style.display = 'none';
            document.getElementById('password-error').style.display = 'none';
            document.getElementById('confirm-error').style.display = 'none';
            document.getElementById('email').classList.remove('error-field');
            document.getElementById('password').classList.remove('error-field');
            document.getElementById('confirm-password').classList.remove('error-field');
            
            // Get form values
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const termsChecked = document.getElementById('terms').checked;
            
            // Validation flags
            let isValid = true;
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('email-error').style.display = 'block';
                document.getElementById('email').classList.add('error-field');
                isValid = false;
            }
            
            // Password validation
            if (password.length < 8) {
                document.getElementById('password-error').style.display = 'block';
                document.getElementById('password').classList.add('error-field');
                isValid = false;
            }
            
            // Confirm password validation
            if (password !== confirmPassword) {
                document.getElementById('confirm-error').style.display = 'block';
                document.getElementById('confirm-password').classList.add('error-field');
                isValid = false;
            }
            
            // Terms checkbox validation
            if (!termsChecked) {
                alert('Please accept the terms and conditions');
                isValid = false;
            }
            
           
        });