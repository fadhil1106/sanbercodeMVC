@extends('layouts.master')

@section('content')
    
    <h1>Buat Akun Baru!</h1>

    <h3>Sign Up Form</h3>

    <form action="{{ url('welcome') }}" method="post">
        @csrf
        <label for="firstName">First Name:</label><br>
        <input type="text" name="firstName" id="firstName" required><br><br>
        
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastName" id="lastName"><br><br>
        
        <label for="gender">Gender:</label><br>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br>
        <select name="nationality" id="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="singapore">Singapore</option>
            <option value="japan">Japan</option>
            <option value="korea">Korea</option>
            <option value="india">India</option>
        </select><br><br>

        <label for="languangeSpoken">Languange Spoken:</label><br>
        <input type="checkbox" name="bahasaIndonesia" id="bahasaIndonesia" value="bahasa indonesia" checked>
        <label for="bahasaIndonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="english" id="english" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" name="other" id="other" value="other">
        <label for="other">Other</label><br><br>

        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>

@endsection