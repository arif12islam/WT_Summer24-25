function submitForm() {
            const firstName = document.getElementById('first-name').value;
            const lastName = document.getElementById('last-name').value;
            const address = document.getElementById('address').value;
            const city = document.getElementById('city').value;
            const state = document.getElementById('state').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            if (!firstName || !lastName || !address || !city || !state || !phone || !email || !password || !confirmPassword) {
                alert("All fields must be filled out.");
                return false;
            }
            const nameRegex = /^[A-Za-z]+$/;
            if(!nameRegex.test(firstName)){
                alert("First Name must contain only alphabets.");
                return false;
            }
            if (!nameRegex.test(lastName)) {
                alert("Last Name must contain only alphabets.");
                return false;
            }

            const phoneRegex = /^\d{11}$/;
            if (!phoneRegex.test(phone)) {
                alert("Phone number must be exactly 11 digits.");
                return false;
            }
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#^_])[A-Za-z\d@$!%*?&#^_]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match.");
                return false;
            }
            alert("Form submitted successfully!");
            return true;
        }