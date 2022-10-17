@extends('head')
<form action="">
    <input type="text" id="email" name="email" placeholder="email">
    <input type="text" id="subjek" name="subjek" placeholder="subjek">
    <input type="text" id="body" name="isi" id="" placeholder="isi">
    <input type="button" value="Send Email" onclick="sendEmail()">
</form>
<input type="button" value="Send Email" onclick="sendEmail()">
<script src="{{asset('js/smtp.js')}}"></script>
<script>
    function sendEmail() {
        Email.send({
            Host : "smtp.yourisp.com",
            Username : "username",
            Password : "password",
            To : 'them@website.com',
            From : "you@isp.com",
            Subject : "This is the subject",
            Body : "And this is the body"
        }).then(
            message => alert(message)
        );
    }
    // $('button').on('click',function(){
    //     kirimEmail
    // })
</script>