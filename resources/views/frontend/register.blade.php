@extends('frontend.layouts.main')
@section('main-container')
  <main>
    <article>
        <section class="section hero" style="padding-bottom: 300px; background-image: url('./assets/images/hero-bg.png')" aria-label="home">
            <div style="display: flex; justify-content: center; align-items: center; height: 400px;padding-top: 100px;">
              <form id="therapy-type-form" style="width: 40%; min-width:40%; max-width: 46%; background-color: white; padding: 20px; border-radius: 10px;">
                <h2 style="text-align: center; padding-bottom: 10px;">Therapy Type</h2>
                <div class="button-group">
                    <button class="therapy-option" id="individual">druggie</button>
                    <button class="therapy-option" id="couples">some other option</button>
                    <button class="therapy-option" id="family">heheh</button>
                    <button class="therapy-option" id="group">muahahha</button>
                  </div>                  
                <input type="hidden" name="therapy_type" id="therapy_type">
                <button type="submit" id="continue-button" style="width: 100%; padding: 10px; background-color: darkcyan; color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px;">Continue</button>
              </form>
              <form id="registration-form" style="width: 450%; min-width: 45%; max-width: 60%; background-color: white; padding: 20px; border-radius: 10px; display: none;">
                <h2 style="text-align: center; padding-bottom: 10px;">Create an Account</h2>
                <label for="name">Name:</label>
                <input style="border: 1px dotted black;" type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input style="border: 1px dotted black;" type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input style="border: 1px dotted black;"type="password" id="password" name="password" required>
                <label for="confirm-password">Confirm Password:</label>
                <input style="border: 1px dotted black;"type="password" id="confirm-password" name="confirm-password" required>
                <label style="padding-bottom: 10px;" for="phone">Phone:</label>
                <input style="padding-bottom: 20px; border: 1px dotted black;" type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="e.g. 1234567890">
                <label for="city">City:</label>
                <select id="city" name="country" required>
                  <option value="">Select your city</option>
                  <option value="karachi">karachi</option>
                  <option value="islamabad">burgerabad</option>
                  <option value="lahore">lahore</option>
                  <option value="peshawar">peshawar</option>
                </select>
                
                <button type="submit" style="width: 100%; padding: 10px; background-color: darkcyan; color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px;">Sign Up</button>
                <p style="text-align: center; margin-top: 10px;">Already have an account? <a href="login.html">Log in here</a>.</p>
              </form>
              
            </div>
          </section>
          
        
    </article>
  </main>
 
  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>
  <!-- 
    - custom js link
  -->
  <script src="./assets/js/register.js"></script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection