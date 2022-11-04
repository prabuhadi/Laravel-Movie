@extends('layout.master')

@section('title')
    Form
@endsection

@section('judul1')
    Halaman SignUp
@endsection

@section('judul2')
    Untuk mendaftar SanberCode, Silahkan isi formulir kami
@endsection

@section('content')
    
<h1>Buat Account Baru</h1>
        <hr>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <label>Full Name :</label><br>
                <input type="text" name="fname" placeholder="First Name"><br>
            <br>
                <input type="text" name="lname" placeholder="Last Name"><br>
            <br>
            <label>Password :</label><br>
                <input type="password" name="pass" placeholder="Enter your password"><br>
            <br>
            <label>Your gender : (Choose only one)</label><br>
                <input type="checkbox" name="male">Male<br>
                <input type="checkbox" name="femamle">Female<br>
            <br>
            <label>Nationality :</label><br>
            <select name="nationanlity">
                <option value="indonesia">Indonesia</option>
                <option value="malaysia">Malaysia</option>
                <option value="singapore">Singapore</option>
                <option value="thailand">Thailand</option>
                <option value="vietnam">Vietnam</option>
                <option value="camboja">Camboja</option>
                <option value="laos">Laos</option>
                <option value="myanmar">Myanmar</option>
            </select><br>
            <br>
            <label>Language Spoken :</label><br>
                <input type="checkbox" name="bahasa indonesia">Bahasa Indonesia<br>
                <input type="checkbox" name="bahasa melayu">Bahasa Melayu<br>
                <input type="checkbox" name="english language">English Language<br>
                <input type="checkbox" name="Other">Other<br>
            <br>
            <label>Is married :</label><br>
                <input type="radio">Yes<br>
                <input type="radio">No<br><br>
            <label>Date of birth :</label><br>
                <input type="date" name="date"><br>
            <br>
            <label>Occupation :</label><br>
            <select name="occupation">
                <option value="senior web development">Senior Web Development</option>
                <option value="junior web development">Junior Web Development</option>
                <option value="fresh graduate">Fresh Graduate</option>
                <option value="collage student">Collage Student</option>
                <option value="freelance">Freelance</option>
            </select><br>
            <br>
            <label>Skill :</label><br>
                <input type="checkbox" name="skill1">VueJS<br>
                <input type="checkbox" name="skill2">ReactJS<br>
                <input type="checkbox" name="skill3">Laravel<br>
            <br>
            <label>About Me :</label><br>
            <textarea name="about me" rows="10" cols="30">Enter description about yourself and your latest project.</textarea><br>
            <br>
            <button href=/welcome>Sign Up</button>   
        </form>

@endsection

