

<style>
    body, html {
  height: 100%;
}

.bg { 
  /* The image used */
  background-image: url("/images/verify.png");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.button4 {
  background-color: pink;/* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin-top:550px;
margin-left:700px;
font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
.button5{

    background-color: transparent;/* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin-top:550px;
margin-left:200px;
font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}

    </style>
<div class="bg">    
                    @if (session('resent'))
                        <a class="button5" role="alert">
                            {{ __('A fresh verification link has been sent to your email address!') }}
</a>
                    @endif
 <a class="button4"href="{{ route('verification.resend') }}">Resend</a>.
</div>

