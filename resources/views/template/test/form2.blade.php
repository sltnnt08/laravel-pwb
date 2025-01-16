<!DOCTYPE html>
    <html>
        <head>
            <title>Form Pendaftaran</title>
            <meta charset="utf-8"/>
        </head>
        <body>
            <h1>Create New Account</h1>
            <h3>Sign Up Form</h3>
            <form action="/welcome" method="get">
                <label for="fname">First Name :</label><br><br>
                <input type="text" id="fname" name="fname" placeholder="Your Name Here..." required>
                <br><br>
                <label for="lname">Last Name :</label><br><br>
                <input type="text" id="lname" name="lname" placeholder="Your Name Here..." required>
                <br><br>
                <p>Gender</p>
                    <input type="radio" id="gender" name="gender" value="Male">
                    <label for="gender">Male</label>
                    <br>
                    <input type="radio" id="gender" name="gender" value="Female">
                    <label for="gender">Female</label>
                    <br>
                <p>Nationality</p>  
                    <select name="nation">
                        <option value="none" disabled selected>--- Select One --- </option>
                        <option value="id">Indonesia</option>
                        <option value="other">Other</option>
                    </select>
                <p>Language Spoken</p>
                    <input type="checkbox" id="lang1" name="language" value="language">
                    <label for="lang1">Bahasa Indonesia</label><br>
                    <input type="checkbox" id="lang2" name="language" value="language" checked>
                    <label for="lang2">English</label><br>
                    <input type="checkbox" id="lang3" name="language" value="language">
                    <label for="lang3">Other</label>
                <p>Bio</p>
                    <textarea name="bio" cols="40" rows="10" placeholder="Your Bio Here..."></textarea>
                    <br><br>     
                    <input type="submit" id="sign up" name="sign_up" value="Sign Up">
            </form>
        </body>
    </html>