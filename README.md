
Laravel Authentication Project

This project is a simple user authentication system built with Laravel. It provides a straightforward interface for users to register and log in.

 Features

1. User Interface:
   - When users visit the application, they are greeted with an interface that has two buttons: Register and Login.

2. User Registration:
   - If the user is not registered, they can click on the Register button to sign up.
   - The registration form requires the user to provide a username, email, and password.

3. User Login:
   - After registering, users can log in using their email and password by clicking on the Login button.
   - The login process uses Laravel's `Auth` class to handle authentication securely.

4. Authenticated User Interface:
   - Once logged in, users are redirected to a dashboard.
   - The dashboard features two buttons: Inner Page and Logout.
     - Inner Page: Navigates to a protected inner page accessible only to authenticated users.
     - Logout: Logs the user out of the application, ending their session.

Technology Used

- Laravel: The PHP framework used to build the authentication system.
- Bootstrap: For responsive and elegant UI design.

