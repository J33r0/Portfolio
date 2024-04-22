//manage the input fields for the contact form
document.querySelector('main form').addEventListener('submit', function(event) {
    let userFname = document.getElementById('user_fname').value;
    let userLname = document.getElementById('user_lname').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    let emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;

    if(!userFname || userFname.trim() === '') {
        alert('Please enter your first name.');
        event.preventDefault();
    }

    else if(!userLname || userLname.trim() === '') {
        alert('Please enter your last name.');
        event.preventDefault();
    }

    else if(!email || email.trim() === '') {
        alert('Please enter your email address.');
        event.preventDefault();
    }

    else if(email && !emailRegex.test(email)) {
        alert('Please enter a valid email address. It should be in the format: example@example.com');
        event.preventDefault();
    }

    else if(!message || message.trim() === '') {
        alert('Please enter your message.');
        event.preventDefault();
    }
});