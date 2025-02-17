(function () {
    'use strict';

    // Modal functionality
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('myBtn');
        var span = document.getElementsByClassName('close')[0];

        if (btn) {
            btn.onclick = function () {
                modal.style.display = 'block';
            };
        }

        if (span) {
            span.onclick = function () {
                modal.style.display = 'none';
            };
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
    });

    // Form validation
    function validateForm() {
        var name = document.forms['appointmentForm']['name'].value;
        var email = document.forms['appointmentForm']['email'].value;
        var date = document.forms['appointmentForm']['date'].value;
        var time = document.forms['appointmentForm']['time'].value;

        if (name === '' || email === '' || date === '' || time === '') {
            alert('All fields must be filled out');
            return false;
        }

        // Email format validation
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address');
            return false;
        }

        return true;
    }

    // Attach form validation to the form submit event
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.forms['appointmentForm'];
        if (form) {
            form.onsubmit = validateForm;
        }
    });

    // Alert dismissal
    document.addEventListener('DOMContentLoaded', function () {
        var closeBtns = document.getElementsByClassName('closebtn');
        for (var i = 0; i < closeBtns.length; i++) {
            closeBtns[i].onclick = function () {
                var div = this.parentElement;
                div.style.opacity = '0';
                setTimeout(function () { div.style.display = 'none'; }, 600);
            };
        }
    });
})();