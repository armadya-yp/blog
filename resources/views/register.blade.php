<!DOCTYPE html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
        <!-- membuat tampilan form  -->
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome2" method="POST">           <!-- form action="http://localhost:8000/welcome"> -->
            @csrf
            <label for="NamaDepan">First Name:</label><br>
            <input type="text" id="firstname" name="firstname" required=""> <br> <br>
            <label for="NamaAkhir">Last Name:</label><br>
            <input type="text" id="lastname" name="lastname" required="">
            <br>
            <label for="Gender">Gender:</label><br>
            <input type="Radio" name="Gender" value="L" id="Gender">Male <br>
            <input type="Radio" name="Gender" value="P" id="Gender">Female <br>
            <input type="Radio" name="Gender" value="O" id="Gender">Other
            <br>
            <label for="bangsa">Nationality:</label><br>
            <select>
                <option value="Ina">Indonesian</option>
                <option value="Sin">Singapuran</option>
                <option value="Mas">Malaysian</option>
                <option value="Oth">Other</option>
            </select>    
            <br><br>
            <label for="bahasa">Language Spoken:</label><br>
            <input type="checkbox" name="bahasa" value="Ina" id="bahasa">Bahasa Indonesia<br>
            <input type="checkbox" name="bahasa" value="Eng" id="bahasa">English<br>
            <input type="checkbox" name="bahasa" value="Oth" id="bahasa">Other<br>
            <br>
            <label for="bio">Bio:</label><br>
            <textarea name="bio" id="bio" cols="50" rows="7"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>