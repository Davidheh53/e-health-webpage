<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Health Application - Appointment</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container">
        <h1>Book an Appointment</h1>
        <p>Schedule an appointment with our healthcare providers. Please fill out the form below and we will get back to you as soon as possible.</p>
        
        <form action="book_appointment.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <span id="nameError" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <span id="phoneError" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" required>
                <span id="dateError" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="time">Preferred Time:</label>
                <input type="time" id="time" name="time" required>
                <span id="timeError" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="message">Additional Information:</label>
                <textarea id="message" name="message" rows="4" placeholder="Any additional information or requests"></textarea>
            </div>
            <button type="submit" class="btn">Book Appointment</button>
        </form>

        <div id="confirmationMessage" class="confirmation-message" style="display: none;">
            <p>Thank you for booking an appointment. We will get back to you soon.</p>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="/js/scripts.js"></script>
    <script>
        function validateForm() {
            var isValid = true;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var date = document.getElementById('date').value;
            var time = document.getElementById('time').value;

            if (name === '') {
                document.getElementById('nameError').innerText = 'Name is required';
                isValid = false;
            } else {
                document.getElementById('nameError').innerText = '';
            }

            if (email === '') {
                document.getElementById('emailError').innerText = 'Email is required';
                isValid = false;
            } else {
                document.getElementById('emailError').innerText = '';
            }

            if (phone === '') {
                document.getElementById('phoneError').innerText = 'Phone is required';
                isValid = false;
            } else {
                document.getElementById('phoneError').innerText = '';
            }

            if (date === '') {
                document.getElementById('dateError').innerText = 'Date is required';
                isValid = false;
            } else {
                document.getElementById('dateError').innerText = '';
            }

            if (time === '') {
                document.getElementById('timeError').innerText = 'Time is required';
                isValid = false;
            } else {
                document.getElementById('timeError').innerText = '';
            }

            if (isValid) {
                document.getElementById('confirmationMessage').style.display = 'block';
            }

            return isValid;
        }
    </script>
</body>
</html>